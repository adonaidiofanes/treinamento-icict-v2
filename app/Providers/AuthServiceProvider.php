<?php

namespace App\Providers;

use App\User;
use App\Permissao;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permissoes = Permissao::with('papeis')->get();

        foreach ($permissoes as $permissao) {
            Gate::define($permissao->nome, function(User $user) use ($permissao){
                return $user->checarPapel($permissao);
            });
        }
        
    }
}
