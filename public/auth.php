<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sing-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" >
</head>
<body>



<button type="scrol" class="btn btn-outline-light" ><a href="/index.php" class="Home" style="color:black;">Home</a></button>

<div class="container">
   
    <div class="row">

        <form action="" method="post" class="col-10">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputSurname" class="form-label">Surname</label>
                <input type="text" class="form-control" id="exampleInputSurname" name="surname">
            </div>
            <div class="mb-3">
                <label for="exampleInputLogin" class="form-label">Login</label>
                <input type="text" class="form-control" id="exampleInputLogin" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
                

  <!--login pass-->
     
    <div class="log">
        <form action="" method="post" class="col-2">
    
            <div class="mb-3">
                <label for="exampleInputlogin" class="form-label-log">login</label>
                <input type="text" class="form-control" id="exampleInputlogin" name="login">
            </div>
            <div class="mb-3">
                <label for="exampleInputPossword" class="form-label-pass">Pass</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="password">
            </div>
             <button type="submline" class="btn btn-primary">next</button>
        </form>
    </div>   
     
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

