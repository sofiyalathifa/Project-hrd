<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PositionRequest;
use App\Models\Master\Position;

class PositionController extends Controller
{
    public function index()
    {
        $position = Position::all();
        return view('position.index', compact('position'));
    }

    public function create()
    {
        return view('position.create');
    }

    public function store(PositionRequest $request)
    {
        Position::create($request->all());
        return redirect()->route('position.index')->with('message', 'Position Created Successfully');
    }
}
