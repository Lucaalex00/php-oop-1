<?php
class Production {
    public $title;
    public $lang;
    public $vote;
    public $genres;

    public function __construct($title, $lang, $vote, $genres) {
        $this->title = $title;
        $this->lang = $lang;
        $this->vote = $vote;
        $this->genres = $genres;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getLang() {
        return $this->lang;
    }

    public function getVote() {
        return $this->vote;
    }

    public function getGenres() {
        return $this->genres;
    }
}
