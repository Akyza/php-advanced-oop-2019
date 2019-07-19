<html lang="fr">

    <table border="1">
        <tr><th>Nom</th><th>Groupe</th></tr>
        <?php foreach($tabFinale as $value){
            echo '<tr><td>'.$value["Musiciens"].'</td><td>'.$value["Groupes"].'</td></tr>';
        } ?>
    </table>
</html>