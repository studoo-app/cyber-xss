<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BTS SIO 2 - Failles XSS - Formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row py-4">
        <div class="col mb-2">
            <a class="btn btn-danger" href="../index.php"> Retour </a>
        </div>
        <hr/>
        <div class="col">
            <div class="card">
                <div class="card-header"><b>Formulaire</b></div>
                   <form action="action.php" method="post" id="userForm" name="userForm" autocomplete="off">
                       <div class="card-body">
                           <div class="form-group">
                               <label for="name">Nom</label>
                               <input id="name" type="text" name="name" class="form-control">
                               <div id="name-invalid-feeback" class="invalid-feedback">
                                   invalid input
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="email">Adresse Email</label>
                               <input id="email" type="text" name="email" class="form-control">
                               <div id="email-invalid-feeback" class="invalid-feedback">
                                   invalid input
                               </div>
                           </div>
                           <div class="form-group">
                               <label for="password">Password</label>
                               <input id="password" type="text" name="password" class="form-control">
                               <div id="password-invalid-feeback" class="invalid-feedback">
                                   invalid input
                               </div>
                           </div>
                       </div>
                       <div class="card-footer">
                           <div class="d-grid gap-2">
                               <input class="btn btn-success mt-2" type="submit" name="submit">
                           </div>
                       </div>
                   </form>
               </div>
            <div id="alert-success" name="alert-success" class="alert alert-success mt-2" hidden > Requete terminée avec succès !</div>
        </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
<script src="index.js"></script>
</body>
</html>