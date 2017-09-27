<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 10:56
 */

namespace Malots\SpecificationsTest;


use Malots\Specifications\Specification;

class StringCharacterSpecification extends Specification {
	public function isSatisfiedBy( $candidate ) {
		return strpos( $candidate, '_' ) !== false;
	}
}