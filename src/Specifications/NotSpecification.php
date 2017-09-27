<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 10:32
 */

namespace Malots\Specifications;


class NotSpecification implements SpecificationInterface {
	private $specification;

	public function __construct(SpecificationInterface $specification) {
		$this->specification = $specification;
	}

	public  function isSatisfiedBy( $candidate ) {
		return !$this->specification->isSatisfiedBy($candidate);
	}
}