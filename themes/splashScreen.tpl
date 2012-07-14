<script type="text/javascript" src="include/javascript/conf/formulaire_connexion.js"></script>

<div id="splashScreen">
    <img src="image/logo.png" alt="" title="" class="logo"/>
    
    <form name="connexion"  id="connexion" method="post" action="connexion.php" class="verification_formulaire">
        {if {$message} != ''}
            {$message}
        {/if}
        
        <div id="message_erreur" style="display:none;">Tous les champs ne sont pas remplis ! </div>
        
        <div class="bloc_champ_formulaire">
            <div class="ligne_form">
                <label for="login">Login</label>
                <input type="text" value="" name="login" id="login" class="obligatoire"/>
                <div class="message_erreur_champ" style="display:none;">Champs obligatoire</div>
                <div class="clear"></div>
            </div>
            
            <div class="ligne_form">
                <label for="password">Password</label>
                <input type="password" value="" name="password" id="password" class="obligatoire"/>
                <div class="message_erreur_champ" style="display:none;" >Champs obligatoire</div>
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div class="bloc_bouton_formulaire">
            <input type="submit" value="Connexion" name="btn_connexion" id="btn_connexion" class="bouton_action"/>
        </div>
        
        <div class="clear"></div>
    </form>
</div>