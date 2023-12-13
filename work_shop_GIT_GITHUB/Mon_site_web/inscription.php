<?php require ('config/inscriptionConfig.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatabible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <title>inscription</title>
</head>
<body>
    <br><br>
        <form  class="container" method="POST">
            <?php
              if(isset($msgErreur)) {
                echo '<p>'.$msgErreur.'</p>';
              }
             ?>
        <div class="mb-3">
             <label  class="form-label">Pseudo</label>
             <input type="text" class="form-control" name="pseudo">
            </div>
            <div class="mb-3">
             <label  class="form-label">Email address</label>
             <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
             <label  class="form-label">mot de passe</label>
             <input type="password" class="form-control"  name="password">
            </div>
  <button type="submit" class="btn btn-primary" name="valider">S'inscrire</button>
       </form>
</body>
 </html>