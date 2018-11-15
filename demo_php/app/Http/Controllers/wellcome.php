<?php
/**
 * Created by PhpStorm.
 * User: phamhieu1999
 * Date: 7/27/2018
 * Time: 8:55 PM
 */

namespace App\Http\Controllers;


class wellcome extends Controller
{
public function hieu(){
    return view('monaco');
}
public function phamhieu(){
    return view('json');
}
}