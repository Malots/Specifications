<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 10:47
 */

namespace Malots\Specifications;


class OrSpecification implements SpecificationInterface {
	private $left;
	private $right;

	public function __construct(SpecificationInterface $left, SpecificationInterface $right) {
		$this->left = $left;
		$this->right = $right;
	}

	public function isSatisfiedBy( $candidate ) {
		return $this->left->isSatisfiedBy($candidate) || $this->right->isSatisfiedBy($candidate);
	}
}