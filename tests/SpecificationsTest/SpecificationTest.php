<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 11:04
 */

namespace Malots\SpecificationsTest;

use PHPUnit\Framework\TestCase;

class SpecificationTest extends TestCase {

	public function testGiveTwoStringSpecificationToTestAndSpecification() {
		$value = "stringcontent_";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$andSpecification = $lengthSpecification->andCondition($characterSpecification);
		$this->assertTrue($andSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestInvalidAndSpecification() {
		$value = "string";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$andSpecification = $lengthSpecification->andCondition($characterSpecification);
		$this->assertFalse($andSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestValidAndNotSpecification() {
		$value = "string";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$andNotSpecification = $lengthSpecification->andNotCondition($characterSpecification);
		$this->assertTrue($andNotSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestInvalidAndNotSpecification() {
		$value = "stringcontent_";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$andNotSpecification = $lengthSpecification->andNotCondition($characterSpecification);
		$this->assertFalse($andNotSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestValidNotSpecification() {
		$value = "string";
		$lengthSpecification = new StringLengthSpecification();
		$this->assertTrue($lengthSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestInvalidNotSpecification() {
		$value = "str";
		$lengthSpecification = new StringLengthSpecification();
		$this->assertFalse($lengthSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestValidOrNotSpecification() {
		$value = "string";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$orNotSpecification = $lengthSpecification->orNotCondition($characterSpecification);
		$this->assertTrue($orNotSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestInvalidOrNotSpecification() {
		$value = "str";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$orNotSpecification = $lengthSpecification->orNotCondition($characterSpecification);
		$this->assertTrue($orNotSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestValidOrSpecification() {
		$value = "str_";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$orSpecification = $lengthSpecification->orCondition($characterSpecification);
		$this->assertTrue($orSpecification->isSatisfiedBy($value));
	}

	public function testGiveTwoStringSpecificationToTestInvalidOrSpecification() {
		$value = "str";
		$characterSpecification = new StringCharacterSpecification();
		$lengthSpecification = new StringLengthSpecification();
		$orSpecification = $lengthSpecification->orCondition($characterSpecification);
		$this->assertFalse($orSpecification->isSatisfiedBy($value));
	}
}
