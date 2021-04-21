<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <style>
    body {
     background-color: #F4F1DE;
    }
    </style>
 <div><br>&nbsp</div>
  <div><br>&nbsp</div>
<div class="container">
    <h1 class="text-center"><?= $nazev[0]->nazev_pokusu ?></h1>
    <br>
<style>
table, th, td {
  border: 2px solid black;
}
</style>
    <table class="table">
        <?php foreach ($pokusy as $pok) { ?>
            <tr>
                <th>Název pokusu:</th>
                <td><?= $pok->nazev_pokusu; ?></td> 
            </tr>
            <tr>
                <th>Pomůcky:</th>
                <td><?= $pok->pomucky; ?></td>
            </tr>
            <tr>
                <th>Postup:</th>
                <td><?= $pok->postup; ?></td>
            </tr>
            <tr>
            <th>Popis pokusu:</th>
                <td><?= $pok->popis_pokusu; ?></td>
            </tr>
        <?php } ?>
    </table>

</div>
    </body>
    </html>
    