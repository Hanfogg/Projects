<?php

class Human {
	protected $saturation = 0;
	protected $gidretion = 0;
			
	protected function move(){
		$this->saturation--;
		$this->gidretion--;
		echo 'Move process';	
} 
		
	protected function breath(){
			echo 'breath process';
	}
	
	public function eat() {
		$this->saturation++;
		echo 'Eating process';
		
	}
		
	protected function think() {
		echo 'Think process';
	}	
	public function drink(){
		$this->gidretion++;
		echo 'Drink process';
	}
}