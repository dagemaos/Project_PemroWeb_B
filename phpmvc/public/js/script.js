$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#judulModal').html('Add Issues');
        $('#judul').val('');
        $('#paragraf1').val('');
        $('#paragraf2').val('');
        $('#paragraf3').val('');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#judulModal').html('Edit Issues');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/issues/ubah');
        $('#gambar').remove();
    
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/issues/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#judul').val(data.judul);
                $('#paragraf1').val(data.paragraf1);
                $('#paragraf2').val(data.paragraf2);
                $('#paragraf3').val(data.paragraf3);
                // $('#gambar').val(data.gambar);
                $('#id_issues').val(data.id_issues);
            }
        });
    
    });

});