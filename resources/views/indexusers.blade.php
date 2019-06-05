<!DOCTYPE html>
<html lang="en">

   <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Index Users</title>

   </head>

   <body>

      <div id="index">
         @forelse( $users as $user )
            <span>Email => {{ $user->email }}</span>
            <br><br><br>
         @empty
            <span>no hay users</span>
         @endforelse

      </div>

   </body>

</html>
