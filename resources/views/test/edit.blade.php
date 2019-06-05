@extends('base')

@section('title', 'Edit')

@section('content')
   <style>
      .uper {
         margin-top: 40px;
      }
   </style>

   <h3><a href="/">Index</a></h3>

   <div class="card uper">
      <div class="card-header">
         Edit Field Test
      </div>

      <div class="card-body">

         @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            <br />
         @endif

         <form method="post" action="{{ route('test.update', $test->id) }}">
            @method('PATCH')
            @csrf

            <div class="form-group">
               <label for="name">AB1:</label>
               <textarea name="ab1" id="ab1" cols="10" rows="1" class="form-control">{{ $test->ab1 }}</textarea>
            </div>

            <div class="form-group">
               <label for="name">AB2:</label>
               <textarea name="ab2" id="ab2" cols="10" rows="1" class="form-control">{{ $test->ab2 }}</textarea>
            </div>

            <div class="form-group">
               <label for="name">AB3:</label>
               <textarea name="ab3" id="ab3" cols="10" rows="1" class="form-control">{{ $test->ab3 }}</textarea>
            </div>

            <div class="form-group">
               <label for="name">AB4:</label>
               <textarea name="ab4" id="ab4" cols="10" rows="1" class="form-control">{{ $test->ab4 }}</textarea>
            </div>

            <div class="form-group">
               <label for="name">AB5:</label>
               <textarea name="ab5" id="ab5" cols="10" rows="1" class="form-control">{{ $test->ab5 }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            &nbsp;&nbsp;&nbsp;
            <button class="btn"><a href="/">Cancel</a></button>
         </form>

      </div>
   </div>
   <br>
@endsection
