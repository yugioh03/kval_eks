<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sass.js/0.9.2/sass.min.js" integrity="sha512-mA5b7w9mZvGLWgjIqp9KhWNzkkZ/H3gC4Ua6GOn9m/xl1UF4ghH8GsriKvAYxLsxoKvn6NdebW7kZ6iGB3CGSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    


<title>Document</title>
</head>





@section('content')
    
@endsection
<body>
  <div class = "container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Nba search</div>

          <div class="card-body">
            <input type="text" id="Player-name" class = "form control" placeholder="type a player">
            <a href="" type="submit" id="submitBtn" class="btn btn-primary from-control">Search...</a>
            <div class="row" id="result"></div>

          </div>
          <div class="card-footer text-center">Nba stats</div>
        </div>
          
      </div>
    </div>
  </div>
  <script src="{{asset('js/nba.js')}}">
</body>




</html>