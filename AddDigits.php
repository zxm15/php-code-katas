<?php

class AddDigits {
	//note that php class and methos name are case insensitive, variable is case sensitive
	public function add($num){
		if (empty($num) || $num < 0) throw new InvalidArgumentException('The input must be non-negative integer');
		while ($num > 10) {
			$num = $this->calDigitsSum($num);
		}

		return $num;
	}	

	private function calDigitsSum($num) {
		$sum = 0;
		while ($num != 0) {
			$sum += $num % 10;
			$num /= 10;
		}

		return $sum;
	}

	public function test() {
		print('This is a test');
	}
}

$solution = new AddDigits();
print($solution->add(100));