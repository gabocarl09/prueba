<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

/**
 * Class FoodController
 * @package App\Http\Controllers
 */
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::paginate();

        return view('food.index', compact('food'))
            ->with('i', (request()->input('page', 1) - 1) * $food->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $food = new Food();
        return view('foods.create', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Food::$rules);

        $food = Food::create($request->all());

        return redirect()->route('foods.index')
            ->with('success', 'Food created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);

        return view('foods.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);

        return view('foods.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Food $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        request()->validate(Food::$rules);

        $food->update($request->all());

        return redirect()->route('foods.index')
            ->with('success', 'Food updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $food = Food::find($id)->delete();

        return redirect()->route('food.index')
            ->with('success', 'Food deleted successfully');
    }
}
