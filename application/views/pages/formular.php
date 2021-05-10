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
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: #F4F1DE;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .user-box {
  position: relative;
}

.box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.box .user-box input:focus ~ label,
.box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #E07A5F;
  font-size: 12px;
}

.box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.box a:hover {
  background: #E07A5F;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #E07A5F,
              0 0 25px #E07A5F,
              0 0 50px #E07A5F,
              0 0 100px #E07A5F;
}

.box a span {
  position: absolute;
  display: block;
}

.box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #E07A5F);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #E07A5F);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #E07A5F);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #E07A5F);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
.vertical-center {
  
  position: absolute;
  bottom: 78%;
  right: 22%;

}
.vertical-center-u {
  
  position: absolute;
  
  right: 50%;

}
    body {
     text-align: center;
     background-color: #F4F1DE;
    }
    
    .vlevo {
        left: 0%;
    }
    
    
    </style>
    </head>
    <body>
        <div class="box">
            
            
        <h2>Přidání pokusů</h2>
        <form action="" method="POST">
            
            <div class="user-box">
            <input type="text" name="nazev_pokusu" required=""/><br/>
            <label for="nazev_pokusu">Název pokusu:</label>
            </div>
            <div class="user-box">
            <input type="text" name="pomucky" required=""/><br/>
            <label for="pomucky">Pomůcky:</label>
            </div>
            <div class="user-box">
            <input type="text" name="postup" required=""/><br/>
            <label for="postup">Postup:</label>
            </div>
            <div class="user-box">
            <input type="text" name="popis_pokusu" required=""/><br/>
            <label for="popis_pokusu">Popis pokusu:</label>
            </div>
            <div class="user-box">
            <input type="text" name="kategorie" required=""/><br/>
            <label for="kategorie">Kategorie:</label>
            </div>

<input type="submit" class="btn btn-dark" class="vertical-center" name="submitinserdetails" value="Odeslat">
</form>
               </div>  
            <div class="col-12">
                <button type="button" class="btn btn-default">
                            <a class="nav-link text-dark" href="pokusyAdmin">Zpět na pokusy</a> 
                        </button>
            </div>
       
    </body>
</html>
