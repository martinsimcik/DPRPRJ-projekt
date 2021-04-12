<?php
    $connect = mysqli_connect("localhost","root","","pokusy");
    if(isset($_POST['submitinserdetails'])) {
        
        $nazev_pokusu = $_POST['nazev_pokusu'];
        $pomucky = $_POST['pomucky'];
        $postup = $_POST['postup'];
        $popis_pokusu = $_POST['popis_pokusu'];
        $kategorie = $_POST['kategorie'];
        // tady bude přidání obrázk uk pokusu
        
    if(!empty($nazev_pokusu) && !empty($pomucky) && !empty($postup) && !empty($popis_pokusu) && !empty($kategorie) )   {
    
        
        $sql = "INSERT INTO `pokusy`(`nazev_pokusu`, `pomucky`, `postup`, `popis_pokusu`, `kategorie`)"
                               . " VALUES ('$nazev_pokusu','$pomucky','$postup','$popis_pokusu','$kategorie')" ;
    $qry = mysqli_query($connect, $sql);
    if($qry){
        echo "Pokus byl úspěšně přidán";
    }   
        
    } else {
        echo "Všechny kolonky musí být vyplněné";
    }
        
    
    
    }
?>
<html>
    <head>
        <title>Formulář</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    body {
     background-color: #F4F1DE;
     text-align: center;
    }
    </style>
    </head>
    <body>
        <div class="row">
            <div class="col-2">
                
            </div>
            <div class="col-8">
                <center>
        <h2>Přidání pokusů</h2>
        <form action="" method="POST">
            Název pokusu:<br>
<input type="text" name="nazev_pokusu"><br >Pomůcky:<br >
<input type="text" name="pomucky"><br >Postup:<br >
<input type="text" name="postup"><br >Popis pokusu:<br >
<input type="text" name="popis_pokusu"><br >Kategorie:<br >
<input type="text" name="kategorie"><br ><br >
<input type="submit" name="submitinserdetails" value="Odeslat">
</form>
                </center>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-default">
                            <a class="nav-link text-dark" href="pokusy">Zpět na pokusy</a> 
                        </button>
            </div>
        </div>
    </body>
</html>