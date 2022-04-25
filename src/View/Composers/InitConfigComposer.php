<?php

namespace Eutranet\Init\View\Composers;

use Illuminate\View\View;

class InitConfigComposer
{

	public function __construct()
	{
		$this->config = config('eutranet-init');
	}

	/**
	 * Bind data to the view.
	 *
	 * @param View $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view
			->with('name', $this->config['name'])
			->with('description', $this->config['description'])
			->with('migrations', $this->config['migrations'])
		;
	}
}