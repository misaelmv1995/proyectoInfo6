<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Estudios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEstudiosPost;

class EstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     *     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $estudios = Estudios::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.estudios.index', ['estudios' => $estudios]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.estudios.post', ['estudio' => new Estudios()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudiosPost $request)
    {
        Estudio::create($request->validated());
        return back()->with('status', 'Estudio creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudio = Estudios::findOrFail($id);
        return view('dashboard.estudios.show', ['estudio' => $estudio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.estudios.edit', ['estudio' => $estudio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEstudiosPost $request, Estudio $estudio)
    {
        $estudio->update($request->validated());
        return back()->with('status', 'Estudios actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudio $estudio)
    {
        $estudio->delete();
        return back()->with('status', 'Estudio borrado correctamente');
    }
}
