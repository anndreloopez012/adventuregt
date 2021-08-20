</div>
</body>


<script language="Javascript"> 
function confirmar(){ 
confirmar=confirm("¿Te gusta nuestra web?"); //Entre las comillas el mensaje que quieres que diga
if (confirmar) 
// si pulsamos en aceptar
location.href=http://www.inisotre.com //Redirecionara a la pagina que quieras
else 
// si pulsamos en cancelar
alert('Has dicho que no'); 
} 
</script>

<script type="text/javascript">
    $().ready(function(){
        $('[rel="tooltip"]').tooltip();

        $('a.scroll-down').click(function(e){
            e.preventDefault();
            scroll_target = $(this).data('href');
             $('html, body').animate({
                 scrollTop: $(scroll_target).offset().top - 60
             }, 1000);
        });

    });

    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }


</script>