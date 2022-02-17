<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h3>File Uploads</h3>
        <form action="azione.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Nome del file di destinazione</label>
                <input type="text" required name="nome" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">File (jpg o png)</label>
                <input type="file" class="form-control" required name="fileToUpload" id="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Carica file</button>
        </form>

        <div class="row">
            <?php
            $target_dir = "immagini/"; //cartella
            $images = glob($target_dir."*.{jpg,jpeg,png}",GLOB_BRACE);
            
            
            
            foreach ($images as $value){

                echo '<div class="card" style="width: 18rem;">
                <img class="card-img-top" src="'.$value.'" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">'.basename($value).'</h5>
                    <p class="card-text">cazzo</p>
                    <a href="#" class="btn btn-primary">Elimina</a>
                </div>
                </div>';
                }

            ?>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>