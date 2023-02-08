<?php
    $localhot = "localhost";
    $user = "root";
    $password = "";
    $database = "agence";

    // create connection 
    $connection = new mysqli($localhot , $user  , $password , $database);


    $titre = "";
    $image = "";
    $description = "";
    $superficie = "";
    $adresse = "";
    $montant = "";
    $type_annonce = "";


    $errorMessage = "";
    $successMessage = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titre = $_POST['titre'];
        $image = $_FILES['image']['name'];
        $description = $_POST['description'];
        $superficie = $_POST['superficie'];
        $adresse = $_POST['adresse'];
        $montant = $_POST['montant'];
        $type_annonce = $_POST['type_annonce'];


        move_uploaded_file($_FILES['image']['tmp_name'], "$image");

        do {
            if( empty($titre) ||  empty($image) ||  empty($description) ||  empty($superficie)  || empty( $adresse) || empty($montant) || empty($type_annonce)) {
                $errorMessage = "All the fields are required";
                break ;
            }


            // Add new immobilière to data
            $sql = "INSERT INTO annonce (titre , image , description , superficie , adresse , montant  , type_annonce)"  . "VALUES ('$titre' , 'img/$image' , '$description' , '$superficie' , '$adresse' , '$montant', '$type_annonce')";
            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query : " . $connection->error;
                break;

            }


        
            $titre = "";
            $image = "";
            $description = "";
            $superficie = "";
            $adresse = "";
            $montant = "";
            $type_annonce = "";

            $successMessage = "Client added correctly";


            header("location: /agence/agence.php");
            exit;

        } while (false);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Create </title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <h2>New Immobiliere</h2>


        <?php 
            if (!empty($errorMessage)) {
                echo " 
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>                
                </div>
                ";
            }
        ?>


        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">titre</label>
                <div class="col-sm-6">
                    <input type="text" name="titre" value="<?php echo $titre; ?>" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">image</label>
                <div class="col-sm-6">
                <input class="form-control" type="file" id="formFile" name="image" value="<?php echo $image; ?>" >
             </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">description</label>
                <div class="col-sm-6">
                    <textarea name="description" value="<?php echo $description; ?>" class="form-control" id="" cols="30" rows="10"></textarea>                </div>
                </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">superficie</label>
                <div class="col-sm-6">
                <select class="form-select" selected aria-label="Default select example" name="superficie" >
                    <option name="superficie" value="location">location</option>
                    <option value="vente">vente</option>
                </select>
                    <!-- <input type="text" name="superficie" value="" class="form-control" id=""> -->
                </div>
            </div>






            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">adresse</label>
                <div class="col-sm-6">
                    <input type="text" name="adresse" value="<?php echo $adresse; ?>" class="form-control" id="">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">montant</label>
                <div class="col-sm-6">
                    <input type="text" name="montant" value="<?php echo $montant; ?>" class="form-control" id="">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">type_annonce</label>
                <div class="col-sm-6">
                    <input type="text" name="type_annonce" value="<?php echo $type_annonce; ?>" class="form-control" id="">
                </div>
            </div>


            <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>                
                            </div>
                        </div>
                    </div>
                    ";
                }
            
            ?>
            <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button class="btn btn-primary" type="submit" >Submit</button>    
                    </div>
                
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="/agence/agence.php" role="button">Cancel</a>
                </div>
            </div>
            </div>
        </form>
    </div>
    <style>
        body{
        background-color:#BDDAE8; 

        }
    </style>
</body>
</html>