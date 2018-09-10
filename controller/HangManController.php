<?php
require_once "model/Hangman";

class HangmanController
{
    public function Init()
    {
        $hangman = new Hangman();
        return $hangman->randomizeWord();
    }
}
