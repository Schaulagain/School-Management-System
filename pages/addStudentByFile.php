
<?php
$title="Add Students";
if(isset($_POST['submit'])){
    unset($_POST['submit']);


        $fileName=$_FILES['file']['name'];
           $fileTmpName=$_FILES['file']['tmp_name'];
           //echo $fileName;

            $fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
            $allowedType = array('csv');
            if(!in_array($fileExtension, $allowedType)){?>
                <div class = "alert alert-danger">
                    Invalid File Extension
                </div>
        <?php } else{
                    $handle= fopen($fileTmpName, 'r');
                   // $myData=fgetcsv($handle,1000,',');

                    while (($myData=fgetcsv($handle,1000,','))!=FALSE) {
                        $student_firstname=$myData[0];
                        $student_surname=$myData[1];
                        $student_dob=$myData[2];
                        $student_address=$myData[3];
                        $student_contact=$myData[4];
                        $student_gender=$myData[5];
                        $student_email=$myData[6];
                        $level=$myData[7];
                        
                        $query="INSERT INTO students(student_firstname,student_surname,student_dob,student_address,student_contact,student_gender,student_email,level)
                            VALUES(:student_firstname, 
                                :student_surname, 
                                :student_dob, 
                                :student_address, 
                                :student_contact, 
                                :student_gender,
                                :student_email,
                                :level)";

                        $valuesGiven = [
                            "student_firstname" => $student_firstname,
                            "student_surname" => $student_surname,
                            "student_dob" => $student_dob,
                            "student_email" => $student_email, 
                            "student_address" => $student_address,
                            "student_contact" => $student_contact,
                            "student_gender" => $student_gender,
                            "level" => $level
                        ];

                        $statement = $pdo->prepare($query);
                        $run = $statement->execute($valuesGiven);



    $student=new DatabaseTable('students'); 
    $login=new DatabaseTable('login_detail');   
    $id=$student->getLastInsertId();
    $login_criteria=[
        'login_email'=>$student_email,
        'login_password'=>$student_firstname,
        'user_type'=>'STUDENT',
        'user_id'=>$id
    ];
    $login->insert($login_criteria);





                        header('Location:index.php?page=student');
                        }
                        if(!$run){
                            die("error in uploading file");
                        }else{?>
                            <div class="alert alert-sucess">
                                file uploaded Successfully!!!
                                
                            </div>
                    <?php  }

                    }
                }  

    $content = loadTemplate('../templates/admin/add_student_by_file_templete.php',[]); 
?>