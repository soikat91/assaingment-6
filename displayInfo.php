<?php
     $users = array_map('str_getcsv', file('users.csv'));

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Info</title>
 <link rel="stylesheet" href="style.css">  
</head>

<body>
     <h1>Display Info</h1>
    
     <table class="userTable">
        <button><a href="index.php">Back</a> </button>
        <thead>
            <tr> 
                <th>Sr No</th>          
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            <?php
               $serialNo=1;
             foreach($users as $user):?>
                <tr> 
                    <td><?php echo $serialNo++; ?></td>
                    <td><?php echo $user[0] ?></td>
                    <td><?php echo $user[1] ?></td>                   
                    <td> <img src="uploads/<?php echo $user[2]  ?>" alt=""></td>
                </tr>
             <?php               
                endforeach;
              ?>   
        </tbody>
     </table>
</body>
</html>