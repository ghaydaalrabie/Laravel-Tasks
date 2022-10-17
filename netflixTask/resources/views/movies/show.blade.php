<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, movies!</title>
  </head>
  <body>

@include('navbar')



<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(https://st1.bgr.in/wp-content/uploads/2022/01/OTT-Netflix.jpg) ;

    }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Product Card {{$movie->id}}</h2>

<div class="card">
  <img style="height: 470px" src="/image/{{$movie->movie_img}}" alt="Denim Jeans" style="width:100% ">
  <h1>{{$movie->movie_name}}</h1>
  <p>{{$movie->movie_description}}</p>
  <div style="display: flex ; margin:0 auto"  class="cont">
    <form action="{{route('movies.edit', $movie)}}" method="POST">
                        @csrf
                        @method('get')
                        <input type="submit" value="Edit" class="btn btn-success"/>
                    </form>
                </td>
                <td>
                    <br>
                    <form action="{{route('movies.destroy', $movie)}}" method="post">
                        @csrf
                        @method('delete')
                        <input style="margin-left: 20px " type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')"/>
                    </form>
                    </div>
                    <br>

  <p><button type="button" onclick="window.location='http://127.0.0.1:8000/movies'">Back TO HOME </button></p>
</div>

</body>
</html>

<br>
<br>
@include('footer')



