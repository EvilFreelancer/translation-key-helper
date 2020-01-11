<?php

if (!function_exists('trans')) {
    /**
     * Translate the given message.
     *
     * @param string|null $key
     * @param array       $replace
     * @param string|null $locale
     *
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function trans($key = null, $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return app('translator');
        }
        if (config('app.debug') === true) {
            return '<!--' . $key . '--!>' . app('translator')->get($key, $replace, $locale);
        }
        return app('translator')->get($key, $replace, $locale);
    }
}

if (!function_exists('trans_choice')) {
    /**
     * Translates the given message based on a count.
     *
     * @param string               $key
     * @param \Countable|int|array $number
     * @param array                $replace
     * @param string|null          $locale
     *
     * @return string
     */
    function trans_choice($key, $number, array $replace = [], $locale = null)
    {
        if (config('app.debug') === true) {
            return '<!--' . $key . '--!>' . app('translator')->choice($key, $number, $replace, $locale);
        }
        return app('translator')->choice($key, $number, $replace, $locale);
    }
}
