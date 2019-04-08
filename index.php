<?php

if($_GET['task']=='cytaty' && $_GET['action']=='all') 
{
   include 'controller/cytaty.php';
   $ob = new CytatyController();
   $ob->all();
}
else if($_GET['task']=='cytaty' && $_GET['action']=='add') 
{
   include 'controller/cytaty.php';
   $ob = new CytatyController();
   $ob->add();
}
else if($_GET['task']=='cytaty' && $_GET['action']=='insert') 
{
   include 'controller/cytaty.php';
   $ob = new CytatyController();
   $ob->insert();
}
else
{
   include 'controller/cytaty.php';
   $ob = new CytatyController();
   $ob->index();	
}