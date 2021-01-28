
<?php 
$module_id = $_GET['mid'];
if(isset($_POST['submit'])){
    unset($_POST['submit']);
    $fileName=$_FILES['file']['name'];
           $fileTmpName=$_FILES['file']['tmp_name'];
            $fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
            $allowedType = array('csv');
            if(!in_array($fileExtension, $allowedType)){?>
                <div class = "alert alert-danger">
                    Invalid File Extension
                </div>
        <?php } else{

                    $handle= fopen($fileTmpName, 'r');
                    while (($myData=fgetcsv($handle,1000,','))!=FALSE) {
                        $student_id=$myData[0];
                        for ($i=1; $i < sizeof($myData); $i++) { 
                            $week = $myData[$i];
                            try {
                            $query='INSERT INTO attendences(student_id, module_id, week'.$i.') VALUES(:student_id, :module_id, :week)';
                            $valuesGiven = [
                                    "student_id" => $student_id,
                                    "module_id" => $module_id,
                                    "week" => $week
                                ];
                                $statement = $pdo->prepare($query);
                                $run = $statement->execute($valuesGiven);
                            } 
                            catch(Exception $e){
                                $query='UPDATE attendences SET  week'.$i.'= :week WHERE 
                                student_id= :student_id AND module_id=:module_id';
                                $valuesGiven = [
                                    "student_id" => $student_id,
                                    "module_id" => $module_id,
                                    "week" => $week
                                ];
                                $statement = $pdo->prepare($query);
                                $run = $statement->execute($valuesGiven);
                                }
                                 
                            }
                        }

                        if(!$run){
                            die("error in uploading file");
                        }else{?>
                            <script type="text/javascript">alert(" file uploaded Successfully!!!");</script>
                    <?php  }

                    }
                }   
?>
<?php 

        $title = 'Add Attendence'; 
        $content = loadTemplate('../templates/staff/add_attendence_template.php',[]);
?>
