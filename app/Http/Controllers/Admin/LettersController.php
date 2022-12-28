<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $letters = Letter::all();
        return view('letters.index', compact('letters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newLetter = new Letter();
        $newLetter->fill($data);
        $newLetter->save();

        return redirect()->route('letters.show', $newLetter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Letter $letter)
    {
        return view('letters.show', compact('letter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
        return view('letters.edit', compact('letter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {

        $data = $this->validation($request->all());

        $letter->update($data);

        return redirect()->route('letters.show', $letter->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validation($data)
    {
        $validationResult = Validator::make($data, [
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'arrival_date' => 'required',
            'gift' => 'required',
            'letter_text' => 'required',
            'rating' => 'required|min:1|max:5',
            'is_delivered' => 'required|min:0|max:1',


        ])->validate();
        return $validationResult;
    }
}
