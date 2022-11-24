
 <div class="conteneur">
        <h3>LISTE DES PRETS</h3>
        <table>
            <tr>
                <th>NOM ADHERENT</th>
                <th>CODE</th>
                <th>TITRE</th>
                <th>AUTEUR</th>
                <th>DATE RETOUR PREVU</th>
                <th>DATE RETOUR REEL</th>
                <th>STATUS</th>
            </tr>
            <?php foreach ($pret as $val):  ?>
                        <tr>
                            <th><?php echo($val["nom_adherent"]); ?> </th>
                            <th> <?php echo($val["codeEx"]); ?></th>
                            <th><?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["auteur"]); ?></th>
                            <th><?php echo($val["date_retour_prevu"]); ?></th>
                            <th><?php echo($val["date_retour_reel"]); ?></th>
                            <th><?php echo($val["status"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>