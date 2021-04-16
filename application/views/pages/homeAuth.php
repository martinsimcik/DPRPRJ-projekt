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
        
        <h2 class="text-center"><b><u>Zábavné pokusy kolem nás</u></b></h2>
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
       <img src="<?php echo base_url('images/pokus1.jpg'); ?>" width="730" height="400" alt=""/>
      <div class="carousel-caption">
        <h3>nejaky_nazev</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('images/pokus2.jpg'); ?>" width="730" height="400" alt=""/>
      <div class="carousel-caption">
        <h3>nejaky_nazev</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('images/pokus3.jpg'); ?>" width="730" height="400" alt=""/>
      <div class="carousel-caption">
        <h3>nejaky_nazev</h3>
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
                        <div class="card-body"><div class="text-center"><h2> O nás </h2></div><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                            Phasellus faucibus molestie nisl. Cum sociis natoque penatibus et magnis dis parturient montes, 
                            nascetur ridiculus mus. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.
                            Integer tempor. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Vivamus ac 
                            leo pretium faucibus. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Fusce 
                            tellus. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim 
                            ipsum id lacus. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body"><div class="text-center"><h2> K čemu pokusy slouží </h2></div><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                            Phasellus faucibus molestie nisl. Cum sociis natoque penatibus et magnis dis parturient montes, 
                            nascetur ridiculus mus. Duis sapien nunc, commodo et, interdum suscipit, sollicitudin et, dolor.
                            Integer tempor. Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu. Vivamus ac 
                            leo pretium faucibus. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Fusce 
                            tellus. Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim 
                            ipsum id lacus. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede.</div>
                    </div>
                </div>
                <div class="col-2">
                    
                </div>
                <div><br>&nbsp</div>
            </div>
    </body>
</html>