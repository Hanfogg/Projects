<?php

class Human {
	public $height;
	public $weight;
	public $name;
	public $hairColor;
	public $eyesColor;
	
	public $itemInHands;
	
	public function takeItem($item) {
		$this->itemInHands = $item;
	}
				
	public function grow($height = 10) {
		if($height >= 0) {
			$this->height += $height;
		}
	}
}