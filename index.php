<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
<button><a href="displayInfo.php">users</a> </button>
    <div class="container">

    <h1>User Registration</h1>
   
    <div> 
        <form action="info.php" method="post" enctype='multipart/form-data'>        
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="file" name="image" id="image">
            <input type="submit" value="Save">
        </form>
    
    </div>

    </div>
   

</body>
</html>

