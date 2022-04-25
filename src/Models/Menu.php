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
	#[ArrayShape(['component' => "string[]", 'name' => "string[]", 'route_class' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'component' => ['input', 'text', 'required', 'Component', 'Like... users.tabs.nav'],
			'name' => ['input', 'text', 'required', 'Name', 'Enter the name'],
			'route_class' => ['input', 'text', 'required', 'Route class', 'Enter the route class'],
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
