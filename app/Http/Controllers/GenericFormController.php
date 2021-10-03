<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GenericForm;

class GenericFormController extends Controller
{
    //

    function GetByName($name) {
        return response()->json(GenericForm::where('name', $name)->first() ?? []);
    }
}
