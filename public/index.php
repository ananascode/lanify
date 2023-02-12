<?php
//siistitään polku urlin alusta ja mahdolliset parametrit urlin lopuksi
//siistimisen jälkeen osoite /~aastakho/lanify/tapahtuma?id=1 on lyhentynyt muotoon /tapahtuma
$request = str_replace('/~aastakho/lanify', '',$_SERVER['REQUEST_URI']);
$request = strtok($request, '?');

//selvitetään mitä sivua oon kutsuttu ja suoritetaan sivua vastaava käsittelijä
if ($request === '/' || $request === '/tapahtumat') {
    echo '<h1>Kaikki tapahtumat</h1>';
}else if ($request === '/tapahtuma') {
    echo '<h1>Yksittäisen tapahtuman tiedot</h1>';
}else {
    echo '<h1>Pyydettyä sivua ei löytynyt :(</h1>';
}
?>