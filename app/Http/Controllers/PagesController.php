<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Job Order Management Web App';
        return view('pages.index')->with('title', $title);
    }
   
    public function jlist(){
        $title = 'List of Job Orders';
        return view('pages.jlist')->with('title', $title);
    }

    public function alist(){
        $title = 'List of Accounts';
        return view('pages.alist')->with('title', $title);
    }

    public function createjo(){
        $title = 'Create Job Order';
        return view('pages.createjo')->with('title', $title);
    }

    public function realign(){
        $title = 'Realign Funds';
        return view('pages.realign')->with('title', $title);
    }

    public function edit(){
        $title = 'Edit Job Order';
        return view('pages.edit')->with('title', $title);
    }
}
