<?php

namespace TranslationKeyHelper;

use Illuminate\Translation\Translator as BaseTranslator;

/**
 * Class JsonTranslator
 *
 * @package App\Translator
 */
class CustomJsonTranslator extends BaseTranslator
{
    /**
     * Get the translation for the given key.
     *
     * @param string      $key
     * @param array       $replace
     * @param string|null $locale
     * @param bool        $fallback
     *
     * @return string|array
     */
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $translation = parent::get($key, $replace, $locale, $fallback);

        if (config('app.debug') === true) {
            $translation = '<!--' . $key . '--!>' . $translation;
        }

        return $translation;
    }

    /**
     * Get a translation according to an integer value.
     *
     * @param string               $key
     * @param \Countable|int|array $number
     * @param array                $replace
     * @param string|null          $locale
     *
     * @return string
     */
    public function choice($key, $number, array $replace = [], $locale = null)
    {
        $translation = parent::choice($key, $number, $replace, $locale);

        if (config('app.debug') === true) {
            $translation = '<!--' . $key . '--!>' . $translation;
        }

        return $translation;
    }
}
