//servira para eliminar
$(document).ready(function(){
    $('.delete_link').on('click', function(){
        const id = $(this).attr('rel')
        //console.log(id);
        const delete_url = "index.php?laboratorio&delete=" + id; 
        $('.modal-title').html('Eliminar laboratorio');
        $('.modal-body').html('¿ Estás seguro de eliminar este Laboratorio ?');
        $('.btn_delete_link').attr('href', delete_url);
        $('#deleteModal').modal('show');
    });

});