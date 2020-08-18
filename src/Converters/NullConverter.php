<?php

namespace codicastudio\TextToSpeech\Converters;

use codicastudio\TextToSpeech\Contracts\Converter;
use codicastudio\TextToSpeech\Traits\HasLanguage;
use codicastudio\TextToSpeech\Traits\Sourceable;
use codicastudio\TextToSpeech\Traits\SSMLable;
use codicastudio\TextToSpeech\Traits\Storable;

class NullConverter implements Converter
{
    use Storable, Sourceable, HasLanguage, SSMLable;

    /**
     * Converts the text to speech.
     *
     * @param mixed $data
     * @param array $options
     * @return void
     */
    public function convert($data, array $options = null)
    {
        return $this->store($data, null);
    }
}
