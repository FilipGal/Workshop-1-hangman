<?php
require_once("controller/HangmanController");
class Layout
{
    // private $words = array("Syntax", "JavaScript", "Whiteboard");

    // /**
    //  * Randomizes a word from the private $words array
    //  *
    //  * @return string a randomized word
    //  */
    // private function randomizeWord()
    // {
    //     $randomWord = array_rand($this->words);
    //     $v = $this->words[$randomWord];
    //     echo $v;
    //     $this->maskRandomizedWord($v);
    // }

    // /**
    //  * Function to mask the randomzied words with underscores
    //  *
    //  * @param [string] $word the word to mide
    //  * @return void
    //  */
    // private function maskRandomizedWord($word)
    // {
    //     for ($i = 0; $i < strlen($word); $i++) {
    //         echo '_ ';
    //     }
    // }

    /**
     * The view to render
     *
     * @return void
     */
    public function render()
    {
        $v = new HangmanController();
        $this->randomizeWord();
    }
}
