<?php

namespace app\controllers;

use app\models\Projects;

class MainController
{
    public function homepage()
    {
        include '../public/assets/views/main/homepage.php';
        // or use $this->view('../public/assets/views/main/homepage.php', true);
    }

    public function projects()
    {
        $projectsModel = new Projects();
        $projects = $projectsModel->findAllProjects();
        echo json_encode($projects);
        exit();
    }

    public function contact()
    {
        include '../public/assets/views/main/contacts.php';
        
    }

    public function notFound()
    {
        include '../public/assets/views/main/404.php';
        // make a 404.php
    }
}
