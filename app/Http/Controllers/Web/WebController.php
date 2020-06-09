<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieType;
use App\Models\UserType;
use App\User;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $movies = Movie::all();
        return view("web.widgets.home",[
            'movies' => $movies
        ]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function movieCategory()
    {
        $movieCategories = MovieType::all();
        return view("web.widgets.movieCategory",[
            'movieCategories' => $movieCategories
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userRole()
    {
        $userRoles = UserType::all();
        return view("web.widgets.usersRole",[
            'userRoles' => $userRoles
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $users = User::all();
        return view("web.widgets.users",[
            'users' => $users
        ]);
    }
}