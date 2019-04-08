<?php
include 'view/view.php';
 
class CytatyView extends View
{
	public function all() 
	{
        $art=$this->loadModel('cytaty');
        $this->set('cytaty', $art->getAll());
        $this->render('allCytaty');
    }
	public function index()
	{
        $art=$this->loadModel('cytaty');
        $this->set('cytaty', $art->index());
        $this->render('indexCytaty');
    }
	public function add()
	{
        $art=$this->loadModel('cytaty');
        $this->render('addCytaty');
    }
}