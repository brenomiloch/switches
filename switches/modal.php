<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete-modal-label">Confirmar exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Você tem certeza que deseja excluir este switch?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="#" class="btn btn-danger" id="confirm-delete">Excluir</a>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var switchIdToDelete;

    // Manipula o clique no botão de excluir para definir o ID do switch a ser excluído
    $('a[data-toggle="modal"]').click(function() {
      switchIdToDelete = $(this).data('switch');
    });

    // Manipula o clique no botão de confirmação de exclusão
    $('#confirm-delete').click(function() {
      // Aqui você pode realizar a lógica para executar a exclusão do switch com base no switchIdToDelete
      // Exemplo de código para redirecionar para a página de exclusão com o ID do switch:
      window.location.href = 'excluir.php?id=' + switchIdToDelete;
    });
  });
</script>
