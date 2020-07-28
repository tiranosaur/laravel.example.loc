<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $user            = 'Romanoff';
        $email           = 'tiranosaur88@gmail.com';
        $emailValidation = filter_var($email, FILTER_VALIDATE_EMAIL);
        return view('components.banner')->with([
            'user'            => $user,
            'email'           => $email,
            'emailValidation' => !empty($emailValidation)
        ]);
    }
}
