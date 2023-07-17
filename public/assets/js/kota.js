$( document ).ready(function() {
  // //untuk memanggil plugin select2
  // $('#provinsi').select2({
  //   language: "id"
  // });
  // $('#kota').select2({
  //   language: "id"
  // });

  //saat pilihan provinsi di pilih maka mengambil data di data-wilayah menggunakan ajax
  $("#provinsi").change(function(){
        $("img#load1").show();
        let prov = $(this).val();
        const provId = prov.split(",", 2);

        $.ajax({
           type: "POST",
           dataType: "html",
           url: "data-wilayah.php?jenis=kota",
           data: "id_provinces="+provId[0],
           success: function(msg){
              $("select#kota").html(msg);                                                       
              $("img#load1").hide();                                                       
           }
        });                    
     });  
});