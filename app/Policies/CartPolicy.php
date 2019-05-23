<?php

namespace App\Policies;

use App\User;
use App\Cart;

class CartPolicy
{
  private $view = 'cart.view';
  private $delete = 'cart.delete';
  private $update = 'cart.edit';
  private $create = 'cart.new';
  private $should_delete = 'cart.should.delete';

  /**
   * Determine whether the user can view the address.
   *
   * @param  \App\User $user
   * @param  \App\Address $address
   * @return mixed
   */
  public function view(User $user, Cart $cart)
  {
    if (!$user->is_admin) return $user->id === $cart->user_id;

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
  public function update(User $user, Cart $cart)
  {
    if (!$user->is_admin) return $user->id === $cart->user_id;


    return $user->roles()->first()->permissions()->where('name', $this->update)->first();


  }

  /**
   * Determine whether the user can delete the address.
   *
   * @param  \App\User $user
   * @param  \App\Address $address
   * @return mixed
   */
  public function delete(User $user, Cart $cart)
  {

    if (!$user->is_admin) return ($user->id === $cart->user_id && $cart->status()->first()->deletable);

    if ($cart->status()->first()->deletable)
      return $user->roles()->first()->permissions()->where('name', $this->delete)->first();
    else
      return $user->roles()->first()->permissions()->where('name', $this->should_delete)->first();

  }
}
