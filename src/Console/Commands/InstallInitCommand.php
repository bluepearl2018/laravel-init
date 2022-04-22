<?php

namespace Eutranet\Init\Console\Commands;

class InstallInitCommand extends InstallPackageCommand
{

	public function __construct()
	{
		$this->signature = 'eutranet:init';
		parent::__construct('init', 'eutranet:init');
	}

}
