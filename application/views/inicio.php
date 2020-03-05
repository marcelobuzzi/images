<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf8">
    <meta name="viewport"               content="width=device-width, initial-scale=1">
    <meta name="theme-color"            content="#0055ff">
    <meta name="Description"            content="Sistema de Gestión de Imagenes">
    <meta http-equiv="x-ua-compatible"  content="ie=edge">
    <title>Edición de imágenes</title>

    <link rel="icon"        type="image/png"	href="<?=base_url(IMG.'logo.png');?>" sizes="16x16 32x32">

		<link rel="stylesheet"	type="text/css" 	href="<?=base_url(CSS.'bootstrap.min.css');?>">
		<link rel="stylesheet"	type="text/css" 	href="<?=base_url(CSS.'all.min.css');?>">

		<script type="text/javascript" src="<?=base_url(JS.'jquery-3.4.1.min.js');?>"></script>
		<script type="text/javascript" src="<?=base_url(JS.'popper.min.js');?>"></script>
		<script type="text/javascript" src="<?=base_url(JS.'bootstrap.min.js');?>"></script>
  </head>
  <body>
    <div id="contenidoBody" class="w-100 m-0 p-0">
      <?php
				if(isset($vistas)) {
					foreach ($vistas as $vista => $data) {
						$this->load->view($vista, $data);
					}
				}
      ?>
    </div>

    <div class="modal fade" id="ventanaModal" tabindex="-1" role="dialog">
      <div id='tipo-modal' class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
        </div>
      </div>
    </div>

    <div class="modal" id="spinner" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard='false'>
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="spinner-border text-danger mx-auto" role="status">
          <span class="sr-only">Procesando...</span>
        </div>
      </div>
    </div>
  </body>
</html>
