<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Avalie sua compra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="./rate" method="post">
            <div class="modal-body">
                    <input type="hidden" name="idCompraModal" id="idCompraModal">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadio1" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">Pode melhorar</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadio2" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">regular</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadio3" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">boa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadio4" id="inlineRadio4" value="4">
                        <label class="form-check-label" for="inlineRadio4">muito boa</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="inlineRadio5" id="inlineRadio5" value="5">
                        <label class="form-check-label" for="inlineRadio5">Excelente</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
  </div>
</div>