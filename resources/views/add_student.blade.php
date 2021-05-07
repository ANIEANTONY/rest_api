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
        <h1 class="text-center "> Add student </h1>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
	            <button type="button" class="close" data-dismiss="alert">×</button>
	                {{ session('status') }}
            </div>
        @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
	            <button type="button" class="close" data-dismiss="alert">×</button>
	                {{ session('failed') }}
            </div>
        @endif
            <form class="row g-3" action="create" method="post" enctype="multipart/form-data">
            @csrf
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputname" name="name"   value="{{ old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                     <label for="inputPassword4" class="form-label">Rollno</label>
                    <input type="text" class="form-control  @error('rollno') is-invalid @enderror" id="inputrollno" name="rollno" value="{{ old('rollno')}}" >
                    @error('rollno')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Department</label>
                     <input type="text" class="form-control  @error('department') is-invalid @enderror" id="inputdepartment" name="department"  value="{{ old('department')}}" >
                     @error('department')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-12">
                     <label for="inputAddress2" class="form-label">Address 2</label>
                     <input type="text" class="form-control  @error('address') is-invalid @enderror" id="inputAddress" placeholder="Address" name="address"  value="{{ old('address')}} ">
                     @error('address')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                 <div class="col-12">
                     <label for="inputAddress2" class="form-label"></label>
                
                 </div>

                <div class="col-12">
                        <button  type="submit" class="btn btn-primary">Add</button>
                </div>

                <div class="col-12">
                     <a href="/">Back to home</a>
                
                 </div>
            </form>
        </div>
    </div>        


    </body>
</html>
