<?php 

class Solution {
	/**
	* given a positive integer, return a list of prime factos it contains.
	* @input $value 
	* @output a list of prime factors of $value
	*/
	public static function findPrimeFactors($value) {
		//check edge cases
		if (! is_int($value)) throw new InvalidArgumentException("The input is not an integer");
		if ($value < 0) throw new InvalidArgumentException("The input cannot be a negtive value");
		$solution = array();
		for ($prime = 2; $prime <= $value; $prime++) {
			while ($value % $prime == 0) {
				$solution[] = $prime;
				$value /= $prime;
			}
		}

		return $solution;
	}

	/**
	* given a positive integer, convert it to a romain number range from [1-3999]
	* @input $value 
	* @output a romain number string
	*/
	public static function convertToRomainNumber($value) {
		//check edge cases
		if (! is_int($value) || $value <= 0) throw new InvalidArgumentException("The input is not valid");
		$solution = '';
		$numbers = [1,4,5,9,10,40,50,90,100,400,500,900,1000];
		$romains = ['I', 'IV', 'V', 'IX', 'X', 'XL', 'L', 'XC', 'C', 'CD', 'D', 'CM', 'M'];
		for ($i = sizeof($numbers) - 1; $i >= 0; $i--) {
			while ($value >= $numbers[$i]) {
				$solution .= $romains[$i];
				$value -= $numbers[$i];
			}
		}

		return $solution;
	}
}
