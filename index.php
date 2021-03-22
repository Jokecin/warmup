<HTML>
<HEAD>
<?php
session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</HEAD>
<BODY>
<div class="titulo">
<p>Calculadora CAE</p>
</div>

<div class="container">
<div class="row">
<div class="col-sm">
<p>Datos</p>

  <form action="calculo.php" method="POST">
  <div class="input-group mb-3">
  <input type="number" name="monto" placeholder="Monto incial" class="form-control" >
  </div>

  <div class="input-group mb-3">
  <input type="number" name="cantidad" placeholder="Cantidad de cuotas" class="form-control">
  </div>

  <div class="input-group mb-3">
  <input type="number" name="valor" placeholder="Valor de las cuotas" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Calcular</button>

  </form>

</div>

<div class="col-sm">
<p>Resultados</p>
</div>

  </div>
</div>

</BODY>
</HTML>

