<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function one()
    {
        return view('admin.recipts.one.index');
    }

    public function two()
    {
        return view('admin.recipts.two.index');
    }

    public function three()
    {
        return view('admin.recipts.three.index');
    }

    public function four()
    {
        return view('admin.recipts.four.index');
    }
    public function dikari_recipt()
    {
        return view('admin.recipts.dikari_recipt.index');
    }
    public function bachat_recipt()
    {
        return view('admin.recipts.bachat_recipt.index');
    }
    public function deposite_recipt()
    {
        return view('admin.recipts.deposite_recipt.index');
    }
}
