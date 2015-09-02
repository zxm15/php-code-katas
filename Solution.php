<?php 
/**
* given an integer, return an array with all the prime factors.
* 
**/
class Solution {
	
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
}
