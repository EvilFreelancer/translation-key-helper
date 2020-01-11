<?php

class HelperTest extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            TranslationKeyHelper\ServiceProvider::class
        ];
    }

    /**
     * Dirty hack, but it's working
     *
     * @param $obj
     * @param $name
     *
     * @return mixed
     */
    private function getProtectedValue($obj, $name)
    {
        $array  = (array) $obj;
        $prefix = chr(0) . '*' . chr(0);
        return $array[$prefix . $name];
    }

    public function testEchoFormat()
    {
        $blade  = resolve('blade.compiler');
        $format = $this->getProtectedValue($blade, 'echoFormat');
        $this->assertEquals($format, '%s');
    }
}
