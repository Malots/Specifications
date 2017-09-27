<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 09:39
 */

namespace Malots\Specifications;


interface SpecificationInterface {
	public function isSatisfiedBy($candidate);
}