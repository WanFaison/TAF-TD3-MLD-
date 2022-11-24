
 <div class="conteneur">
        <h3>LISTE DEMANDE</h3>
        <table>
            <tr>
                <th>CODE</th>
                <th>TITRE</th>
                <th>NOM ADHERENT</th>
                <th>AUTEUR</th>
                <th>DATE</th>
                <th>STATUS</th>
            </tr>
            <?php foreach ($demande as $val):  ?>
                        <tr>
                            <th><?php echo($val["codeO"]); ?> </th>
                            <th> <?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["nom_adherent"]); ?></th>
                            <th><?php echo($val["auteur"]); ?></th>
                            <th><?php echo($val["date"]); ?></th>
                            <th><?php echo($val["status"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>