<?php

namespace App\Http\Controllers;

use App\Models\Suscription;
use Illuminate\Http\Request;

/**
 * Class SuscriptionController
 * @package App\Http\Controllers
 */
class SuscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suscriptions = Suscription::paginate();

        return view('suscription.index', compact('suscriptions'))
            ->with('i', (request()->input('page', 1) - 1) * $suscriptions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suscription = new Suscription();
        return view('suscription.create', compact('suscription'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Suscription::$rules);

        $suscription = Suscription::create($request->all());

        return redirect()->route('suscriptions.index')
            ->with('success', 'Suscription created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suscription = Suscription::find($id);

        return view('suscription.show', compact('suscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suscription = Suscription::find($id);

        return view('suscription.edit', compact('suscription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Suscription $suscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suscription $suscription)
    {
        request()->validate(Suscription::$rules);

        $suscription->update($request->all());

        return redirect()->route('suscriptions.index')
            ->with('success', 'Suscription updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suscription = Suscription::find($id)->delete();

        return redirect()->route('suscriptions.index')
            ->with('success', 'Suscription deleted successfully');
    }
}
