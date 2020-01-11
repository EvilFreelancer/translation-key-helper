<?php

namespace TranslationKeyHelper;

use Illuminate\View\ViewServiceProvider;

class ServiceProvider extends ViewServiceProvider
{
    public function boot()
    {
        \Blade::setEchoFormat('%s');
    }

    public function register()
    {
        // Override the JSON Translator
        $this->app->extend('translator', function ($translator) {
            $trans = new CustomJsonTranslator($translator->getLoader(), $translator->getLocale());
            $trans->setFallback($translator->getFallback());
            return $trans;
        });

        // The Compiler engine requires an instance of the CompilerInterface, which in
        // this case will be the Blade compiler, so we'll first create the compiler
        // instance to pass into the engine so it can compile the views properly.
        $this->app->singleton('blade.compiler', function () {
            return new CustomBladeCompiler(
                $this->app['files'], $this->app['config']['view.compiled']
            );
        });
    }
}
