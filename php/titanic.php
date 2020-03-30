<?php
$pageTitle = 'Titanic';
$horairesProjection = [
    '10h00 - 12h00' => true,
    '12h00 - 14h00' => false,
    '14h00 - 16h00' => true,
    '16h00 - 18h00' => false,
    '18h00 - 20h00' => false,
    '20h00 - 22h00' => false,
    '22h00 - 00h00' => false
];

include 'template/head.php';
?>
<section>
    <h2>Titanic</h2>
   <table class="schedule">
   <caption>Projections du <?php echo date('j/m/Y'); ?></caption>
        <thead>
            <tr>
                <th>Plage Horaire</th>
                <th>Projeté ?</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($horairesProjection as $creneau => $projection){
                ?>
                <tr>
                    <td><?php echo $creneau; ?></td>
                    <?php
                    if ($projection) {
                        ?>
                        <td class="is-projected">✓</td>
                        <?php
                    } else {
                        ?>
                        <td class="is-not-projected">✗</td>
                        <?php
                    }
                    ?>
                </tr>
                <?php
            }
            
            ?>
        </tbody>

   </table>

</section>
<?php
include 'template/footer.php';
