
 <div class="conteneur">
        <h3>LISTE D'OUVRAGE</h3>
        <table>
            <tr>
                <th>CODE</th>
                <th>TITRE</th>
                <th>DATE EDITION</th>
                <th>AUTEUR</th>
            </tr>
            <?php foreach ($ouvrage as $val):  ?>
                        <tr>
                            <th><?php echo($val["codeO"]); ?> </th>
                            <th> <?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["date_edition"]); ?></th>
                            <th><?php echo($val["auteur"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>