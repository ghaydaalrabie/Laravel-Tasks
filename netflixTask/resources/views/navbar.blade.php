<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1:8000/landing">
            <img  src="https://raw.githubusercontent.com/carlosavilae/Netflix-Clone/master/img/logo.PNG"  alt="Netflix logo"  width="120" height="50" class="d-inline-block align-text-top">

          </a>
      <button style="color: white" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a style="color: white" class="nav-link active" aria-current="page" href="{{route('movies.index')}}">Home</a>
          </li>

          <li style="color: white" class="nav-item dropdown">
            <a  style="color: white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Movies
            </a>
            <ul  class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li style="color: white"> <a class="dropdown-item" href="{{route('movies.create')}}">Add a movie</a></li>
             
            </ul>
          </li>

          </li>
        </ul>
      </div>
    </div>
</nav>

