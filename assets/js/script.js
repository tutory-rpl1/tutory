f$(function(){


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


     // input waktu

        let tanggal =  $('.tanggal').val();
        // console.log(tanggal);
        
         let mulai =  $('.waktuMulai').val();
        //  console.log(mulai);

          let selesai =  $('.waktuSelesai').val();
        //  console.log(selesai);

         let link =  $('.link').val();
         let donasi =  $('.donasi').val();
        //  console.log(link);
     
        //  hitung mundur ke waktu mulai
        const countDownMulai = setInterval(function(){
         const aim = new Date(tanggal +" "+ mulai).getTime();
         const now = new Date().getTime();
         let selisih = aim - now;
         
         let hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
         let jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
         let menit = Math.floor(selisih % (1000 * 60 * 60 ) / (1000 * 60 ));
         let detik = Math.floor(selisih % (1000 * 60 ) / (1000));
         
         if(selisih < 0){
             clearInterval(countDownMulai);
             console.log('work');
            $('.time').html("Kelas sedang berlangsung");
            $('.time').addClass('text-primary');
            $('.ket').addClass('d-none');
            $('#belum').attr("href", "http://localhost/tutory/Auth" ).removeClass("bg-secondary").addClass("bg-primary");
            $('#udah').attr("href", link ).removeClass("bg-secondary").addClass("bg-primary");
         }else{

             $('.time').html(hari +" hari, "+ jam +" jam, "+ menit +" menit, "+ detik +" detik lagi");
         };
         
         }, 1000);
     


       //  hitung mundur ke waktu selesai
    const countDownSelesai = setInterval(function(){
        const aim = new Date(tanggal +" "+ selesai).getTime();
        const now = new Date().getTime();
        let selisih = aim - now;
        
        // let hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
        // let jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
        // let menit = Math.floor(selisih % (1000 * 60 * 60 ) / (1000 * 60 ));
        // let detik = Math.floor(selisih % (1000 * 60 ) / (1000));
        
        if(selisih < 0){
            clearInterval(countDownSelesai);
            $('.time').html('Kelas telah berakhir').removeClass('text-primary').addClass('text-danger');
           $('.card-info').html(`
           <h3 class="fw-bold">Terima kasih telah bergabung ❤</h3>
           <hr>
           <div class="form-floating"><form action="http://localhost/tutory/Auth/testi" method="post">
           <textarea class="form-control rounded" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
           <label for="floatingTextarea2">Beri ulasan untuk tutor</label>
            </div>`);
         $('#belum').addClass('d-none');
         $('#udah').addClass('d-none');
         $('.join').html(`
         <button type="submit"  id="udah" class="disabled fs-5 fw-700 bg-primary d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white" aria-disabled="true">Kirim Ulasan</button></form>
         <a href="http://saweria.co/`+ donasi +`" id="udah" class=" fs-5 fw-700 gabung bg-warning d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white" target="_blank" >Donasi</a>`);
         $('.joins').html(`
         <a href="http://localhost/tutory/Auth"  id="udah" class="disabled fs-5 fw-700 bg-primary d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white" aria-disabled="true">Kirim Ulasan</a>
         <a href="http://saweria.co/`+ donasi +`" id="udah" class=" fs-5 fw-700 gabung bg-warning d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white"   target="_blank">Donasi</a>`);

        }
        
        }, 1000);
    
     alert('oke');
     
});
