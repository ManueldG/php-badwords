<!--/*
esercizio di oggi: PHP Badwords nome cartella / repo: php-badwords Ricordate di creare e mantenere la cartella di esercizio nella cartella htdocs di MAMP DESCRIZIONE: Creare una variabile con assegnato un testo per popolare un paragrafo. Visualizzare a schermo il paragrafo. Visualizzare a schermo la lunghezza di testo del paragrafo. Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *. Stampare a schermo il paragrafo con il testo censurato.

http://casaalmada.hostinggratis.it/PHP/php_badwords/index.php

Visualizzare a schermo la lunghezza di testo del paragrafo.
Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
Stampare a schermo il paragrafo con il testo censurato.
*/-->
<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="http://casaalmada.hostinggratis.it/doc/css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <img src="img/lamp_stack.jpg">
    <div class="input">
        <form action="index.php" target="_self" method="post">
            <input type="text" name="censura" id="read">
        </form>
    </div>

    <?
    $paragraph = <<<EOF
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae libero eu turpis mollis vestibulum id et nisl. Etiam nec egestas arcu. Suspendisse a cursus mauris. Aliquam interdum massa convallis diam rutrum semper. Ut dictum sed mi lobortis porttitor. Donec ultrices sapien at mollis malesuada. Nulla auctor mauris id porta lobortis. Cras ac malesuada eros, sed molestie dui. Vivamus euismod augue efficitur rutrum dictum. Phasellus leo libero, consequat non sapien ac, finibus varius nulla. Nam finibus tempor ex a placerat. Suspendisse eu mattis mauris.

    Vivamus ac elit vitae enim tempus semper. Fusce molestie sapien pellentesque neque egestas tristique. Integer quis dignissim sapien. Praesent egestas, dolor vel pellentesque elementum, augue lacus sodales libero, egestas interdum nisi risus in massa. Vivamus libero lectus, fringilla fringilla purus sit amet, pharetra facilisis ligula. Cras commodo mattis nisl, a ullamcorper tellus tincidunt ac. Phasellus vitae vehicula enim, viverra malesuada sem. Curabitur suscipit, sem eu feugiat tincidunt, nunc nunc sollicitudin diam, quis imperdiet libero quam id massa. Praesent elementum volutpat nunc non vulputate. Pellentesque vitae aliquam tortor, et bibendum ex. Mauris luctus justo eget erat venenatis, non vehicula lectus tincidunt. Mauris elit diam, bibendum eget lectus sit amet, condimentum pharetra quam. Pellentesque ac sem odio. Phasellus aliquet arcu tortor, a aliquet nisi fringilla id.

    Fusce pellentesque sem sed turpis semper efficitur. Vivamus at tempor tellus. Suspendisse suscipit vel lectus sed mattis. Praesent dictum lorem nisl, ut consequat libero pellentesque ac. Duis in diam ac turpis ultrices volutpat non eu arcu. Phasellus sit amet tempor eros, ut eleifend nisl. Donec luctus, dui ut rutrum laoreet, mauris enim luctus odio, porta vulputate magna elit ac turpis. Nunc consequat, sapien et ultrices faucibus, ante erat maximus nisi, vel posuere ante massa in velit. Praesent commodo tortor in eros aliquet, vel dictum orci semper.

    Fusce pretium odio nibh, et laoreet ligula hendrerit a. Nulla rhoncus ullamcorper mi, in malesuada enim blandit vel. Quisque auctor in tellus ut imperdiet. Pellentesque iaculis, mi sed finibus laoreet, sapien velit rhoncus diam, id bibendum turpis velit vitae lacus. Etiam dolor est, ultricies at faucibus ac, sagittis sed ipsum. Nunc at accumsan lacus. Duis lectus tortor, viverra sit amet nisi ut, tincidunt facilisis mauris. Pellentesque vestibulum nibh sit amet dapibus semper. Nulla nec dapibus tortor. Vestibulum eu urna quis risus volutpat faucibus. Mauris euismod sapien vel diam ultricies efficitur. Mauris blandit aliquet enim, id vulputate lacus vulputate id.

    Morbi ac nisi eget elit tristique luctus nec vitae est. Proin tempus lorem ipsum, in euismod dui pulvinar sit amet. Cras ullamcorper nulla sit amet turpis tincidunt imperdiet. Aenean nibh eros, vehicula a enim quis, gravida luctus odio. Vivamus eget placerat turpis, a tincidunt magna. Aenean hendrerit, urna non interdum facilisis, metus diam facilisis turpis, sed pellentesque leo ipsum vel lacus. Donec scelerisque ultrices turpis maximus sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum luctus vestibulum sem, vel tristique tellus. Phasellus vulputate luctus molestie. Vivamus tincidunt velit nunc, vel molestie libero ornare quis. Etiam interdum imperdiet enim eget iaculis. Praesent ac enim imperdiet, laoreet mi a, ornare justo.

    EOF;

    echo ("<p>" . $paragraph . "</p>");

    echo ("\n<p>Lunghezza:" . strlen($paragraph) . "</p>");

    echo ("<!--".var_dump($_POST)."-->");

    $censura = strip_tags($_POST['censura']);

    echo str_ireplace($censura, '***', $paragraph,);
    ?>

</body>

</html>