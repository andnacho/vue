<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class ProfileComposer
{
    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $view->with('nuevo', 'This is a variable that comes from profileComposer');
    }

}