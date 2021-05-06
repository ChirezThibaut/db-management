<?php

function getDb()
{
    try {
        return new PDO('mysql:dbname=gebd;host=127.0.0.1', 'root', 'root');
    } catch (Exception $e) {
        echo $e;
    }
}


function getShows($db)
{
    // Préparation de la requête
    $q = $db->prepare('SELECT * FROM shows');
    // Exécution de la requête
    $q->execute();
    // Récupération des résultats dans une variable
    $data = $q->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

function getShow($database, $id)
{
    // Préparation de la requête
    $q = $database->prepare('SELECT * FROM shows WHERE id = :id');
    $q->bindParam(':id', $id);
    // Exécution de la requête
    $q->execute();
    // Récupération des résultats dans une variable
    $data = $q->fetchAll(PDO::FETCH_ASSOC);

    return $data[0];
}

function getEpisodesForShow($database, $showId)
{
    // Préparation de la requête
    $q = $database->prepare('SELECT episodes.id, episodes.title, episodes.broadcast_date, episodes.show_order FROM episodes JOIN seasons ON episodes.season_id = seasons.id JOIN shows ON seasons.show_id = shows.id WHERE shows.id = :id');
    $q->bindParam(':id', $showId);
    // Exécution de la requête
    $q->execute();
    // Récupération des résultats dans une variable
    $data = $q->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}
?>