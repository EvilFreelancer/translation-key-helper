<?php

class HelperTest extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            TranslationKeyHelper\ServiceProvider::class
        ];
    }

    public function testEchoFormat()
    {
        $format = \Blade::getEchoFormat();
        $this->assertEquals($format, '%s');
    }
}
