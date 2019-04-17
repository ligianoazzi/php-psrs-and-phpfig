<?php

namespace SON\Computers;

class Product
{
	private $notebook;

	public function __construct(){
		$this->name = 'Asus';
	}

	public function getName()
	{
		return $this->name;
	}	
}
