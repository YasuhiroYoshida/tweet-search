<?php
// src/Acme/TweetBundle/Entity/SearchWord.php
namespace Acme\TweetBundle\Entity;

class SearchWord
{
    protected $searchWord;

    public function getSearchWord()
    {
        return $this->searchWord;
    }
    public function setSearchWord($searchWord)
    {
        $this->searchWord = $searchWord;
    }
}