
 <div class="conteneur">
        <h3>LISTE D'OUVRAGE</h3>
        <table>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFESSION</th>
                <th>NBRE OUVRAGE</th>
            </tr>
            <?php foreach ($auteur as $val):  ?>
                        <tr>
                            <th><?php echo($val["nom_auteur"]); ?> </th>
                            <th> <?php echo($val["prenom_auteur"]); ?></th>
                            <th><?php echo($val["profession"]); ?></th>
                            <th><?php echo($val["nbre_ouvrage"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>