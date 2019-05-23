<?php

namespace App\Providers;


use App\Address;
use App\Cart;
use App\Policies\AddressPolicy;
use App\Policies\CartPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
      Address::class => AddressPolicy::class,
      Cart::class => CartPolicy::class
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

  }
}
