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
class Media extends \Spatie\MediaLibrary\MediaCollections\Models\Media
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

	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'collection_name' => ['input', 'text', 'required', 'Collection name', 'Slugified'],
			'file_name' => ['input', 'text', 'required', 'File name', 'The file name'],
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
		return "Medias from the Spatie Media library";
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
