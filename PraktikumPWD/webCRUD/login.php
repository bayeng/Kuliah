<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="ceklogin.php" method="POST" class="">
                    <?php 
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan']=="gagal"){
                                echo"<h3><center>username dan password salah</center></h3>";
                            }
                        }
                    ?>
                
                        <h4 class="mt-3">login</h4>
                        <div class="mb-3 col-auto">
                            <label for="uname" class="form-label">Username</label>
                            <input type="text" placeholder="username" name="uname" class="form-control">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="pwd" class="form-label">Password</label>
                            <input type="password" placeholder="password" name="pwd" class="form-control">
                        </div>
                        <div class="d-flex justify-content-start">
                            <button type="submit" class="btn btn-primary">login</button>
                            
                        </div>
                        <div>
                            <label>dont have account? register <a href="register.php">here</a> </label>
                        </div>
                </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>