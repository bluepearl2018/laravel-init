<?php

namespace Eutranet\Init\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class Meta extends Component
{

	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->metaTitle = config('eutranet-init.name');
		$this->metaDescription = config('eutranet-init.description');
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return Application|Factory|View
	 */
	public function render(): View|Factory|Application
	{
		return view('init::components.meta', [
			'title' => $this->metaTitle,
			'description' => $this->metaDescription,
		]);
	}
}
