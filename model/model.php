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
        $this->connection = $this->database::connect('localhost','project','root','');
    }
    public function getPlatforms()
    {
        $sql='SELECT platform_name FROM platform';
        $result=[];
        foreach ($this->connection->query($sql) as $row)
        {
            array_push($result,$row);
        }
        return $result;
    }
    public function getGenres()
    {
        $sql='SELECT genre_name FROM genre';
        $result=[];
        foreach ($this->connection->query($sql) as $row)
        {
            array_push($result,$row);
        }
        return $result;
    }
}
