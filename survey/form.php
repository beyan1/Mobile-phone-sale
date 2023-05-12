<?php
$con = mysqli_connect("localhost", "root", "" , "survey");
if(!$con){
    print mysqli_error($con);
}
else{
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $useremail = $_POST['email'];
    $userpassword = md5($_POST['password']);
    $dob = $_POST['date'];
    $gender = $_POST['gender'];
    $nationality = $_POST['country'];
    $district = $_POST['district'];
    $language = $_POST['language'];
    $cv = $_FILES['cv'];
    $eduction = $_POST['education'];
    $graducationDate = $_POST['month'];
    $futurelange = $_POST['future_lange'];
    $contact = $_POST['message'];

    // print $first_name." ". $last_name." ".$useremail." ".$userpassword." ". $dob." ".$gender." ". $nationality." ".$cv['name']." ".$eduction.
    // " ".$graducationDate." ".$contact;

    // print_r($futurelange);
    // print_r($language);
    // print_r($district);
    //print($userpassword); die;

    if(empty($futurelange) && empty($language)){
        $error = "Invalid, please select at lest one of these languages";
        header("Location:index.php?error=$error");

    }

    elseif (empty($futurelange)){
        $error = "Invalid, please select atlest one of the future languages";
        header("Location:index.php?error=$error");

    }
    
    elseif (empty($language)){
        $error = "Invalid, please select at least one language that you master";
        header("Location:index.php?error=$error");

    }

    else {
        $cv_name = $cv['name'];
        // group all languages
        $lang = "";
        foreach($language as $value){
            $lang =  $lang.$value.',';
        }

        // group all future languages
        $future_lang = "";
        foreach($futurelange as $value){
            $future_lang =  $future_lang.$value.',';
        }

        $cv_file_ex = pathinfo($cv_name, PATHINFO_EXTENSION);
        $cv_file_ex_lc = strtolower($cv_file_ex);

        if($cv_file_ex == 'pdf'){
            $cv_new_name = uniqid('CV-').'.pdf';
            $cv['name'] = $cv_new_name;
            $cv_temp_dir = $cv['tmp_name'];
            $cv_new_dir = __DIR__."\cv\\".$cv['name'];
            move_uploaded_file($cv_temp_dir,$cv_new_dir);

            $insertquery = "INSERT INTO `surveytable`(`first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `country`, `district`, `language`, `cv`, `education_level`, `graduation_date`,`future_language`, `contact`) 
            VALUES ('$first_name','$last_name','$useremail','  $userpassword','$dob','$gender','$nationality','$district','$lang','$cv_new_name','$eduction','$graducationDate',' $future_lang','$contact');";
    
            if(mysqli_query($con, $insertquery)){
                $sucess = "Data sucessfully submitted";
            header("Location:index.php?sucess=$sucess");
            }else{
            $error = mysqli_error($con);
            header("Location:index.php?error=$error");
            }
        }else{
            $error = "Invalid, please upload a pdf file";
            header("Location:index.php?error=$error");
        }
        print('CV uploaded');
        die;
       
       
    }
}

?>