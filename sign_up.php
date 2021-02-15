<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  .container{
      max-width: 60%;
  }
    </style>
</head>
<body>

    <div class="container">
    <h1>Sign up</h1>
    <form >
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" placeholder="Enter Name" required>
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"   placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
    </div>
</body>
</html>