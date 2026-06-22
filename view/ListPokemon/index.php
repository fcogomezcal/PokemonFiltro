<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>AnderCode</title>
</head>

<body>
    <div class="container">
        <h1>Filtro Avanzado</h1>
        <br>
        <div class="row">
            <div class="col-md-3">

                <div class="list-group">
                    <h4>Nombre</h4>
                    <div class="list-group-item">
                        <input id="txtnombre" class="form-control"/>
                    </div>
                </div>
                <br>
                <div class="list-group">
                    <h4>Tipos</h4>
                    <div id="listtipo">
                        
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row" id="listpokemon">
                    
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="listpokemon.js"></script>


</html>