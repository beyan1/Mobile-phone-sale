<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURVEY</title>
</head>
<body>

    <?php
     if(isset($_GET['error'])):
    ?>
    <p  style="color: red;">
        <?php
        print $_GET['error'];
        ?>
    </p>
    <?php
    endif
    ?>

    <?php
        if(isset($_GET['sucess'])):
    ?>
    <p  style="color: green;">
        <?php
        print $_GET['sucess'];
        ?>
    </p>
    <?php
    endif
    ?>
    <div>
        <header>
            <h1>
                <u>INFOR SESSION WITH OBJECTIVITY</u>  
            </h1>
        </header>
        <div>
            <p>
                OBJECTIVITY IS PARTNERINIC WITH UNILAK TO HIRE THE GRADUATES FROM
                CAMPUS OF KIGALI PLEASE FILL THIS FORM FOR YOU TO BE CONSIDERED
            </p>
        </div>

        <form action="form.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <br>
                <div>
                    <fieldset>
                    <legend>PERSONAL INFORMATION</legend>
                    <div class="form">
                        <label for="fname">FirstName</label> <br>
                        <input type="text" name="firstname" required > <br> <br>
                        <label for="lname">LastName</label><br>
                        <input type="text" name="lastname" required> <br> <br>
                        <label for="email">Email</label><br>
                        <input type="email" name="email" required> <br> <br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" required>
                    </div>
                    <br>
                    <div>
                        <label for="date">Date of Birth</label> <br>
                        <input type="date" name="date" id="dist" required>
                    </div>
                    
                    <div>
                        <h4>YOUR GENDER</h4>
                        <input type="radio" name="gender" value="male" required>
                        <label for="gender">MALE</label>
                        <input type="radio"  name="gender" value="female" required> 
                        <label for="gender">FEMALE</label>
                    </div>
                    </fieldset>
                     <br>
                     <br>
                    <fieldset>
                        
                        <legend>PERSONAL ADDRESS</legend>    
                        <br> 
                        <div>
                            <label for="country">Country</label> <br>
                            <select name="country" id="dist">
                                <OPtion></OPtion>
                                <option value="RWANDA">RWANDA</option>
                                <option value="LIBERIA">LIBERIA</option>
                                <option value="UGANDA">UGANDA</option>
                                <option value="KENYA">KENYA</option>
                                <option value="NIGERIA">NIGERIA</option>
                                <option value="DR.CONGO">DR.CONGO</option>
                                <option value="SOMALIA">SOMALIA</option>
                                <option value="ETHIOPIA">ETHIOPIA</option>
                                <option value="GIUNEA">GIUNEA</option>
                                <option value="CONGO">CONGO</option>
                                <option value="TANZANIA">TANZANIA</option>
                                <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                                <option value="MALAWI">MALAWI</option>
                                <option value="CARBON">CARBON</option>
                                <option value="BURUDI">BURUDI</option>
                                <option value="GHANA">GHANA</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label for="district">District</label> <br> 
                            <select name="district" id="dist">
                                <option value=""></option>
                                <option value="Kicukiro">KICUKIRO</option>
                                <option value="Gasabo">GASABO</option>
                                <option value="Nyanrugenge">NYANRUGENGE</option>
                            </select> 
                        </div> 
                    </fieldset>
                    <br>
                    <br>
                    <fieldset>
                    <legend>QUALIFICATION AND EXPERIENCE</legend>
                    <h3>PLEASE SELECT MAXIMUM THREE LANGUAGES YOU MASTER</h3>
                    <div class="language">
                        <input type="checkbox" name="language[]" value="jungle">
                        <label for="jungle">JUNGLE</label><br>
                        <input type="checkbox" name="language[]" value="python">
                        <label for="python">PYTHON</label><br>
                        <input type="checkbox" name="language[]" value="CO">
                        <label for="co">CO</label><br>
                        <input type="checkbox" name="language[]" value="swift">
                        <label for="swift">SWIFT</label> 
                    </div>
                    <div>
                        <h3>UPLOAD YOUR CV</h3>
                        <input type="file" accept="application/pdf" name="cv" value="file" required> <br> <br>
                        <h2>EDUCATION LEVEL</h2>
                       <select name="education" id="dist">
                            <option value=""></option>
                           <option value="HIGH SCHOOL">HIGH SCHOOL</option>
                           <option value="BACHELOR DEGREE">BACHELOR DEGREE</option>
                           <option value="PHD">PHD</OPTion>
                       </select>
                    </div> <br>
                    <div>
                        <h3>WHICH WAS YOUR GRADUATION DATE</h3>
                        <input type="month" name="month" id="dist" required> 
                    </div>
                    
                    <div>
                        <h3>WHICH LANGUAGES YOU WANT TO MASTER IN THE FUTURE</h3>
                        <input type="checkbox" name="future_lange[]" value="NET">
                        <label for="JAVA">.NET</label> <br>
                        <input type="checkbox" name="future_lange[]" value="JAVA"> 
                        <label for="JAVA">JAVA</label> <br>
                        <input type="checkbox" name="future_lange[]" value="RUBY">
                        <label for="JAVA">RUBY ON RAILS</label><br>
                        <input type="checkbox" name="future_lange[]" value="FLUTTER">
                        <label for="JAVA">FLUTTER</label><br>
                        <input type="checkbox" name="future_lange[]" value="SWIFT">
                        <label for="JAVA">SWIFT</label>
                    </div>
                   </fieldset>
                    <br>
                    <br>
                    <fieldset>
                      <legend>CONTACT US</legend>
                      <textarea name="message" id="dist2" cols="30" rows="10"></textarea>
                   </fieldset>
               </div>
                <legend>FORM</legend>
                <br>
                <input type="submit" value="Submit">
            </fieldset>   
            <!-- <span>
                <a href="https://objectivity.com/" target="_blank">Visit our website</a>
            </span> -->
        </form>
    </div>
</body>
</html>