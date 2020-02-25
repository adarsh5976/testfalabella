<?php
/**
 * Created by Ad
 */

//run this page

include "CalcForm.php";
include "Writer.php";
include "Result.php";
class Main
{
    public  function executeChallenge(){

        for($i =1; $i <=100;$i++)
        {
            $calcForm = new CalcForm();
            $result = new Result();
            $result -> number = $i;
            $result -> remainder3  = $calcForm->calcRemainder($i,3);
            $result -> remainder5  = $calcForm->calcRemainder($i,5);
            $write = new Writer();
            $write->writeAnswer($result);


        }
    }
	

}
$instance = new Main();
$instance->executeChallenge();
?>
