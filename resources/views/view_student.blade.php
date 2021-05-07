<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
          <!-- Scripts -->
                <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                <style>
                .card{
                    width:70%;
                    height:100%;
                    padding:30px;
                    margin 30px;
                    top:50px;
                    left:15%;
                }
                </style>
        
    </head>
    <body class="antialiased">
    <div class="card">
        <h1 class="text-center "> Students </h1>
        <div class="card-body">
        <table class="table table-hover">
    <thead>
      <tr>
        <th>Student name</th>
        <th>Roll no</th>
        <th>Department</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
<tr>
<td>{{ $student->name }}</td>
<td>{{ $student->roll_no }}</td>
<td>{{ $student->department }}</td>
<td>{{ $student->address }}</td>
</tr>
@endforeach
    </tbody>
  </table>
        </div>
    </div>        


    </body>
</html>
