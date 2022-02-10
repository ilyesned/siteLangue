<?php 
    include_once("./src/connect_bdd.inc.php")
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin Ax'langu</title>
    <link rel="stylesheet" href="./css/connect.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row h-100">
          <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
            <div class="d-table-cell align-middle">
              <div class="card">
                <div class="card-body">
                  <div class="m-sm-4">
                    <div class="text-center">
                        <h1 class="tite-color">
                            Ax'lang
                        </h1>
                        <p style="font-size: 17px;">Inscription</p>
                    </div>
                    <form action="insertion.php" method="post" name="form">
                            <div class="mb-3">
                                <label class="form-label">Nom</label>
                                <input type="text" name="name" class="form-control" placeholder="name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Prénom</label>
                                <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control form-control-lg" type="email"  name="email" placeholder="" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="tel" name="phone" class="form-control" placeholder="phone" required>
                            </div>
                            <div class="mb-3">
                                <div class="text-left text-primary">
                                    <p style="font-size: 17px;margin-top:30px">* Choissez la langue</p>
                                </div>
                                <p>
                                    <a class="btn btn-success" data-bs-toggle="collapse" name="langue_anglais" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Anglais
                                    </a>
                                    <a class="btn btn-success" type="button" data-bs-toggle="collapse" name="langue_portugais" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                        Portugais
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                    
                                        <div class="text-center text-success">
                                            <p style="font-size: 17px;margin-top:30px">Choissez le niveau et le créneau qui vous convient</p>
                                        </div>
                                        <div class="mb-3">
                                        <select name="debutantAnglais" class="form-control form-select" placeholder="debutantAnglais">
                                            <option value="" disabled selected>Niveau Débutants (A1-A2)</option>
                                            <option value="debutantAnglais VAvC">Vendredi avant le culte 19h-19h45</option>
                                            <option value="debutantAnglais DApC">Dimanche après le culte 13h-14</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                        <select name="intermediaireAnglais" class="form-control form-select" placeholder="intermediaireAnglais">
                                            <option value="" disabled selected>Niveau Intermédiaire (B1-B2)</option>
                                            <option value="intermediaireAnglais VAvC">Vendredi avant le culte 19h-19h45</option>
                                            <option value="intermediaireAnglais DApC">Dimanche après le culte 13h-14</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                        <select name="avanceAnglais" class="form-control form-select" placeholder="avanceAnglais">
                                            <option value="" disabled selected>Niveau Intermédiaire (C1-C2)</option>
                                            <option value="avanceAnglais VAvC">Dimanche avant le culte 8h45-9h45</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                        <select name="enfantAnglais" class="form-control form-select" placeholder="enfantAnglais">
                                            <option value="" disabled selected>Niveau Enfant</option>
                                            <option value="enfantAnglais VApC">Dimanche après le culte 13h-14h</option>
                                        </select>
                                        </div>
                                        <div class="mb-3">
                                        <select name="aideAnglais" class="form-control form-select" placeholder="aideAnglais">
                                            <option value="" disabled selected>Aide aux devoirs</option>
                                            <option value="aideAnglais VAvC">Dimanche avant le culte 8h45-9h45</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <select name="debutantPortugais" class="form-control form-select" placeholder="debutantPortugais">
                                                <option value="" disabled selected>Niveau Débutants (A1-A2)</option>
                                                <option value="debutantPortugais VAvC">Vendredi avant le culte 19h-19h45</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div style="text-align: center">
                        <button type="submit" style="background-color: #0c4bc0; color: white" class="text-left btn mt-3">
                            Valider l'inscription
                        </button>
                        </div>
              
                    </form>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>