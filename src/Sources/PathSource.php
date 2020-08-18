<?php

namespace codicastudio\TextToSpeech\Sources;

use codicastudio\TextToSpeech\Contracts\Source as SourceContract;

class PathSource implements SourceContract
{
    /**
     * Handles in getting the text from source.
     *
     * @param  string $data
     * @return string
     */
    public function handle(string $data): string
    {
        return file_get_contents($data);
    }
}
