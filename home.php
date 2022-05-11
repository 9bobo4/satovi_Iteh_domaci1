<?php
    include 'login.php';
    include 'config.php';
    include 'model/Sat.php';


    $sviSatovi = Sat::vratiSveSatove($conn);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pocetnaStyle.css">
</head>
<body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><?php echo $_SESSION['ulogovaniKorisnik']?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active" >
                        <a class="nav-link" href="logout.php"  >Odjavi se</a>
                    </li>
                    
                    </ul>
                </div>
                </nav>

    <div class="tabelaPocetna">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Model</th>
                <th scope="col">Brend</th>
                <th scope="col">Cena</th>
                <th scope="col">Materijal narukvice</th>
                <th scope="col">Vrsta</th>


                </tr>
            </thead>
            <tbody>
                <?php
                    while($red=$sviSatovi->fetch_array()):
                        
                ?>
                          <tr>
                            <th scope="row"><?php echo $red['id']?></th>
                            <td> <?php echo $red['model']?></td>
                            <td> <?php echo $red['brend']?></td>
                            <td> <?php echo $red['cena']?></td>
                            <td> <?php echo $red['materijalNarukvice']?></td>
                            <td> <?php echo $red['naziv']?></td>

                          
                        </tr>



                <?php endwhile;?>
            </tbody>
        </table>



    </div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>