<script type="text/javascript" >
    function fntEliminar(intIndex){
        $('input[id*="hdnEliminar_'+intIndex+'"]').val(1);        
        $('input[id*="hdnEliminar_'+intIndex+'"]').parent().parent().addClass('delete-row')
    }
    
    function fntGuardar(){

        $.ajax({
            type: "POST",
            url: "anuncio.php?process=true",
            data:$('#DivTravel').find('input,select,textarea').serialize(),
            async: true,
            global: false,
            success: function(data) {
                location.reload(); 
            }
        });

    }
    
    function fntEditar(intIndx){
        $('div[id*="divView_'+intIndx+'_"]').addClass('hidden');
        $('div[id*="divEdit_'+intIndx+'_"]').removeClass('hidden');
        $('input[id*="hdnEditar_'+intIndx+'"]').val(1);
        
    }
    
   
    function fntAddTravel(){
        intFilasTravel++;
        $.ajax({
          url: "anuncio.php?agregarfila=true&fila="+intFilasAnuncio,
          async: true,
          global: false,
          success: function(data) {
              $("#tbTravel tr:last").after(data);
              return false;
          }
        });          
    }
</script>