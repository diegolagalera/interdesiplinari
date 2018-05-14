//Script per a poder comprovar si les dades ja existeixen
$(document).ready(function(){
  console.log($('#ofertaForm').attr('action'));
      //Fem la busqueda al arxiu php amb un retard de 1000 mili.seg
      $("#ofertaForm input[type='submit']").click(function(n) {
        n.preventDefault(); //Parem el submit del formulari

        //Agafem totes les dades dels formularis
        var datoss = $('#ofertaForm').serialize();

        $.ajax({
          type: "POST",
          dataType: 'json',
          url: $('#ofertaForm').attr('action'),
          data: datoss,
          headers:{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

          /*Si hi ha un error saltara el alert*/
          error: function(e){
            alert('Elol de ajacs');
          },
          success: function(data){
            console.log(data);
            $("#Comprovacio").html(data);
            if (data == 1) {
                window.location.href = "/ofertas";
            }
          }
        });
     });
   });
