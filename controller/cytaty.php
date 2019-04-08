<?php
include 'controller/controller.php';
 
class CytatyController extends Controller
{
	public function index() 
	{
        $view=$this->loadView('cytaty');
        $view->index();
    }
	public function all() 
	{
        $view=$this->loadView('cytaty');
        $view->all();
    }
	public function add() 
	{
        $view=$this->loadView('cytaty');
        $view->add();
    }
    public function insert()
	{
        $model=$this->loadModel('cytaty');
        $model->insert($_POST);
        $this->redirect('?task=cytaty&action=add');
    }
}