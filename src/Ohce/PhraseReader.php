<?php


namespace Ohce;


use Ohce\Phrase\StandardPhrase;

class PhraseReader
{
    /** @var Input */
    private $input;

    /**
     * @param Input $input
     */
    public function __construct(Input $input)
    {
        $this->input = $input;
    }

    /**
     * @return Phrase
     */
    public function read()
    {
        return new StandardPhrase($this->input->readLine());
    }
}