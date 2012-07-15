$(document).ready(function(){
    
    // Bouton fermer des alertes formulaires
    $('.alert_message_button').click(function(){
        $(this).parent().hide("slow",function(){ $(this).remove(); });    
    });
    
    // Masquage des messages erreur/valide/warning
    $('.timeout').each(function(){
        var obj = $(this);
        var fx = function(){
            //$(obj).hide("slow",function(){ $(this).remove(); });
            $(obj).animate({height: ['toggle', 'swing'],opacity: 'toggle'}, 300, 'linear', 
            function() {
                $(this).remove();
            }
            );
        }; 
        setTimeout(fx,5000);    
    });

});