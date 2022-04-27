<?php

namespace Eutranet\Commons\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\Translatable\HasTranslations;

/**
 * Country is the class to describe and save countries
 * Store into DB cos of translation requirements
 * Please note ISO-2 code can be restrictive...
 * Todo ISO-3 and links to flags and so on
 * Please note COUNTRY::class IS NOT LANGUAGE::class
 * A country is not a language. Many more languages spoken than existing countries
 */
class Language extends Model
{

	use HasTranslations;

	protected $table = "languages";
	protected $fillable = ['code', 'name'];
	protected array $translatable = ['name'];

	#[ArrayShape(['code' => "string[]", 'name' => "string[]"])]
	public static function getFields(): array
	{
		// field, type, required, placeholder, tip, model for select
		return [
			'code' => ['input', 'text', 'required', trans('languages.Slug'), trans('languages.Enter the code (ISO 2)')],
			'name' => ['input', 'text', 'required', trans('languages.Name'), trans('languages.Enter the name')],
		];
	}

	public static function getClassLead(): string
	{
		return trans('languages.class-lead') . ' ' . 'A language is a structured system of communication. The structure of a language is its grammar and the free components are its vocabulary. Languages are the primary means of communication of humans, and can be conveyed through speech (spoken language), sign, or writing. Many languages, including the most widely-spoken ones, have writing systems that enable sounds or signs to be recorded for later reactivation. Human language is unique among the known systems of animal communication in that it is not dependent on a single mode of transmission (sight, sound, etc.), is highly variable between cultures and across time, and affords a much wider range of expression than other systems';
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
	 * A country has many users...
	 * @return HasMany
	 */
	public function users(): HasMany
	{
		return $this->hasMany(User::class, 'user_id');
	}
}
