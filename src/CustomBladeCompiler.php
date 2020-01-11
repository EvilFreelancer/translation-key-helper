<?php

namespace TranslationKeyHelper;

use Illuminate\View\Compilers\BladeCompiler;

class CustomBladeCompiler extends BladeCompiler
{
    /**
     * @return string
     */
    public function getEchoFormat(): string
    {
        return $this->echoFormat;
    }
}