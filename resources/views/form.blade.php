<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  
   
    <form action="{{$url}}" method="post">
      @csrf
      <div class="container">
      <h2>Registration Form</h2>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $customer->name ?? '' }}" id="name" placeholder="Enter your name">
        <span class="text-danger">
          @error('name')
          {{$message}}
          @endError
        </span>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $customer->email ?? '' }}" placeholder="Enter your email">
        <span class="text-danger">
          @error('email')
          {{$message}}
          @endError
        </span>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
        <span class="text-danger">
        @error('password')
          {{$message}}
        @endError
</span>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" name="password_confirm" class="form-control" id="confirm-password" placeholder="Confirm your password">
        <span class="text-danger">
          @error('password_confirm')
          {{$message}}
          @endError
        </span>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
 

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
