<!DOCTYPE html>
<html>
<head>
  <title>view</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  
      <div class="container">
        <div class="d-flex justify-content-end">
      <a href="\customer" class="btn btn-primary">Add User</a>
        </div>
        <div>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Click</th>
                    <th>Click</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $i)
                <tr>
                    <td>{{$i->customer_id}}</td>
                    <td>{{$i->name}}</td>
                    <td>{{$i->email}}</td>
                    <td>{{$i->password}}</td>
                    
                    <td>
                    <a href="{{url('customer/delete/')}}/{{$i->customer_id}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                    </td>
                    
                    <td>
                    <a href="{{url('customer/edit/')}}/{{$i->customer_id}}">
                        <button type="button" class="btn btn-warning">Edit</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
      </div>
   
 

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
