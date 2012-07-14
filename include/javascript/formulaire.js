/**
* @Desc : Fonction generic de verification de formulaire 
* @Author : Bryan Feron
* @Date : 14/07/2012
* @Modif : 14/07/2012
*/

$(document).ready(function(){
    
    // Verification a l'envoi du formulaire
    $('.' + classe_formulaire_obligatoire).submit(
        function(){
            var nombre_de_champs = $('.' + classe_champ_obligatoire);
                nombre_de_champs = nombre_de_champs.length;
            var erreur_saisie = 0;
            $('.' + classe_champ_obligatoire).each(function(){
                if($(this).val() == ''){
                    erreur_saisie++;
                    if( type_alert_erreur != 1)
                        $(this).addClass(classe_champ_obligatoire_erreur);
                    if( type_message_erreur != 1)
                        $(this).next('.' + classe_message_erreur).show();
                }else{
                    if( type_alert_erreur != 1)
                        $(this).removeClass(classe_champ_obligatoire_erreur);
                }
            });
            
            if(erreur_saisie <= 0){
                // envoi du formlaire
                return true;
            }else{
                // Affichage des erreurs
                if( type_alert_erreur != 2)
                    alert( message_erreur );
                if( type_message_erreur != 2){
                    $('#' + id_message_erreur_unique).show();   
                }
                
                return false;
            }
        }
    );
    
    // Verification a la perte de focus du champ
    $('.' + classe_champ_obligatoire).blur(function(){
       if( $(this).val() == '' ){
           if( type_alert_erreur != 1)
            $(this).addClass(classe_champ_obligatoire_erreur);
           if( type_message_erreur != 1)
            $(this).next('.' + classe_message_erreur).show();    
       }else{
           if( type_alert_erreur != 1)
            $(this).removeClass(classe_champ_obligatoire_erreur);    
           if( type_message_erreur != 1)
            $(this).next('.' + classe_message_erreur).hide();
       }
    });
});