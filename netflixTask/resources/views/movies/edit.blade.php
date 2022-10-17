<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, movies!</title>
  </head>
  <style>
     body{
        background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(https://st1.bgr.in/wp-content/uploads/2022/01/OTT-Netflix.jpg) ;

    }

  </style>
  <body>

@include('navbar')


<br>

    <h1></h1>


    <div class="container">
        <h1 style="color: white ">Edit a Movie!</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}

    </div>
   @endif
        <form action="{{route('movies.update', $movie)}}" method="POST" id="myForm"enctype="multipart/form-data">
@csrf
@method('put')
            <div class="mb-3">
                <label style="color: white " for="exampleFormControlInput1" class="form-label"> <strong> Name</strong></label>
                <input type="text" name="movie_name" class="form-control" id="exampleFormControlInput1" placeholder="" value="{{$movie->movie_name}}">
                @error('movie_name')
                <div style="color:red;">
                  {{$message}}
                 </div>
              @enderror

            </div>
            <div class="mb-3">
                <label style="color: white" for="exampleFormControlTextarea1" class="form-label"> <strong>Description </strong></label>
                <textarea class="form-control" name="movie_description" id="exampleFormControlTextarea1" rows="3">{{$movie->movie_description}}</textarea>
                @error('movie_description')
                <div style="color:red;">
                  {{$message}}
                 </div>
              @enderror

              <br>


              <label style="color: white" for="flexCheckDefault"> <strong> Choose a movie genre:</strong> </label>
<select id="flexCheckDefault" name="genre_name">
  <option value="{{$movie->genre->genre_name}}">{{$movie->genre->genre_name}}</option>
  <option value="Action">Action</option>
  <option value="Drama">Drama</option>
</select>

            </div>



                      <div class="mb-3">
                <label style="color: white" for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="movie_img" id="image"  >
                <br>

                                    <img src="/image/{{$movie->movie_img}}" width="100px">

                @error('movie_img')
                <div style="color:red;">
                  {{$message}}
                 </div>
              @enderror

            </div>

{{--
   <div class="form-check">
                    <label class="form-check-label" for="flexCheckDefault{{$genre->id}}"> {{$genre->genre_name}}</label>
                    <input class="form-check-input checkboxes" type="radio" name="genre_id" value="{{$genre->id}}" id="flexCheckDefault{{$genre->id}}">
                </div> --}}
            <input style="float: right" type="submit" value="Submit" class="btn btn-primary mb-3">
              <p><button type="button" onclick="window.location='http://127.0.0.1:8000/movies'">Back TO HOME </button></p>


        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<br>
<br>


@include('footer')
