<?php
class Errors extends Controller
{
    public function __construct($message)
    {
        parent::__construct();
        $this->view->mensaje = $message;
    }

    public function render()
    {
        $this->view->render('error/error');
    }
}
