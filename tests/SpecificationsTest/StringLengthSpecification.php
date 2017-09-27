<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 10:59
 */

namespace Malots\SpecificationsTest;


use Malots\Specifications\Specification;

class StringLengthSpecification extends Specification {
	public function isSatisfiedBy( $candidate ) {
		return strlen($candidate) > 5;
	}
}