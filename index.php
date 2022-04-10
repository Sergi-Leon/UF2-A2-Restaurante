<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante ASIX</title>
    <link rel="stylesheet" href="./css/styles.css">

</head>
<body>
    <?php
    if (file_exists('./xml/menu.xml')) {
        $menu=simplexml_load_file('./xml/menu.xml');
    } else {
        echo "Error abriendo menu.xml";
    }
    ?>
    <h1 class="centrarTexto">Restaurante ASIX</h1>
    <div class="row">
        <!-- Caja superior izquierda del XML de las pizzas -->
        <div class="arriba-izq">
            <h2 class="centrarTexto"><b>PIZZA</b></h2>
            <?php
            foreach ($menu -> platos as $platos ) {
                if ($platos['tipo']) {
                    switch ($platos['tipo']) {
                        case 'Pizza':
                            echo '<p class="nombrecomida">'.$platos -> nombre.' '.$platos -> precio.'</p>';
                            foreach($platos->caracteristicas->item as $item){
                                if($item=="Vegano"){
                                    echo'<img class="icono" src= "./icons/vegano.svg">';
                                }
                                if($item=="Carne"){
                                    echo'<img class="icono" src= "./icons/carne.svg">';
                                }
                                if($item=="Pescado"){
                                    echo'<img class="icono" src= "./icons/pescado.svg">';
                                }
                            } 
                            echo '<p class="descripcion">'.$platos->descripcion.$platos->calorias."</p>";
                            break;
                        /* default:
                        echo 'Lo escribiste mal'; */
                    }
                }
            }
            ?>
        </div>
        <!-- Caja superior derecha del XML de las paellas -->
        <div class="arriba-dere">
            <h2 class="centrarTexto"><b>PAELLA</b></h2>
            <?php
            foreach ($menu -> platos as $platos ) {
                if ($platos['tipo']) {
                    switch ($platos['tipo']) {
                        case 'Paella':
                            echo '<p class="nombrecomida">'.$platos -> nombre.' '.$platos -> precio.'</p>';
                            foreach($platos->caracteristicas->item as $item){
                                if($item=="Vegano"){
                                    echo'<img class="icono" src= "./icons/vegano.svg">';
                                }
                                if($item=="Carne"){
                                    echo'<img class="icono" src= "./icons/carne.svg">';
                                }
                                if($item=="Pescado"){
                                    echo'<img class="icono" src= "./icons/pescado.svg">';
                                }
                            } 
                            echo '<p class="descripcion">'.$platos->descripcion.$platos->calorias."</p>";
                            break;
                        /* default:
                        echo 'Lo escribiste mal'; */
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <!-- Caja inferior izquierda del XML de las carnes -->
        <div class="abajo-izq">
            <h2 class="centrarTexto"><b>CARNE</b></h2>
            <?php
            foreach ($menu -> platos as $platos ) {
                if ($platos['tipo']) {
                    switch ($platos['tipo']) {
                        case 'Carne':
                            echo '<p class="nombrecomida">'.$platos -> nombre.' '.$platos -> precio.'</p>';
                            foreach($platos->caracteristicas->item as $item){
                                if($item=="Vegano"){
                                    echo'<img class="icono" src= "./icons/vegano.svg">';
                                }
                                if($item=="Carne"){
                                    echo'<img class="icono" src= "./icons/carne.svg">';
                                }
                                if($item=="Pescado"){
                                    echo'<img class="icono" src= "./icons/pescado.svg">';
                                }
                            }
                            echo '<p class="descripcion">'.$platos->descripcion.$platos->calorias."</p>";
                            break;
                            break;
                        /* default:
                        echo 'Lo escribiste mal'; */
                    }
                }
            }
            ?>
        </div>
        <div class="abajo-dere">
            <h2 class="centrarTexto"><b>PESCADO</b></h2>
            <?php
            foreach ($menu -> platos as $platos ) {
                if ($platos['tipo']) {
                    switch ($platos['tipo']) {
                        case 'Pescado':
                            echo '<p class="nombrecomida">'.$platos -> nombre.' '.$platos -> precio.'</p>';
                            foreach($platos->caracteristicas->item as $item){
                                if($item=="Vegano"){
                                    echo'<img class="icono" src= "./icons/vegano.svg">';
                                }
                                if($item=="Carne"){
                                    echo'<img class="icono" src= "./icons/carne.svg">';
                                }
                                if($item=="Pescado"){
                                    echo'<img class="icono" src= "./icons/pescado.svg">';
                                }
                            }
                            echo '<p class="descripcion">'.$platos->descripcion.$platos->calorias."</p>";
                            break;
                        /* default:
                        echo 'Lo escribiste mal'; */
                    }
                }
            }
            ?>
        </div>
    </div>
</body>
</html>