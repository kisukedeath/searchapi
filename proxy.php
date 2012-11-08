<?php 

$key = "AIzaSyBl0J6GiobRigbz_FFFis07o-qfgGdz1A8";


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {

    $search = urlencode($_POST['search']);
    $url = 'https://www.googleapis.com/shopping/search/v1/public/products?key=' . $key . '&country=US&q=' . $search . '&maxResults=24';

    echo file_get_contents($url);
}


?>


