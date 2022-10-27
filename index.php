<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <title>test</title>
</head>
<body class="bg-black">
    <div class="d-flex justify-content-between m-3">
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "style =""><a  class ='text-decoration-none text-dark' href="#">Home</a></li>
                <li class="breadcrumb-item active">Scrum border</li>
            </ol>
            <h2 class="page-header">
                Scrum Board
            </h2>
        </div>
       <div>
        <button type="button" class="btn btn-outline-primary bg-primary text-light rounded-pill  "><i class="bi bi-plus h5 "></i>AddTask</button></a>
       </div>
    
    </div>
    <div class="container text-light border border-danger m-2 ">
 pppppppppsxs
            <?php 
            if (isset ($_POST["validation"])){
                $name=$_POST["user_name"];
                $naissance=$_POST["user_naissance"];
                $email=$_POST["user_email"];
                $pass_word= md5["user_password"];
                echo $name;
                echo "<hr>";
                echo $naissance;
                echo "<hr>";
                echo $email;
                echo "<hr>";
                echo $pass_word;
            }
            ?>

    </div>
    <form class="col-4 border p-2 shadow bg-light" action = "" methode="POST">
     
      <div class="form-group">
        <label for="name">Full name</label>
        <input type="text" name ="user_name" class="form-control" id="exampleInputPassword1" placeholder="Name">
      </div>

    </div>
    <div class="mb-3">
        <label for="recipient-name" class="col-form-label">Date de naissance:</label>
        <input type="date" name="user_naissance" class="form-control" id="recipient-date">
    </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="user_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" name="user_check" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" name="validation" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>