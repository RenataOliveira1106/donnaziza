{{ csrf_field() }}

<script>

    $(document).ready(function () {

        $("#preco").maskMoney({
            prefix: "R$ ",
            decimal: ",",
            thousands: "."
        });

        $("#form").submit(function() {
            var preco = $('#preco').maskMoney('unmasked')[0];
            $('#preco').val(preco);
        });
    });

</script>

<div class="row">


  <div class="form-group col-md-6">
    <label> Descrição </label>
    <input type="text" class="form-control" name="descricao" value="{{ isset($omelete) ? $omelete->descricao : ''}}" id="descricao" autofocus required>
  </div>

  <div class="form-group col-md-6">
    <label> Preço </label>
    <input type="text" class="form-control" name="preco" value="{{ isset($omelete) ? $omelete->preco : ''}}" id="preco" required>
  </div>


</div>
