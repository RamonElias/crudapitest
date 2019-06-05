<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function index()
   {
      // return \App\Test::all();
      return view('test.index', ['testfields' => \App\Test::all()]);
   }

   /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function create()
   {
      return view('test.create');
   }

   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
   public function store(Request $request)
   {
      $data = $request->validate([
         'ab1' => 'required',
         'ab2' => 'required',
         'ab3' => 'required',
         'ab4' => 'required',
         'ab5' => 'required'
      ]);

      $test = new \App\Test( $data );

      $test->save();

      return redirect('/test')->with('success', 'Test Field has been added');
   }

   /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function show($id)
   {
      $test = \App\Test::find($id);

      return view('test.show', compact('test'));
   }

   /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function edit($id)
   {
      $test = \App\Test::find($id);

      return view('test.edit', compact('test'));
   }

   /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function update(Request $request, $id)
   {
      $data = $request->validate([
         'ab1' => 'required',
         'ab2' => 'required',
         'ab3' => 'required',
         'ab4' => 'required',
         'ab5' => 'required'
      ]);

      $test = \App\Test::find($id);

      // $input = $request->only('ab1', 'ab2', 'ab3', 'ab4', 'ab5');

      $test->update( $data );

      $test->save();

      return redirect('/test')->with('success', 'Test Field has been updated');
   }

   /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
   public function destroy($id)
   {
      $test = \App\Test::find($id);
      $test->delete();

      return redirect('/test')->with('success', 'Field has been deleted from database');
   }
}
