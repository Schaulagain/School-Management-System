<?php
$title="FAQs";
$modules = new DatabaseTable('faqs');
$fetch=$modules->findAll();

if(isset($_POST['ans'])){
	unset($_POST['ans']);
		$criteria = $_POST;
		$criteria =[
		'faq_id'=>$_POST['faq_id'],
		'faq_ans'=>$_POST['faq_ans']
	];
	$add=$modules->save($criteria,'faq_id');
	header('Location:index.php?page=faq');
}



$content = loadTemplate('../templates/admin/faq_templete.php' , ['stmt' =>$fetch]);

?>