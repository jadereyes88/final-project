<?php

namespace app\models;
use app\core\Model;

class Projects

{
    use Model;

    protected $table = 'projects';

    public function findAllProjects() {
        return $this->findAll();
    }
}

