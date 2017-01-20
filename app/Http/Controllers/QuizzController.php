<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizzRequest;
use Illuminate\Support\Facades\Input;
use App\Quizz;
use App\Question;

class QuizzController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quizzs = Quizz::all();
        return view('quizzs.index', compact('quizzs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $quizz = new Quizz;
        return view('quizzs.create', compact('quizz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $quizz = Quizz::create(['name' => Input::get('name')]);
        return redirect(route('quizz.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $quizz = Quizz::findOrFail($id);
        $questions = Question::all()->where('id', $quizz->id);
        return view('quizzs.show', compact('quizz', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $quizz = Quizz::findOrFail($id);
        return view('quizzs.edit', compact('quizz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, QuizzRequest $request)
    {
        $quizz = Quizz::findOrFail($id);
        $quizz->update($request->all());
        return redirect(route('quizz.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        Quizz::destroy($id);
        return redirect(route('quizz.index'));
    }

}

?>