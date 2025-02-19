<?php
// HEAADER #
$HEADER="img/portada.png";
// navegacion #
$Inicio = "Inicio";
$servicios = "Servicios";
$productos = "Productos";
$contactos = "Contactos";
// GALERIA DE MOTOS #
$foto_bwis="img/bwis.png";
$foto_dt175="img/dt_175.png";
$foto_fz150="img/fz150.png";
$foto_mto9="img/mt09.png";
$foto_mt15="img/mt15.png";
$foto_niken="img/niken-gt.png";
$foto_nmax="img/nmax.png";
$foto_R1="img/r1.png";
$foto_traizer="img/traizer.png";
$foto_xt660="img/xt660.png";
$foto_xtz250="img/xtz250.png";
$desc_yz250="img/yz_250.png";
// descripcion de las motos #
$desc_bwis="la principal novedad de la nueva BWS FI es la incorporación de la inyección electrónica, lo que te proporciona beneficios en economía, conducción y sensación al rodar.";
$desc_dt175="La DT 175 ha sido diseñada para proporcionar un perfecto equilibrio entre los factores básicos de marcha, giro y freno.";
$desc_fz150="FZ ha gozado de excelente reputación gracias a su excelente aceleración, facilidad de manejo durante conducción en ciudad y a su diseño elegante, robusto y diferente.";
$desc_mt09="La Yamaha MT-09 es una motocicleta de calle de estilo Hyper Naked. Cuenta con un motor de tres cilindros, refrigeración líquida y un chasis de aleación fundida ligera.";
$desc_mt15="La Yamaha MT-15 es una motocicleta con un motor monocilíndrico de 155 cc, refrigerado por líquido. Tiene un diseño agresivo y futurista, con luces LED.";
$desc_niken="Esta icónica y avanzada motocicleta de Sport Touring viene completamente equipada con lo último en tecnología de control electrónico, que incluye D-MODE de 3.";
$desc_Nmax="La Nmax Connected es la solución de movilidad inteligente, tecnología para afrontar los retos de movilidad de las ciudades de hoy y del futuro.";
$desc_r3="La Yamaha R3 es una motocicleta supersport de 321 cc, con un motor de dos cilindros.";
$desc_traizer="La Yamaha Tracer 900 es una motocicleta deportiva de turismo con un motor de 3 cilindros en línea.";
$desc_xt660="Tipo de motor, Refrigeración líquida, 4-tiempos, 4-válvulas, cilindro único, SOHC. Cilindrada, 660 cc.";
$desc_xtz250="La Yamaha XTZ 250 es una motocicleta de uso todoterreno y en caminos asfaltados. Tiene un motor de 249 cm³, 4 tiempos, monocilíndrico y refrigerado por aire y aceite.";
$desc_yz250="El extraordinario motor de dos tiempos y 250 cc de la YZ250 ofrece una potencia instantánea con solo abrir el acelerador.";

// nombres de las motos #
$numbre_Bwis="Bwis";
$nombre_DT175="Dt175";
$nombre_Fz150="Fz150";
$nombre_Mt09="Mto9";
$nombre_Mt15="Mt15";
$nombre_Niken="Niken";
$nombre_Nmax="Nmax";
$nombre_R1="R1";
$nombre_Traizer="Traizer";
$nombre_Xt660="Xt660";
$nombre_Xtz250="Xtz250";
$nombre_Yz250="yz250";

$mp = array  ("sapa", "perra","zorra"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        
        <nav>
            <div class="logo">
                
                <img src="<?php echo $HEADER="img/portada.png"; ?>" alt="">
            </div>
            <ul>
                <a href="#inicio"><?php echo $Inicio="Inicio" ?></a></li>
                <a href="#servicios"><?php echo $servicios="Servicios" ?></a></li>
                <a href="#productos"><?php echo $productos="Productos" ?></a></li>
                <a href="#contacto"><?php echo $contactos="contactos"?></a></li>
            </ul>
        </nav>
    </header>
    <section>
    
    <div class="cards-grid">
        <!-- Primera tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_bwis="img/bwis.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $mp = array(1); ?></h1>
                    <p> <?php echo $desc_bwis="la principal novedad de la nueva BWS FI es la incorporación de la inyección electrónica, lo que te proporciona beneficios en economía, conducción y sensación al rodar."; ?>  </p>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_dt175="img/dt_175.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_DT175="Dt175"; ?></h1>
                    <p><?php echo $desc_dt175="La DT 175 ha sido diseñada para proporcionar un perfecto equilibrio entre los factores básicos de marcha, giro y freno."; ?></p>
                </div>
            </div>
        </div>


        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_fz150="img/fz150.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Fz150="Fz150"; ?></h1>
                    <p><?php echo $desc_fz150="FZ ha gozado de excelente reputación gracias a su excelente aceleración, facilidad de manejo durante conducción en ciudad y a su diseño elegante, robusto y diferente."; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    
    <div class="cards-grid">
        <!-- Primera tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_mto9="img/mt09.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Mt09="Mto9"; ?></h1>
                    <p><?php echo $desc_mt09="La Yamaha MT-09 es una motocicleta de calle de estilo Hyper Naked. Cuenta con un motor de tres cilindros, refrigeración líquida y un chasis de aleación fundida ligera."; ?></p>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_mt15="img/mt15.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Mt15="Mt15"; ?></h1>
                    <p><?php echo $desc_mt15="La Yamaha MT-15 es una motocicleta con un motor monocilíndrico de 155 cc, refrigerado por líquido. Tiene un diseño agresivo y futurista, con luces LED."; ?></p>
                </div>
            </div>
        </div>


        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_niken="img/niken-gt.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Niken="Niken"; ?></h1>
                    <p><?php echo $desc_niken="Esta icónica y avanzada motocicleta de Sport Touring viene completamente equipada con lo último en tecnología de control electrónico, que incluye D-MODE de 3."; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
   
    <div class="cards-grid">
        <!-- Primera tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_nmax="img/nmax.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Nmax="Nmax"; ?></h1>
                    <p><?php echo $desc_Nmax="La Nmax Connected es la solución de movilidad inteligente, tecnología para afrontar los retos de movilidad de las ciudades de hoy y del futuro."; ?></p>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_R1="img/r1.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_R1="R1"; ?></h1>
                    <p><?php echo $desc_r3="La Yamaha R3 es una motocicleta supersport de 321 cc, con un motor de dos cilindros."; ?></p>
                </div>
            </div>
        </div>


        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_traizer="img/traizer.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Traizer="Traizer"; ?></h1>
                    <p><?php echo $desc_traizer="La Yamaha Tracer 900 es una motocicleta deportiva de turismo con un motor de 3 cilindros en línea."; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
   
    <div class="cards-grid">
        <!-- Primera tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_xt660="img/xt660.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Xt660="Xt660";?></h1>
                    <p><?php echo $desc_xt660="Tipo de motor, Refrigeración líquida, 4-tiempos, 4-válvulas, cilindro único, SOHC. Cilindrada, 660 cc."; ?></p>
                </div>
            </div>
        </div>

        <!-- Segunda tarjeta -->
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $foto_xtz250="img/xtz250.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo  $nombre_Xtz250="Xtz250";?></h1>
                    <p><?php echo $desc_xtz250="La Yamaha XTZ 250 es una motocicleta de uso todoterreno y en caminos asfaltados. Tiene un motor de 249 cm³, 4 tiempos, monocilíndrico y refrigerado por aire y aceite."; ?></p>
                </div>
            </div>
        </div>


        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front" style="background-image: url(<?php echo $desc_yz250="img/yz_250.png"; ?>);"></div>
                <div class="flip-card-back">
                    <h1><?php echo $nombre_Yz250="yz250"; ?></h1>
                    <p><?php echo $desc_yz250="El extraordinario motor de dos tiempos y 250 cc de la YZ250 ofrece una potencia instantánea con solo abrir el acelerador."; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


        



        
        
    
    
</body>
</html>