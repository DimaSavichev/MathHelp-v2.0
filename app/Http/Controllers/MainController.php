<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function triangle(Request $request){
        $a = "";
        $b = "";
        $c = "";
        if ($request->has('a'))
        {
            $a = intval($request->a);
        }
        if ($request->has('b'))
        {
            $b = intval($request->b);
        }
        if ($request->has('c'))
        {
            $c = intval($request->c);
        }
        if (($a != "") and ($b != "") and ($c != "")){
            $p = ($a + $b + $c) / 2;
            $res = ($p*($p-$a)*($p-$b)*($p-$c))**0.5;
        }
        return view('triangle', compact('a', 'b', 'c', 'res'));     
    }

    public function mediana(Request $request){
        $a = "";
        $b = "";
        $c = "";
        if ($request->has('a'))
        {
            $a = intval($request->a);
        }
        if ($request->has('b'))
        {
            $b = intval($request->b);
        }
        if ($request->has('c'))
        {
            $c = intval($request->c);
        }
        if (($a != "") and ($b != "") and ($c != "")){
            $res = 0.5 * (2 * $a**2 + 2 * $b**2 - $c**2)**0.5;
        }
        return view('mediana', compact('a', 'b', 'c', 'res'));     
    }

    public function circle(Request $request){
        $r = "";
        if ($request->has('r'))
        {
            $r = intval($request->r);
        }
        return view("circle", compact('r'));
    }
}
