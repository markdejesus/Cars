<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){
        $brands = ['ford', 'toyota', 'honda', 'hyundai', 'mitsubishi', 'subaru', 'rolls royce'];
        $cars = \App\Models\Car::paginate(15);

        return view('welcome', array('brands' => $brands, 'cars'=>$cars));
    }

    public function create(Request $form){
        \App\Models\Car::create([
            'brand' => $form->brand,
            'model' => $form->model,
            'year' => $form->year,
            'color' => $form->color,
            'plate' => $form->plate,
        ]);
        return redirect('/');
    }
    public function delete(Request $form){
        \App\Models\Car::find($form->id)->delete();
            return redirect ('/');
    }

}
