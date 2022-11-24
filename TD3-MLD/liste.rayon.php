
 <div class="conteneur">
        <h3>LISTE DES PRETS</h3>
        <table>
            <tr>
                <th>CODE</th>
                <th>NOM</th>
            </tr>
            <?php foreach ($rayon as $val):  ?>
                        <tr>
                            <th><?php echo($val["codeR"]); ?> </th>
                            <th> <?php echo($val["nom_rayon"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>