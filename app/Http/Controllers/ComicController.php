<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    protected $validationRules=[
        'title'=>'required|min:8|max:60',
        'description'=>'required|min:10',
        'thumb'=>'required|url',
        'price'=>'required|numeric|min:1|max:255',
        'series'=>'required|min:5|max:30',
        'sale_date'=>'required|date',
        'type'=>'required|min:3|max:60',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comic::all();
        return view("comics.index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules);
        // passaggio richiesta form da salvare a db
        $data=$request->all();


        // $newComic= new Comic();
        // $newcomic->title=$data['title'];
        // $newcomic->description=$data['description'];
        // $newcomic->thumb=$data['thumb'];
        // $newcomic->price=$data['price'];
        // $newcomic->series=$data['series'];
        // $newcomic->sale_date=$data['sale_date'];
        // $newcomic->type=$data['type'];
        // $newcomic->save();

        $newComic= Comic::create($data);
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {   
        // $comic= Comic::find($id);
        // dependency injection
        return view("comics.show", compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        $request->validate($this->validationRules);
        $data=$request->all();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');


    }
}
