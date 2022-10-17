<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Movies!</title>
  </head>
  <style>
 body {
    background-image: url()
 }
  </style>
  <body>

@include('navbar')

    <h1 style="text-align: center"></h1>


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
 @endif

<td>
                    <form action="{{route('movies.create')}}" method="POST">
                        @csrf
                        @method('get')
                        <input style="float: right ; margin-right : 20px "   type="submit" value="Create a new movie" class="btn btn-success"/>
                    </form>
                </td>




    <table  class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th  style="width: 670px" scope="col">Description</th>
            <th scope="col">Genres</th>
            <th scope="col">image</th>
            {{-- <th scope="col">Genre 2</th> --}}
            <th scope="col"></th>
                        <th scope="col">Actions</th>


          </tr>
        </thead>
        <tbody>


            @foreach ($movies as $movie)
            <tr>
                <th scope="row">{{$movie->id}}</th>
                <td>{{$movie->movie_name}}</td>
                <td>{{$movie->movie_description}}</td>
                  <td>
                     {{$movie->genre->genre_name}}
                </td>
                <td>
                   <img style="width: 90px ; hight:90px" src="image/{{$movie->movie_img}}">
                </td>

                <td>

                    {{-- //Actions --}}

                    <form action="{{route('movies.show', $movie)}}" method="GET">
                        @csrf
                        <input type="submit" value="Show" class="btn btn-primary"/>
                    </form>
                </td>
                <td>
                    <form action="{{route('movies.edit', $movie)}}" method="POST">
                        @csrf
                        @method('get')
                        <input type="submit" value="Edit" class="btn btn-success"/>
                    </form>
                </td>
                <td>
                    <form action="{{route('movies.destroy', $movie)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')"/>
                    </form>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

@include('footer')
