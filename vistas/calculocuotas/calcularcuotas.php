<div class="card">
   <div class="card-header">
        Calculo de Cuotas Niveladas
   </div>

    <div class="card-body">
    <form action="" method="post">
  <div class="mb-3">
    <label for="Monto" class="form-label">Monto Prestamo</label>
    <input type="text" class="form-control" id="monto" name="monto" required>
    <div id="Montohelp" class="form-text">Ingrese la cantidad del prestamo</div>
  </div>
  <div class="mb-3">
    <label for="tasa" class="form-label">Tasa de interes</label>
    <input type="range" class="form-range" min="0" max="40" step="5" value="0" id="tasa" name="tasa">
    <output class="tasa-output" for="tasa"></output>
  </div>
  <div class="mb-3">
        <select class="form-select" aria-label="Plazo en Meses" name="meses">
            <option selected>Plazo en Meses</option>
            <option value="6">6 meses</option>
            <option value="12">12 meses</option>
            <option value="24">24 meses</option>
            <option value="36">36 meses</option>
            <option value="48">48 meses</option>
 
        </select>
    </div>
    <div class="mb-3">
    <button type="submit" class="btn btn-primary">Calcular</button>
    </div>

</form>
  
    </div>

</div>
<br>
<div class="card">

    <div class="card-header">
        Plan de Pagos
    </div>

    <div class="card-body">

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Numero Cuota</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Fecha Vencimiento</th>
                    <th scope="col">Fecha Maxima Pago</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach ($plandepago as $plandepago) {?>
                <tr>
                    <td> <?php echo $plandepago -> id; ?></td>
                    <td> <?php echo $plandepago -> Numero_Cuota; ?></td>
                    <td> <?php echo $plandepago -> Valor_Cuota; ?></td>
                    <td> <?php echo $plandepago -> Fecha_Registro; ?></td>
                    <td> <?php echo $plandepago -> Fecha_Vencimiento; ?></td>
                    <td> <?php echo $plandepago -> Fecha_Maxima_Pago; ?></td>

                </tr>

              
            <?php } ?>

            </tbody>
        </table>
    </div>
    

    </div>

</div>
<br>

<script type="text/javascript">
    const tasa = document.querySelector("#tasa");
    const output = document.querySelector(".tasa-output");

    output.textContent = tasa.value;

    tasa.addEventListener("input", function () {
    output.textContent = tasa.value + "%";
    });
</script>