<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeControler
 *
 * @author NoSkilz
 */
class HomeControler 
{
    private $model,$platforms,$genres;
    public function __construct($model)
    {
        $this->model = $model;
    }
    public function defaults()
    {
        $this->platforms = $this->model->getPlatforms();
        $this->genres = $this->model->getGenres();
    }
    public function platforms() 
    {
        return $this->platforms;
    }
    public function genres() 
    {
        return $this->genres;
    }
}
