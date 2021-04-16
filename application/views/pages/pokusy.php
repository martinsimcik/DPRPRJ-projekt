<html>
    <head>
        <title>Pokusy</title>
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
    .card {
    padding-left: 20px;
    padding-right: 20px;
    box-shadow: 0 0px 20px 0 rgba(0,0,0,0.6);
    border-color: black;
    background-color: #F4F1DE;
    transition: 0.3s;
    }
table, th, td {
  border: 2px solid black;
}   
    </style>
    <script type="text/javascript">

    </script>
    </head>
    <body>
        <h2 class="text-center"><b><u>Seznam pokusů</u></b></h2>
        <div class="container">
            ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            <center>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                    <h4><b> Vyberte, které pokusy chcete vyhledat: </b></h4>
                            <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">fyzika</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">chemie</label>
</div>
                            <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">pro děti</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">pro dospělé</label>
</div>
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">bezpečné</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">nebezpečné</label>
</div>
                    <br>
                            <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">domácí prostředí</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">venkovní prostředí</label>
</div>
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">prostředí laboratoře</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">věkově neomezené</label>
</div>                 
                    </div>
                          <input type="submit" name="" value="Vyhledat">
                          <div><br>&nbsp</div>
                    </div>
                    <div><br>&nbsp</div>
                </div>
                </div>
                </center>
            ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <center>
                    <div class="row">
                        <div class="col-12">
                            <h5><b> Pro zobrazení více informací k pokusu stačí na pokus kliknout </b></h5>
                            <table class="table">
                                <?php foreach ($pokusy as $pok) { ?>
                            <tr>
                                <td class="text-center">
                                    <a href="<?php echo base_url('auth/pokusyKlik/'.$pok->id) ?>">
                                <?= $pok->nazev_pokusu; ?>
                                    </a>
                                </td>
                            </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </center>
            ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            <center>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-default">
                        <a class="nav-link text-dark" href="../auth/login">Pro přidání pokusu se prosím přihlaste</a> 
                        </button>
                    </div>
                </div>
            </center>
                <div class="row">
                    <div class="col-12">
                        <h3><b> Komentáře k pokusům: </b></h3> 
                        <div class="form-group">
                            <label for="comment">Chtěli byste říct ostatním co si myslíte? Můžete.</label>
                            <div><br>&nbsp</div>
                            <b>(zde bude přidávání komentářů do databáze -> řádek pro jméno a větší pole pro text)</b> <br>
                            <div><br>&nbsp</div>
                            <button type="button" class="btn btn-default">
                            <a class="nav-link text-dark" href="../auth/login">Pro přidání komentáře se prosím přihlaste</a>
                            </button>
                            <div><br>&nbsp</div>
                            <b>(zde bude výpis komentářu z databáze -> jméno a komentář)</b>
                        </div>
                    </div>
                </div>
            </div>
        <div><br>&nbsp</div>
    </body>
</html>
