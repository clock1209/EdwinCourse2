<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InputsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \Form::component('customText', 'components.inputs.text', [
            'name', 'label', 'object' => null, 'attributes' => [],
        ]);

        \Form::component('customEmail', 'components.inputs.email', [
            'name', 'label', 'object' => null, 'attributes' => [],
        ]);

        \Form::component('customPassword', 'components.inputs.password', [
            'name', 'label', 'object' => null, 'attributes' => [],
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
