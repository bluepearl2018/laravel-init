<?php

namespace Eutranet\Init\Exceptions;

use Exception;

class InvalidPackage extends Exception
{
	public static function nameIsRequired(): self
	{
		return new static('This laravel-init does not have a name. You can set one with `$laravel-init->name("yourName")`');
	}
}