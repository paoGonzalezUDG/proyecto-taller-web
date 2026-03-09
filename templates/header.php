<!-- Cambio de idioma -->
<!--<a rel="noopener" class="nav-link" href="<?php echo URL_SIN_DIAGONAL.($id > 1 ? '/' : '').$url.'/'.$idioma; ?>"><?php echo $txt_seleccionado; ?></a>-->

<h2 class="pt-5 px-3">HEADER</h2>
<p class="pb-5 px-3">Aquí ponemos nuestro menú</p>

<!-- Modal gracias por usar el formulario contacto -->
<!-- Este modal solo se muestra después de presionar el botón de enviar en el formulario. -->
<div id="graciasModal" class="modal fade" tabindex="-1" aria-labelledby="graciasModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h2 class="fw-bold my-3"><?php echo LANG_TITLE_HEAD_GRACIAS; ?></h2>
        <p><?php echo LANG_PAG_GRACIAS; ?></p>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><?php echo LANG_REGRESAR; ?></button>
      </div>
    </div>
  </div>
</div>