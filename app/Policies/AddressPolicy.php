<?php

namespace App\Policies;

use App\User;
use App\Address;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressPolicy
{
  use HandlesAuthorization;


  private $view = 'address.view';
  private $delete = 'address.delete';
  private $update = 'address.edit';
  private $create = 'address.new';

  /**
   * Determine whether the user can view the address.
   *
   * @param  \App\User $user
   * @param  \App\Address $address
   * @return mixed
   */
  public function view(User $user, Address $address)
  {
    if (!$user->is_admin) return $user->id === $address->user_id;

    return $user->roles()->first()->permissions()->where('name', $this->view)->first();
  }

  /**
   * Determine whether the user can create addresses.
   *
   * @param  \App\User $user
   * @return mixed
   */
  public function create(User $user)
  {
    if (!$user->is_admin) return true;
    return $user->roles()->first()->permissions()->where('name', $this->create)->first();


  }

  /**
   * Determine whether the user can update the address.
   *
   * @param  \App\User $user
   * @param  \App\Address $address
   * @return mixed
   */
  public function update(User $user, Address $address)
  {
    if (!$user->is_admin) return $user->id === $address->user_id;
    return $user->roles()->first()->permissions()->where('name', $this->update)->first();


  }

  /**
   * Determine whether the user can delete the address.
   *
   * @param  \App\User $user
   * @param  \App\Address $address
   * @return mixed
   */
  public function delete(User $user, Address $address)
  {
    if (!$user->is_admin) return $user->id === $address->user_id;
    return $user->roles()->first()->permissions()->where('name', $this->delete)->first();

  }

}
