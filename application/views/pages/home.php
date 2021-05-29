<html>
    <head>
        <title>Domovská stránka</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    body {
     background-color: #F4F1DE;
    }
    .fontIcon{
    height: 100px;
    width: 100px;
    background-color:black;
    border-radius: 15px;
    }
    .card {
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.2);
    background-color: rgba(0,0,0,0.1);
    transition: 0.3s;
    }
    </style>
    </head>
    <body>
        
        <h2 class="text-center"><b>Zábavné pokusy kolem nás</b></h2>
        <center>
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-8">
            <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img src="<?php echo base_url('images/vznasedlo.jpg'); ?>" width="730" height="400" alt=""/>
      <div class="carousel-caption">
        <h3>Vznášedlo</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('images/hotice.jpg'); ?>" width="730" height="400" alt=""/>
      <div class="carousel-caption">
        <h3>Horký led</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('images/kompas.jpg'); ?>" width="730" height="400" alt=""/>
      <div class="carousel-caption">
        <h3>Tvorba kompasu</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon fontIcon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon fontIcon"></span>
  </a>
</div>
                </div>
                <div class="col-2">
                </div>
                </div>
        </center>
     <div><br>&nbsp</div>
            <div class="row">
                <div class="col-2">
                    
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body"><div class="text-center"><h2> O nás </h2></div><br>Jsme oblíbenci pokusů a z toho důvodu vznikl tento projekt. Chceme aby stránka sloužila pro lidi s podobnou oblibou v pokusech. Snažíme se zde vytvořit příjemné prostředí pro naše návštěvníky.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body"><div class="text-center"><h2> K čemu pokusy slouží </h2></div><br>Pokusy slouží k mnoha účelům, jak ke studijním, volnočasovým či profesním.
                        Například pro školáky, kteří si mají vyzkoušet pokus doma.  Pro zájemce o vědu, co rádi zkusí něco nového či lidi sběhlé v daném oboru, kteří si potřebují něco připomenout. </div>
                    </div>
                </div>
                <div class="col-2">
                    
                </div>
                <div><br>&nbsp</div>
            </div>
    </body>
</html>