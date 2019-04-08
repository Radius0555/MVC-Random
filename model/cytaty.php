<?php
include 'model/model.php';
 
class CytatyModel extends Model
{
    public function getAll() 
	{
		$data = array();
		$j = 1;

		while($j<=6)
		{
			$query="select * from cytaty order by rand()*5 limit 1";
			$select=$this->pdo->query($query);
			foreach ($select as $row) 
			{
				if(!in_array($row,$data))
				{
					$data[$j] = $row;
					$j++;
				}
			}
		}
        $select->closeCursor();
 
        return $data;
    }

	public function index()
	{
		$data = array();
		$juz = array();
		$j = 1;

		while($j<=5)
		{
			$query="select * from cytaty order by rand()*5 limit 1";
			$select=$this->pdo->query($query);
			foreach ($select as $row) 
			{
				if(!in_array($row,$juz))
				{
					$juz[$j] = $row;
					$j++;
				}
			}
			return $juz;
		}
		
		if(isset($_POST['next']))
		{
			$teraz = $juz;
			$szukaj = array_search($teraz, $juz);
			$data = $juz[($szukaj+1)%count($juz)];
			return $data;
		}
        $select->closeCursor();
    }	
	public function insert() 
	{
        $ins=$this->pdo->prepare('INSERT INTO cytaty (artist, artist_info, content) VALUES (
        :artist, :artist_info, :content)');
        $ins->bindValue(':artist', $_POST['artist'], PDO::PARAM_STR);
        $ins->bindValue(':artist_info', $_POST['artist_info'], PDO::PARAM_STR);		
        $ins->bindValue(':content', $_POST['content'], PDO::PARAM_STR);
        $ins->execute();
    }
}