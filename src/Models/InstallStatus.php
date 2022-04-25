<?php

namespace Eutranet\Init\Models;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Translation\Translator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 *
 */
class InstallStatus extends Model {

	/**
	 * @var string
	 */
	protected $table = 'install_statuses';
	/**
	 * @var string[]
	 */
	protected $fillable = [
		'package_name',
		'installed'
	];

	/**
	 * @return string[][]
	 */

	#[ArrayShape(['package_name' => "string[]", 'installed' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'package_name' => ['input', 'text', 'required', 'Component', 'Like... users.tabs.nav'],
			'installed' => ['checkbox', 'option', 'optional', 'Is installed', 'Check if true']
		];
	}

	/**
	 * @return array|Application|Translator|string|null
	 */
	public static function getClassLead(): array|string|Translator|Application|null
	{
		return trans('install-statuses.Install Statuses help us controlling the package installation.');
	}

	/**
	 * The "booted" method of the model.
	 *
	 * @return void
	 */
	protected static function booted()
	{
	}
}