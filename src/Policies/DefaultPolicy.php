<?php

namespace Eutranet\Init\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use Auth;
use Illuminate\Database\Eloquent\Model;

abstract class DefaultPolicy
{
	use HandlesAuthorization;

	private Model $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	/**
	 * Determine whether the user can view any models.
	 *
	 * @param User|null $user
	 * @return Response|bool
	 */
	public function viewAny(?User $user): Response|bool
	{
		return true;
	}

	/**
	 * Determine whether the user can view the model.
	 *
	 * @param User|null $user
	 * @param Model $model
	 * @return bool
	 */
	public function view(?User $user, Model $model): bool
	{
		return true;
	}

	/**
	 * Determine whether the user can create models.
	 *
	 * @param User $user
	 * @return Response|bool
	 */
	public function create(User $user): Response|bool
	{
		if (Auth::check()) {
			return Auth::guard() == 'admin' || Auth::guard() == 'staff';
		}
		return false;
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param User $user
	 * @param Model $model
	 * @return Response|bool
	 */
	public function update(User $user, Model $model): Response|bool
	{
		if (Auth::check()) {
			return Auth::guard() == 'admin' || Auth::guard() == 'staff';
		}
		return false;
	}

	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param User $user
	 * @param Model $model
	 * @return Response|bool
	 */
	public function delete(User $user, Model $model): Response|bool
	{
		if (Auth::check()) {
			return Auth::guard() == 'admin' || Auth::guard() == 'staff';
		}
		return false;
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param User $user
	 * @param Model $model
	 * @return Response|bool
	 */
	public function restore(User $user, Model $model): Response|bool
	{
		if (Auth::check()) {
			return Auth::guard() == 'admin' || Auth::guard() == 'staff';
		}
		return false;
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param User $user
	 * @param Model $model
	 * @return bool
	 */
	public function forceDelete(User $user, Model $model): bool
	{
		if (Auth::check()) {
			return Auth::guard() == 'admin' || Auth::guard() == 'staff';
		}
		return false;
	}
}
