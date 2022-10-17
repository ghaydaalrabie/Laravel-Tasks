<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Laravel 9 CRUD Example Tutorial</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>

<div  class="container">
<div class="content">
<div class="row">
<div style="padding-left: 200px ; margin-left:170px ; margin-top:100px" class="col-md-6 ">
<div class="card card-user">
<div class="card-header">
<h5 class="card-title">Contact Us</h5>
</div>
<div style=" background: radial-gradient(circle, rgba(233,224,185,1) 86%, rgba(236,137,150,1) 100%);
" class="card-body">
@if(Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif

<form method="post" action="contact-us">
{{csrf_field()}}
<div  class="row ">
<div class="col-md-12">
<div class="form-group"><br>
<label> Name </label>
<input type="text" class="form-control @error('name') is-invalid @enderror"  name="name">
@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-12">
<div class="form-group"><br>
<label> Email </label>
<input type="text" class="form-control  @error('email') is-invalid @enderror"  name="email">
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-12">
<div class="form-group"><br>
<label> Phone Number </label>
<input type="text" class="form-control @error('phone_number') is-invalid @enderror"  name="phone_number">
@error('phone_number')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-12">
<div class="form-group"><br>
<label> Subject </label>
<input type="text" class="form-control @error('subject') is-invalid @enderror"  name="subject">
@error('subject')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="col-md-12">
<div class="form-group"><br>
<label> Message </label>
<textarea class="form-control textarea @error('message') is-invalid @enderror"  name="message"></textarea>
@error('message')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
</div>
<br>
{{-- <div class="row pull-right">
<div class="update ml-auto mr-auto pull-right">
<button type="submit"  class=" btn btn-primary btn-round pull-right">Send</button>

</div> --}}
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="submit"  class=" btn btn-outline-success btn-round pull-right">Send</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
