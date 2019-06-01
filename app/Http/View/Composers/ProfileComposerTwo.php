<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class ProfileComposerTwo
{
    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $view->with('viejo', 'This is a variable that comes from profileComposer2');
    }

}