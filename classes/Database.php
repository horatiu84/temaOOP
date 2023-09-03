<?php

/**
 * Avem o clasa care se va ocupa de conectia cu baza de date
 */
class Database
{
    /**
     * Avem o metoda care va face conectia cu databaza
     * @return PDO|void
     */
    public function getConnection() {
        // similar cu php procedural, avem nevoie de cele 4 variabila pt a putea face conectia
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db_name = 'test';

        // avem nevoie de o variabila dsn ( data source name) care contine informatii necesare pt conectie
        // si anume host, numele db si setul de caractere folosit
        $dsn = 'mysql:host=' .$db_host . ';dbname='.$db_name.';charset=utf8';

        // returnam un obiect de tip PDO ( PHP Data object) care va lua ca parametrii variabilele pt dsn, numele user si parola.
        return new PDO($dsn,$db_user,$db_pass);

    }
}

