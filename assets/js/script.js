$(function(){
    // alert('OK');


    $('.menu').on('click', function(){
        $(this).toggleClass('open');
        $('.links').toggleClass('reveal');

    });
    
    $('.panel').on('click', function(){
        $(this).addClass('bg-primary').siblings().removeClass('bg-primary');
        $(this).addClass('text-light').siblings().removeClass('text-light');
    })


    $('.fakultas').on('change',function(){
        $('.jurusan').html('');
        const id = $(this).find(':selected').data('id');
        $.ajax({
            url : 'http://localhost/tutory/Auth/cekJurusan',
            data : {id : id},
            method : 'post',
            dataType : 'json',
            success : function(data){
                let res = data;
                $.each(res, function(i,data){
                    $('.jurusan').append(`<option value="`+data.jurusan+`">`+ data.jurusan +`</option>`);
                })
                    
                // $('.jurusan').val(data);
            }
        });
    })
});
