<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    public function create(Request $request) {
        $name = $request->get('name');
        $id = $request->get('id');
        Type::create(compact('name','id'));
        return redirect()->route('admin.types.index');
    }

    public function delete(Type $types) {
        $types->delete();
        return redirect()->route('admin.types.index');
    }
}
