$(function(){

    $('.tombolTambahData').on('click',function(){
        $('#exampleModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    })

    $('.modalUbah').on('click',function(){
        $('#exampleModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/tutory/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url : 'http://localhost/tutory/public/mahasiswa/getubah',
            data : {id : id},
            method : 'post',
            dataType : 'json',
            success : function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    })
    let toggle = true;
    $('.menu').on('click', function(){
    if(toggle){
    $(this).addClass('open');
    toggle = false;
        }else{
        $(this).removeClass('open');
        toggle = true;
        };
    });

    $('.panels').on('click', function(){
        $(this).addClass('active').siblings().removeClass('active');
    })

});