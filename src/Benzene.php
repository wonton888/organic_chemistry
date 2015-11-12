<?php

    class Benzene
    {
        private $id;
        private $name;

        function __construct($name_id, $new_id = NULL)
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
    }

 ?>
