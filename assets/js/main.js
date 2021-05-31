$(function(){

    $(".owl-carousel").owlCarousel({
        loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
    });

    // alert('oke');
    $('.cari').on('keyup', function(){
        $('.cariTutor').html(" ");
        const inp = $('.cari').val();
        $.ajax({
            url : 'http://localhost/tutory/pelajar/cariTutor',
            data : {inp : inp},
            method : 'post',
            dataType : 'json',
            success : function(data){
                   console.log();
                    if(data.length == 0){
                        $('.cariTutor').append(`
                        <div class="col-md-12 foto-tutor mb-5 d-flex align-items-center flex-column">
                            <h5 class=""><i>Data tidak ditemukan</i></h5>
                        </div>
                        `)
                    }else{

                        let res = data;
                        $.each(res, function(i,data){
                            $('.cariTutor').append(`
                            <div class="col-md-4 foto-tutor mb-5 d-flex align-items-center flex-column">
                            <div class="item-link" onclick="window.location.href='http://localhost/tutory/pelajar/detailTutor/`+data.id+`'">
                                <div class="item-link" onclick="window.location.href='<?= base_url('home/viewTutor/') . $tutor['id'] ?>'">
                                <div class="image  rounded-circle overflow-hidden" style="width: 200px; height : 200px;">
                                    <img src="http://localhost/tutory/assets/img/profile/`+data.image+`" alt="" class="mb-1 hero img-profile" style="width: 100%;">
                                </div>
                                <p class="fw-bold">`+ data.nama +`</p>
                                <span class="nim">`+data.nim+`</span>
                                </div>
                            </div>`);
                        })
                    }

                    
                // $('.jurusan').val(data);
            }
        });
    })

    $('.menu').on('click', function(){
        $(this).toggleClass('open');
        $('.links').toggleClass('reveal');

    });
    
    $('.panel').on('click', function(){
        $(this).addClass('.panels');
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
           <div class="form-floating">
            <textarea name="testimoni" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Ulasan</label>
            </div>`);
         $('#belum').addClass('d-none');
         $('#udah').addClass('d-none');
         $('.join').html(`
         <button id="udah" type="submit" class="send btn fs-5 fw-700 bg-primary d-flex justify-content-center align-items-center" style="width : 100% ; height: 75px;text-decoration : none; color : white; border-none : none !important" >Kirim Ulasan</button>
         <a href="http://saweria.co/`+ donasi +`" id="udah" class=" fs-5 fw-700 gabung bg-warning d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white" target="_blank" >Donasi</a>`);
         $('.joins').html(`
         <a href="http://localhost/tutory/Auth"  id="udah" class="disabled fs-5 fw-700 bg-primary d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white" aria-disabled="true">Kirim Ulasan</a>
         <a href="http://saweria.co/`+ donasi +`" id="udah" class=" fs-5 fw-700 gabung bg-warning d-flex justify-content-center align-items-center" style="height: 75px;text-decoration : none; color : white"   target="_blank">Donasi</a>`);
        }
        
        }, 1000);
    
     
});
