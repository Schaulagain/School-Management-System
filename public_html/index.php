<?php
session_start();
require '../functions/connect.php';
require '../databasetable/databasetable.php';
require '../functions/load_template.php';


if(isset($_POST['login'])){
		unset($_POST['login']);
		$login = new DatabaseTable('login_detail');
		$password=($_POST['password']);
		$fetch=$login->find('login_email',$_POST['email']);
		if($fetch->rowCount()>0){
			$data=$fetch->fetch();
			if($password==$data['login_password']){
				$_SESSION['sessUserId']=$data['user_id'];
				$_SESSION['logged_in']=true;
				$_SESSION['user_type']=$data['user_type'];
				if($data['user_type']=='STAFF'){
					header('Location:index.php?page=staffHome');

				}else if($data['user_type']=='STUDENT'){
					header('Location:index.php?page=studentHome');


				}else if($data['user_type']=='ADMIN'){
					header('Location:index.php?page=adminHome');


				}
			}
			else{
				echo "<script>alert('Password Not Matched!');</script>";	
			}
		}
	}
	
	if (isset($_POST['inquery'])) {
		unset($_POST['inquery']);
		$inq=new DatabaseTable('faqs');
		$criteria = $_POST;
		$criteria =[
		'faq_id'=>$_POST['faq_id'],
		'faq_ques'=>$_POST['faq_ques']
	];
	$add=$inq->save($criteria,'faq_id');
	header('Location:index.php?page=log');

	}		


if(isset($_GET['page']))
{
	require '../pages/'.$_GET['page'].'.php';
}
else{

	require '../pages/log.php';
}
	$tempVars=[
	'title'=>$title,
	'content'=>$content
];

$html=loadTemplate('../templates/admin/layout.php',$tempVars);
echo $html;



?>