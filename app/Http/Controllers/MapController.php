<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

/**
 * Class MapController
 * @package App\Http\Controllers
 */
class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::paginate();

        return view('map.index', compact('maps'))
            ->with('i', (request()->input('page', 1) - 1) * $maps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $map = new Map();
        return view('map.create', compact('map'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Map::$rules);

        $map = Map::create($request->all());

        return redirect()->route('maps.index')
            ->with('success', 'Map created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $map = Map::find($id);

        return view('map.show', compact('map'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $map = Map::find($id);

        return view('map.edit', compact('map'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Map $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        request()->validate(Map::$rules);

        $map->update($request->all());

        return redirect()->route('maps.index')
            ->with('success', 'Map updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $map = Map::find($id)->delete();

        return redirect()->route('maps.index')
            ->with('success', 'Map deleted successfully');
    }
}
