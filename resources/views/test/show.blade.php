@extends('base')

@section('title', 'Show')

@section('content')
   <style>
      .uper {
         margin-top: 40px;
      }
   </style>

   <h3><a href="/">Index</a></h3>

   <div class="card uper">
      <div class="card-header">
         Show Field Test
      </div>

      <div class="card-body">

         <div class="form-group">
            <label for="name">AB1:</label>
            <textarea disabled name="ab1" id="ab1" cols="10" rows="1" class="form-control">{{ $test->ab1 }}</textarea>
         </div>

         <div class="form-group">
            <label for="name">AB2:</label>
            <textarea disabled disabled name="ab2" id="ab2" cols="10" rows="1" class="form-control">{{ $test->ab2 }}</textarea>
         </div>

         <div class="form-group">
            <label for="name">AB3:</label>
            <textarea disabled name="ab3" id="ab3" cols="10" rows="1" class="form-control">{{ $test->ab3 }}</textarea>
         </div>

         <div class="form-group">
            <label for="name">AB4:</label>
            <textarea disabled name="ab4" id="ab4" cols="10" rows="1" class="form-control">{{ $test->ab4 }}</textarea>
         </div>

         <div class="form-group">
            <label for="name">AB5:</label>
            <textarea disabled name="ab5" id="ab5" cols="10" rows="1" class="form-control">{{ $test->ab5 }}</textarea>
         </div>

      </div>
   </div>
   <br>
@endsection
