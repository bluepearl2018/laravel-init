<?php

namespace Eutranet\Init\Models;

use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 *
 */
class Menu extends Model
{

	use HasTranslations;

	/**
	 * @var string
	 */
	protected $table = "menus";
	/**
	 * @var string[]
	 */
	protected $fillable = [
		'label',
		'menu_code',
		'package',
		'route',
		'params',
		'is_active',
		'class'
	];
	/**
	 * @var array|string[]
	 */
	protected array $translatable = [
		'label',
		'name'
	];

	/**
	 * @return string[][]
	 */

	#[ArrayShape(['label' => "array", 'menu_code' => "array", 'package' => "array"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'label' => ['input', 'text', 'required', trans('menus.Component'), trans('menus.Like... users.tabs.nav')],
			'menu_code' => ['input', 'text', 'required', trans('menus.Name'), trans('menus.Enter the name')],
			'package' => ['input', 'text', 'required', trans('menus.Route class'), trans('menus.Enter the route class')],
		];
	}

	/**
	 * This static function is essential for the documentation service provider
	 * The namespace is saved into doc_models table
	 * @return string
	 */
	public static function getNamespace(): string
	{
		return __NAMESPACE__;
	}

	/**
	 * @return string
	 */
	public static function getClassLead(): string
	{
		return "Menus are to be displayed everywhere";
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
