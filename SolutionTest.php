<?php 

require_once 'Solution.php';

class SolutionTest extends PHPUnit_Framework_TestCase {

	public function testPrimeFactors() {
		$this->assertEquals([], Solution::findPrimeFactors(0));
		$this->assertEquals([], Solution::findPrimeFactors(1));
		$this->assertEquals([2], Solution::findPrimeFactors(2));
		$this->assertEquals([3,3], Solution::findPrimeFactors(9));
		$this->assertEquals([2,2,5,5], Solution::findPrimeFactors(100));
		$this->assertEquals([11,11], Solution::findPrimeFactors(121));
	}

	/**
     * @expectedException        InvalidArgumentException
     */
	public function testExceptions() {
		$this->assertEquals([], Solution::findPrimeFactors(-1));
	}

	/**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage The input cannot be a negtive value
     */
	public function testExceptionsMessages() {
		$this->assertEquals([], Solution::findPrimeFactors(-100));
	}

	public function testRomainNumbers() {
		$this->assertEquals('III', Solution::convertToRomainNumber(3));
		$this->assertEquals('IV', Solution::convertToRomainNumber(4));
		$this->assertEquals('CM', Solution::convertToRomainNumber(900));
		$this->assertEquals('MMMCMXCIX', Solution::convertToRomainNumber(3999));
	}
}