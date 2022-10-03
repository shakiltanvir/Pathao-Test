<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customar Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
                <h4>Registration</h 4>
                <hr>
                <form action="{{route('customar-registration')}}" method="post">
                
                    @csrf
                    <div class="class-form">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First Name"
                        name="firstname" value="">
                        <!-- <span class="text.danger">@error('firstname'){{$message}} @enderror</span> -->
                    </div>
                    <div class="class-form">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name"
                        name="lastname" value="">
                        <!-- <span class="text.danger">@error('lastname'){{$message}} @enderror</span> -->
                    </div>
                    <div class="class-form">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email"
                        name="email" value="">
                        <!-- <span class="text.danger">@error('email'){{$message}} @enderror</span> -->
                    </div>
                    <div class="class-form">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" placeholder="Enter New Password"
                        name="password" value="">
                        <!-- <span class="text.danger">@error('password'){{$message}} @enderror</span> -->
                    </div>
                    <div>
                        <button class="button btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <br>
                    <a href="login"> Already Registered! Login here. </a>
                </form>
            </div>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
</body>
</html>