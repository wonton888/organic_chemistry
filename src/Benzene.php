<?php

    class Benzene
    {
        private $id;
        private $name;

        function __construct($new_name, $new_id = NULL)
        {
            $this->new = $new_name;
            $this->id = $new_id;
        }

        function getId()
        {
            return $this->id;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO benzenes (name) VALUES ('{$this->getName()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll()
        {
            $returned_benzenes = $GLOBALS['DB']->query("SELECT * FROM benzenes");
            $benzenes = array();

            foreach($returned_benzenes as $benzene){
                $id = $benzene['id'];
                $name = $benzene['name'];
                $new_benzene = new Benzene($name, $id);
                array_push($benzenes, $new_benzene);
            }
        }
    }

 ?>
