<?php

namespace TranslationKeyHelper;

use Illuminate\Translation\Translator;
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
        $this->app->extend('translator', static function (Translator $translator) {
            $trans = new CustomJsonTranslator($translator->getLoader(), $translator->getLocale());
            $trans->setFallback($translator->getFallback());
            return $trans;
        });
    }
}
