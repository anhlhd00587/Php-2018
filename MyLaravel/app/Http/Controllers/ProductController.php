<?php
/**
 * Created by PhpStorm.
 * User: Le Hoang Anh
 * Date: 7/14/2018
 * Time: 8:57 AM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    function create(){
        return view('product.form');
    }
    function list(){
        return view('product.list');
    }
    function save(Request $request){
        $name = $request ->input('name');
        $description = $request ->input('description');
        $price = $request ->input('price');
        $thumbnail = $request ->input('thumbnail');
        $category = $request ->input('category');
        $query = 'insert into foods (title,description,price,thumbnail,categoryID)'.
            'values ("'. $name .'","'. $description .'",'. $price .',"'. $thumbnail .'","'. $category .'")';

        DB::insert($query);

        return view('Success')->with('name',$request->input('name'));
    }

}