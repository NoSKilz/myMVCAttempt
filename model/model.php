<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model
 *
 * @author NoSkilz
 */
class model 
{
    private $database,$connection;
    public function __construct($database)
    {
        $this->database = $database;
        $this->connection = $this->database->connect('localhost','project','root','');
    }
    public function getPlatforms()
    {
        return $this->database->execute_fetchall('SELECT platform_name FROM platform');
    }
    public function getGenres()
    {
        return $this->database->execute_fetchall('SELECT genre_name FROM genre');
    }
    public function getBestGames()
    {
        return $this->database->execute_fetchall('SELECT product_id,product_name,platform_name,price FROM product ORDER BY sold desc LIMIT 20 OFFSET 0');
    }
    public function getNewestGames($offset=0)
    {
        return $this->database->execute_fetchall("SELECT product_id,product_name,platform_name,price,picture,description FROM product ORDER BY uploaded desc LIMIT 8 OFFSET $offset");
    }
}
