<?php

/**
 * A l'aide de la documentation officielle de PHP.
 * 1. Retrouvez la page traitant des superglobales pour $_SERVER
 * 2. Récupérez un maximum de valeurs de ce tableau et affichez les à l'aide d'un simple echo ( il n'est pas interdit d'être intelligent, c'est un tableau associatif... )
 * 3. Uploadez ce projet sur votre serveur et testez !
 */
// TODO Votre code ici

echo "Nom du fichier : " . $_SERVER['PHP_SELF'] . "<br>";
echo "Nom du serveur : " . $_SERVER['SERVER_NAME'] . "<br>";
echo "IP du serveur : " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "IP du visiteur : " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Temps de la requête : " . $_SERVER['REQUEST_TIME'] . "<br>";
