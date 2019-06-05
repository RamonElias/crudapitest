@extends('base')

@section('title', 'Index')

@section('content')
   <h3>Index Test Page</h3>
   <h3><a href="/test/create">Create Test Field</a></h3>

   <table class="table">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">AB1</th>
            <th scope="col">AB2</th>
            <th scope="col">AB3</th>
            <th scope="col">AB4</th>
            <th scope="col">AB5</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($testfields as $testfield)
            <tr>
               <th scope="row"><a href="{{ route('test.show', $testfield->id) }}">{{ $testfield->id }}</th>
               <td>{{ $testfield->ab1 }}</td>
               <td>{{ $testfield->ab2 }}</td>
               <td>{{ $testfield->ab3 }}</td>
               <td>{{ $testfield->ab4 }}</td>
               <td>{{ $testfield->ab5 }}</td>
               <td><a href="{{ route('test.edit', $testfield->id) }}" class="btn btn-info btn-sm">Field {{ $testfield->id }}</td>
               <td>
                  <form action="{{ route('test.destroy', $testfield->id)}}" method="post">
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger btn-sm" type="submit">Field {{ $testfield->id }}</button>
                  </form>
               </td>
            </tr>
         @endforeach
      </tbody>
   </table>

@endsection
