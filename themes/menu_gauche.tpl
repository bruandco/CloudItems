<div id="main_menu_gauche">
    <ul>
        <li><a href="logout.php">Deconnecter</a></li>
        <li><a href="compte.html">Mon compte</a></li>
        <li><a href="flux.html">Mes flux</a></li>
        <li>
            <form name="recherche" method="post" action="recherche.html">
                <div class="ligne_form">
                    <label for="">Recherche</label>
                    <input type="text" value="{$keywords}" onfocus="this.value='';"name="keywords" id="keywords" />
                    <div class="clear"></div>
                </div>
            </form>
        </li>
    </ul>
</div>
