$(document).ready(function() {
    var customerId;

    $('#delete-modal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        customerId = button.data('customer');
    });

    $('#confirm-delete').click(function() {
        window.location.href = 'excluir.php?id=' + customerId;
    });
});