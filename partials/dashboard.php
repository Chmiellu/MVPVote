<?php
session_start();

$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Zagłosowano</b>';
}else{
    $status='<b class="text-danger">Nie zagłosowano</b>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zawodnik meczu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
        <a href="../"><button class="btn btn-dark text-light px-3">Wróć</button></a>
        <a href="logout.php"><button class="btn btn-dark text-light px-3">Wyloguj</button></a>
        <a href="contact.php"><button class="btn btn-dark text-light px-3">Kontakt</button></a>

        <h1 class="row my-4">Wybierz zawodnika meczu<h1>
        <div class="row my-5">
            <div class="col-md-7">
                <?php                
                if(isset($_SESSION['groups'])){
                $groups=$_SESSION['groups'];
                for($i=0;$i<count($groups);$i++){              
                ?>                  
                <div class="row">
                    <div class="col-md-4">
                        <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" alt="Zawodnik1">
                    </div>
                    <div class="col-md-8">
                        <strong class="text-dark h5">Zawodnik:</strong><br>
                        <?php echo $groups[$i]['username'] ?><br>
                        <strong class="text-dark h5">Głosy:</strong><br>
                        <?php echo $groups[$i]['votes']?><br>
                    </div>
            </div>
           
            <form action="../actions/voting.php" method="post">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']
                ?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']
                ?>">

              <?php
              if($_SESSION['status']==1){
                  ?>
                  <button class="bg-success disabled my-1 text-white px-3">Zagłosowano</button>
                  <?php
              }else{
                  ?>
                  <button class="bg-info my-1 text-white px-3" type="submit">Głosuj</button>
                  <?php
              }
              
              ?>  
            </form>
            <hr>
            <?php
            } 
        }else{
            ?>
            <div class="container">
                <p>Brak zawodników</p>
        </div>
            <?php
        }
        ?>

            </div>
            <div class="col-md-5">
            <img src="../uploads/<?php echo $data['photo'] ?>" alt="Zawodnik1">
                <br>
                <strong class="text-dark h5">Głosujący:</strong><br>
                <?php echo $data['username'] ;?><br>
                <strong class="text-dark h5">Status:</strong><br>
                <?php echo $status;?><br>
</div>
        </div>
</div>
</body>
</html>