<?php
$pdo=new PDO('mysql:dbname=csy2028c;host=localhost','root','');
function insert($table,$record)
{
	global $pdo;
	$keys=array_keys($record);
	$keysWithComma=implode(',',$keys);
	$keysWithCommaNColon=implode(', :',$keys);
	$query="INSERT INTO $table($keysWithComma) VALUES(:$keysWithCommaNColon)";
	$stmt=$pdo->prepare($query);
	$stmt->execute($record);
}

$person1 = [
'firstname'=>'pemba',
'surname'=>'sherpa',
'email'=>'pemba123@gmail.com',
'birthdate'=>'1998-10-31'
];

insert('tbl_person',$person1);
echo 'Inserted Successfully';

?>