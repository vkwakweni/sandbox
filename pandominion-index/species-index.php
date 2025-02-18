<?php

include 'database.php';

$db = new Database();

$table = "species";
$data = $db->fetchAllFromTable($table);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @import url("species-index.css");
            @import url("radial-graph.css");
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet1" href="https://fonts.googleapis.com/css2?family=Carrois+Gothic+SC&display=swap">
        <title>Pandominion Species Index</title>
    </head>

    <h1 align="center">The Pandominion Species Index</h1>
    <h2 align="center">We all have to <a href="/" color="pink">start</a> somehwere:<br>The evolutionary landmarks for species of the Pandominion</h2>
    <!-- SECTION 1 -->
    <section class =card-list>
        <?php
        if (!empty($data)) {
            for ($i = 0; $i < 5; $i++) {
                $row = $data[$i];
                ?>
                <article class="card">
                    <header class="card-header">
                        <h2 class="card-header">SPECIES</h2>
                        <h3><?= $row["common_name"] ?></h3>
                    </header>

                    <img src="./species/<?= $row["common_name"] ?>.jpg" height=60%>

                    <div class="card-content">
                        <div class="middle">
                            <div class="radar-chart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200">
                                    <g stroke="#dce5eb">
                                        <!-- The Spokes of the Pentagon -->
                                        <path d="M 100 100 L 100.0 0.0"/>
                                        <path d="M 100 100 L 195.1 69.1"/>
                                        <path d="M 100 100 L 158.8 180.9"/>
                                        <path d="M 100 100 L 41.2 180.9"/>
                                        <path d="M 100 100 L 4.9 69.1"/>
                                    </g>
                                    <g stroke="#dce5eb" fill = "none">
                                        <!-- The pentagons -->
                                        <path d="M 100.0 0.0 L 195.1 69.1 L 158.8 180.9 L 41.2 180.9 L 4.9 69.1 L 100.0 0.0"/>
                                        <!-- <path d="M 100.0 20.0 L 176.1 75.3 L 147.0 164.7 L 53.0 164.7 L 23.9 75.3 L 100.0 20.0"/> -->
                                        <path d="M 100.0 40.0 L 157.1 81.5 L 135.3 148.5 L 64.7 148.5 L 42.9 81.5 L 100.0 40.0"/>
                                        <!-- <path d="M 100.0 60.0 L 138.0 87.6 L 123.5 132.4 L 76.5 132.4 L 62.0 87.6 L 100.0 60.0"/> -->
                                        <path d="M 100.0 80.0 L 119.0 93.8 L 111.8 116.2 L 88.2 116.2 L 81.0 93.8 L 100.0 80.0"/>
                                    </g>
                                    <path d="M <?=$row["cx1"]?> <?=$row["cy1"]?> L
                                                <?=$row["cx2"]?> <?=$row["cy2"]?> L
                                                <?=$row["cx3"]?> <?=$row["cy3"]?> L
                                                <?=$row["cx4"]?> <?=$row["cy4"]?> L
                                                <?=$row["cx5"]?> <?=$row["cy5"]?> L
                                                <?=$row["cx1"]?> <?=$row["cy1"]?> L"/>
                                    <g fill="#f66868">
                                        <circle cx="<?=$row["cx1"]?>" cy="<?=$row["cy1"]?>" r="3"/>
                                        <circle cx="<?=$row["cx2"]?>" cy="<?=$row["cy2"]?>" r="3"/>
                                        <circle cx="<?=$row["cx3"]?>" cy="<?=$row["cy3"]?>" r="3"/>
                                        <circle cx="<?=$row["cx4"]?>" cy="<?=$row["cy4"]?>" r="3"/>
                                        <circle cx="<?=$row["cx5"]?>" cy="<?=$row["cy5"]?>" r="3"/>
                                    </g>
                                </svg>
                                <dl>
                                    <div>
                                        <dt>Speed</dt> <!-- The label-->
                                        <dd></dd> <!-- the value -->
                                    </div>
                                    <div>
                                        <dt>Metabolism</dt> <!-- The label-->
                                        <dd></dd> <!-- the value -->
                                    </div>
                                    <div>
                                        <dt>Aggression</dt> <!-- The label-->
                                        <dd></dd> <!-- the value -->
                                    </div>
                                    <div>
                                        <dt>Hairiness</dt> <!-- The label-->
                                        <dd></dd> <!-- the value -->
                                    </div>
                                    <div>
                                        <dt>Motor Skills</dt> <!-- The label-->
                                        <dd></dd> <!-- the value -->
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <p>Name: <?= $row["family"] ?>
                        <br>Habitat: <?= $row["habitat"] ?>
                        <br>Dominant Trait: <?= $row["dominant_trait"] ?></p>
                    </div>
                </article>
           <?php  } ?>
        <?php } ?>
    </section>


    <!-- SECTION 2 -->
    <section class =card-list>
        <?php
        if (!empty($data)) {
            for ($i = 5; $i < 10; $i++) { // should just be for first 5
                $row = $data[$i];
                ?>
                <article class="card">
                    <header class="card-header">
                        <h2>Species</h2>
                        <h3><?= $row["common_name"] ?></h3>
                    </header>

                    <img src="./species/<?= $row["common_name"] ?>.jpg" height=60%>

                    <div class="card-content">
                        <div class="middle">
                        <div class="radar-chart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200">
                                    <g stroke="#dce5eb">
                                        <!-- The Spokes of the Pentagon -->
                                        <path d="M 100 100 L 100.0 0.0"/>
                                        <path d="M 100 100 L 195.1 69.1"/>
                                        <path d="M 100 100 L 158.8 180.9"/>
                                        <path d="M 100 100 L 41.2 180.9"/>
                                        <path d="M 100 100 L 4.9 69.1"/>
                                    </g>
                                    <g stroke="#dce5eb" fill = "none">
                                        <!-- The pentagons -->
                                        <path d="M 100.0 0.0 L 195.1 69.1 L 158.8 180.9 L 41.2 180.9 L 4.9 69.1 L 100.0 0.0"/>
                                        <path d="M 100.0 40.0 L 157.1 81.5 L 135.3 148.5 L 64.7 148.5 L 42.9 81.5 L 100.0 40.0"/>
                                        <path d="M 100.0 80.0 L 119.0 93.8 L 111.8 116.2 L 88.2 116.2 L 81.0 93.8 L 100.0 80.0"/>
                                    </g>
                                    <path d="M <?=$row["cx1"]?> <?=$row["cy1"]?> L
                                                <?=$row["cx2"]?> <?=$row["cy2"]?> L
                                                <?=$row["cx3"]?> <?=$row["cy3"]?> L
                                                <?=$row["cx4"]?> <?=$row["cy4"]?> L
                                                <?=$row["cx5"]?> <?=$row["cy5"]?> L
                                                <?=$row["cx1"]?> <?=$row["cy1"]?> L"/>
                                    <g fill="#f66868">
                                        <circle cx="<?=$row["cx1"]?>" cy="<?=$row["cy1"]?>" r="3"/>
                                        <circle cx="<?=$row["cx2"]?>" cy="<?=$row["cy2"]?>" r="3"/>
                                        <circle cx="<?=$row["cx3"]?>" cy="<?=$row["cy3"]?>" r="3"/>
                                        <circle cx="<?=$row["cx4"]?>" cy="<?=$row["cy4"]?>" r="3"/>
                                        <circle cx="<?=$row["cx5"]?>" cy="<?=$row["cy5"]?>" r="3"/>
                                    </g>
                                </svg>
                                <dl>
                                    <div>
                                        <dt>Speed</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Metabolism</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Aggression</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Hairiness</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Motor Skills</dt>
                                        <dd></dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <p>Name: <?= $row["family"] ?>
                        <br>Habitat: <?= $row["habitat"] ?>
                        <br>Dominant Trait: <?= $row["dominant_trait"] ?></p>
                    </div>
                </article>
           <?php  } ?>
        <?php } ?>
    </section>


    <!-- SECTION 2 -->
    <section class =card-list>
        <?php
        if (!empty($data)) {
            for ($i = 10; $i < 15; $i++) { // should just be for first 5
                $row = $data[$i];
                ?>
                <article class="card">
                    <header class="card-header">
                        <h2>Species</h2>
                        <h3><?= $row["common_name"] ?></h3>
                    </header>

                    <img src="./species/<?= $row["common_name"] ?>.jpg" height=60%>

                    <div class="card-content">
                        <div class="middle">
                        <div class="radar-chart">
                                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 200 200">
                                    <g stroke="#dce5eb">
                                        <!-- The Spokes of the Pentagon -->
                                        <path d="M 100 100 L 100.0 0.0"/>
                                        <path d="M 100 100 L 195.1 69.1"/>
                                        <path d="M 100 100 L 158.8 180.9"/>
                                        <path d="M 100 100 L 41.2 180.9"/>
                                        <path d="M 100 100 L 4.9 69.1"/>
                                    </g>
                                    <g stroke="#dce5eb" fill = "none">
                                        <!-- The pentagons -->
                                        <path d="M 100.0 0.0 L 195.1 69.1 L 158.8 180.9 L 41.2 180.9 L 4.9 69.1 L 100.0 0.0"/>
                                        <path d="M 100.0 40.0 L 157.1 81.5 L 135.3 148.5 L 64.7 148.5 L 42.9 81.5 L 100.0 40.0"/>
                                        <path d="M 100.0 80.0 L 119.0 93.8 L 111.8 116.2 L 88.2 116.2 L 81.0 93.8 L 100.0 80.0"/>
                                    </g>
                                    <path d="M <?=$row["cx1"]?> <?=$row["cy1"]?> L
                                                <?=$row["cx2"]?> <?=$row["cy2"]?> L
                                                <?=$row["cx3"]?> <?=$row["cy3"]?> L
                                                <?=$row["cx4"]?> <?=$row["cy4"]?> L
                                                <?=$row["cx5"]?> <?=$row["cy5"]?> L
                                                <?=$row["cx1"]?> <?=$row["cy1"]?> L"/>
                                    <g fill="#f66868">
                                        <circle cx="<?=$row["cx1"]?>" cy="<?=$row["cy1"]?>" r="3"/>
                                        <circle cx="<?=$row["cx2"]?>" cy="<?=$row["cy2"]?>" r="3"/>
                                        <circle cx="<?=$row["cx3"]?>" cy="<?=$row["cy3"]?>" r="3"/>
                                        <circle cx="<?=$row["cx4"]?>" cy="<?=$row["cy4"]?>" r="3"/>
                                        <circle cx="<?=$row["cx5"]?>" cy="<?=$row["cy5"]?>" r="3"/>
                                    </g>
                                </svg>
                                <dl>
                                    <div>
                                        <dt>Speed</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Metabolism</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Aggression</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Hairiness</dt>
                                        <dd></dd>
                                    </div>
                                    <div>
                                        <dt>Motor Skills</dt>
                                        <dd></dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                        <p>Name: <?= $row["family"] ?>
                        <br>Habitat: <?= $row["habitat"] ?>
                        <br>Dominant Trait: <?= $row["dominant_trait"] ?></p>
                    </div>
                </article>
           <?php  } ?>
        <?php } ?>
    </section>

</html>