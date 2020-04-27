<?php

class Article {

	private $author;
	private $content;
	private $date;
	private $time;

	public function __construct ($author, $content, $date, $time) {
		$this->author  = $author;
		$this->content = $content;
		$this->date    = $date;
		$this->time    = $time;
	} 

	public function getAuthor() {
		return $this->author;
	}

	public function getContent() {
		return $this->content;
	}

	public function getDate() {
		return $this->date;
	}

	public function getTime() {
		return $this->time;
	}

	public function setAuthor($newAuthor) {
		$this->author = $newAuthor;
	}

	public function setContent($newContent) {
		$this->content = $newContent;
	}

	public function setDate($newDate) {
		$this->date = $newDate;
	}

	public function setTime($newTime) {
		$this->time = $newTime;
	}
	
}

?>