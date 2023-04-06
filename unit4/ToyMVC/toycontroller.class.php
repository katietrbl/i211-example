<?php
/**
 *Author: Katie Stinson
 *Date: 3/23/23
 *File: toycontroller.class.php
 *Description: create controller toy
 */

class ToyController
{
    private $toy_model;

    //construct
    public function __construct()
    {
        //create objecy of the ToyModel class
        $this->toy_model = new ToyModel();
    }

    //list all toys
    public function all(){
        //retrieve all toys and store inside array
        $toys = $this->toy_model->getToys();
        //if there are no toys to display, display an error
        if (!$toys) {
            header("Location: index.php?action=error&message= No Toy Found.");
            exit();
        }
            //create an object of the toyview class
            $view = new ToyView();
            //display all toys
            $view->display($toys);
        }

        //display An error message
        public
        function error($message)
        {
            //create error object from error class
            $error = new ToyError();

            //display error page
            $error->display($message);
        }
    }

