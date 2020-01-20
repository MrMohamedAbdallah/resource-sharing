<?php

namespace App\Http\Controllers;

use App\Stack;
use Illuminate\Http\Request;

class StackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stacks = Stack::orderBy("order")->orderBy("name")->get();
        
        return response()->json([
            'stacks'    => $stacks
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function show(Stack $stack)
    {
        $resources = $stack->resources()->with("category")->get();

        return response()->json([
            'resources' => $resources
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function edit(Stack $stack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stack $stack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stack $stack)
    {
        //
    }
}
