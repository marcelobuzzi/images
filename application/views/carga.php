<div class="row w-100 mx-0 my-3 px-0 py-3 border-bottom">
  <div class="col-12 w-100 m-0 p-0 text-center">
    <div class="row m-0 p-0 w-100">
      <div class="col-12 w-100 m-0 p-0">
        <h3>Carga</h3>
      </div>
    </div>
    <div class="row m-0 p-0 w-100">
      <div class="col-12 w-100 m-0 p-0">
        <form id="frmImagen" enctype="multipart/form-data" >
          <img id="thumbnail" style="cursor: pointer; transform: rotate(0deg);" src="<?=base_url(IMG.'noimage.png');?>" width="200px" alt="" class="img-thumbnail" onclick="$('#fileImage').click();">
          <input id='fileImage' name="fileImage"  class="d-none" type="file">
          <input id='grados'    name="grados"     class="d-none" type="hidden" value="0">
        </form>
      </div>
    </div>
    <br>
    <div class="row m-0 p-0 w-100">
      <div class="col-12 w-100 m-0 p-0">
        <button class="btn btn-primary" type="button" name="button" onclick="guardar('<?=base_url('guardarImagen');?>', 'frmImagen');"><i class="fas fa-wrench"></i></button>
        <button class="btn btn-primary" type="button" name="button" onclick="rotate('thumbnail', -90);"><i class="fas fa-reply"></i></button>
        <button class="btn btn-primary" type="button" name="button" onclick="rotate('thumbnail', 90);"><i class="fas fa-share"></i></button>
      </div>
    </div>
  </div>
</div>
<div class="row m-0 p-0 w-100">
  <div class="col m-0 p-0 m-100 text-center">
    <img id="resultado" class="img-thumbnail mx-auto" width="200px" src="" alt="">
  </div>
</div>

<script type="text/javascript">
  $('#fileImage').change(function() {
    var file    = (this.files[0].name).toString();
    var reader  = new FileReader();

    reader.onload = function(e) {
      $('#thumbnail').attr('src', e.target.result);
    }

    reader.readAsDataURL(this.files[0]);
  });

  function rotate(imagen, grados) {
    var propiedad       = $('#' + imagen).css('transform');
    var values          = propiedad.split('(')[1], values = values.split(')')[0], values = values.split(',');
    var anguloRadianes  = values[1];
    anguloGrados        = Math.round(Math.asin(anguloRadianes) * (180/Math.PI));
    $('#' + imagen).css('transform', 'rotate(' + (anguloGrados + grados) + 'deg)');
    $('#grados').val(-1 * (anguloGrados + grados));
  }

  function guardar(metodo, form) {
    var formData = new FormData($("#" + form)[0]);
    $.ajax({
      url         : metodo,
      type        : 'POST',
      data        : formData,
      cache       : false,
      contentType : false,
      processData : false,
      success     : function(resp) {
        $('#resultado').attr('src', resp);
      }
    });
  }
</script>
