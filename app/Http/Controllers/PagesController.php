<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    #region Home
    public function home()
    {
        return view('home.index');
    }
    #endregion

    #region About
    public function aboutNewHere()
    {
        return view('about.newHere');
    }

    public function aboutStaff()
    {
        return view('about.ourStaff');
    }

    public function aboutOverview()
    {
        return view('about.overview');
    }
    #endregion

    #region Contact
    public function contact()
    {
        return view('contact.index');
    }
    #endregion

    #region Errors
    public function error404()
    {
        return view('errors.404');
    }

    public function error503()
    {
        return view('errors.503');
    }
    #endregion

    #region Events
    public function listEvents()
    {
        return view('events.index');
    }
    #endregion

    #region Users
    public function listUsers()
    {
        return view('users.index');
    }
    #endregion
}
