<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 09:17
 */

namespace Malots\Specifications;


abstract class Specification implements SpecificationInterface {

	public abstract function isSatisfiedBy($candidate);

	public function andCondition(SpecificationInterface $candidate) {
		return new AndSpecification($this,$candidate);
	}

	public function andNotCondition(SpecificationInterface $candidate) {
		return new AndNotSpecification($this,$candidate);
	}

	public function notCondition(SpecificationInterface $candidate) {
		return new NotSpecification($candidate);
	}

	public function orNotCondition(SpecificationInterface $candidate) {
		return new OrNotSpecification($this,$candidate);
	}

	public function orCondition(SpecificationInterface $candidate) {
		return new OrSpecification($this,$candidate);
	}
}