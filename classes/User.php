<?php

/**
 * Avem o clasa pt user (singular, pt ca in aplicatia de fata e unul singur :) )
 */
class User
{
    public $username;

    /**
     * Avem o metoda care o sa returneze userul din baza de date.
     *
     * @param $db - variabila pt baza de date
     * @return  mixed -o sa returneze un array asociativ ( de unde o sa preluam username-ul)
     */
    public static function gerUser($db) {
        // o variabila prin unde vom avea codul sql
        $sql = "SELECT * FROM users";

        // facem un query in baza de date
        $results = $db->query($sql);

        // returnam rezultatele obtinute (sau rezultatul obitnut in cazul de fata)
        // daca erau mai multi useri trebuie sa folosim metoda fetchAll();
        return $results->fetch(PDO::FETCH_ASSOC);
    }
}