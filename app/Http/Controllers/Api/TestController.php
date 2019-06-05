<?php

namespace App\Http\Controllers\Api;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TestResource;

class TestController extends Controller
{

   public function index()
   {
      return TestResource::collection(Test::paginate(5));
   }

   public function show(Test $test)
   {
      return new TestResource($test);
   }

   public function store(Request $request)
   {
      $data = $request->validate([
         'ab1' => 'required',
         'ab2' => 'required',
         'ab3' => 'required',
         'ab4' => 'required',
         'ab5' => 'required',
      ]);

      $test = new Test($data);

      $test->save();

      return new TestResource($test);
   }

   public function update(Test $test, Request $request)
   {
      $data = $request->validate([
         'ab1' => 'required',
         'ab2' => 'required',
         'ab3' => 'required',
         'ab4' => 'required',
         'ab5' => 'required',
      ]);

      $test->update($data);

      return new TestResource($test);
   }

   public function destroy(Test $test)
   {
      $test->delete();

      return response(null, 204);
   }

}
