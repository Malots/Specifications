<?php
/**
 * Created by PhpStorm.
 * User: vene
 * Date: 27/09/17
 * Time: 09:17
 */

namespace Specifications;


abstract class Specification {
	public abstract function IsSatisfiedBy($obj);
}