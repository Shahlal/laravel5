<?php
/**
 * Created by PhpStorm.
 * User: lict
 * Date: 05/02/15
 * Time: 13:24
 */

namespace App\Http\Controllers;


class ArticleController extends Controller{


    public function __construct(){

        $this->middleware('auth');

    }

    public function addarticle(){

        return view('addarticle');

    }

}

