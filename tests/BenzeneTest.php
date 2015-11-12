<?php
/**
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

    require_once 'src/Benzene.php';
    require_once 'src/Derivative.php';

    $server = 'mysql:host=localhost; dbname=benzene_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BenzeneTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Benzene::deleteAll();
            Derivative::deleteAll();
        }
        function test_getName()
        {
            //arrange
            $id = null;
            $name = "Halogen-Containing";
            $test_benzene = new Benzene($name, $id);
            $test_benzene->save();

            //act
            $result = $test_benzene->getName();

            //assert
            $this->assertEquals($name, $result);

        }

        function test_setName()
        {
            //arrange
            $id = null;
            $name = "Halogen-Containing";
            $test_benzene = new Benzene($name, $id);
            $test_benzene->save();
            $new_name = "Hydrocarbon Derivatives";

            //act
            $test_benzene->setName($new_name);
            $result = $test_benzen->getName();

            //assert
            $this->assertEquals($new_name, $result);


        }
    }


 ?>
