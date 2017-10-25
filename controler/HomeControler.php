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
    private $model,$platforms,$genres,$best_games,$newest_games;
    public function __construct($model)
    {
        $this->model = $model;
        $this->platforms = $this->model->getPlatforms();
        $this->genres = $this->model->getGenres();
        $this->best_games = $this->model->getBestGames();
        $this->newest_games = $this->model->getNewestGames();
    }
    public function platforms() 
    {
        return $this->platforms;
    }
    public function genres() 
    {
        return $this->genres;
    }
    public function bestgames() 
    {
        return $this->best_games;
    }
    public function newestgames()
    {
        return $this->newest_games;
    }
}
