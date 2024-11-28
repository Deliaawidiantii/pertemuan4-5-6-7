<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style_regis.css"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class="container">
     <h1>Register</h1>
    <form action="./backend/register.php" method="post">
        <div class="form-group">
        <input type="text" name="name" placeholder="masukkan nama anda">
        </div>

       <div class="form-group">
       <input type="email" name="email" placeholder="masukkan email anda">
       </div>

        <div class="form-group">
        <input type="password" name="password" placeholder="masukkan password anda">
        </div>

        <div class="form-group">
        <input type="password" name="confirm" placeholder="masukkan konfirmasi password anda">
        </div>

        <div class="form-group">
        <input type="submit" value="login" name="submit">
        </div>
    </form> 
</div>
</body>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 

</body>
</html> 

