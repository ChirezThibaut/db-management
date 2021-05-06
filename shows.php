<?php

require_once('./db/index.php');

function listAll()
{
    $db = getDb();

    $shows = getShows($db);

    echo '<table class="table">';

    foreach ($shows as $index => $row) {
        $str = '<tr>';
        $str .= '<td>'.$row['id'].'</td>';
        $str .= '<td>'.$row['title'].'</td>';
        $str .= '<td>'.$row['start_date'].'</td>';
        $str .= '<td>'.$row['end_date'].'</td>';
        $str .= '<td>'.$row['status'].'</td>';
        $str .='</tr>';
        echo $str;
    }

    echo '</table>';
}

function createForm()
{

}

function editForm($id)
{

}

function details($id)
{

}