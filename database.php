<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author NoSkilz
 */
class database 
{
    private $connection;
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ORACLE_NULLS => PDO::NULL_NATURAL,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
    public function connect($host, $database, $user, $pass="") 
    {
        try
        {
            if (!isset($this->connection)) 
            {
                $this->connection=new PDO("mysql:host=$host;dbname=$database",$user,$pass,$this->options);
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $this->connection;
    }
    public function execute_query($sql, $params = []) 
    {
        $query = $this->connection->prepare($sql);
        $query->execute($params);
        return $query;
    }
    public function execute_fetchall($sql, $params = []) 
    {
        $query = $this->connection->prepare($sql);
        $query->execute($params);
        $result = $query->fetchAll();
        return $result;
    }
}