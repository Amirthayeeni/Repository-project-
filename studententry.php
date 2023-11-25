<?php
include 'dbstu_conn.php'
?>
<html>
    <head>
        <title>student personal form</title>
    <link rel="stylesheet" href="studententrystyle.css">
</head>
<body>
  <div class="container">
    <header>REGISTRATION</header>
    <form method="POST" action="student_infor.php">
   
   
   
   
        <div class="for first">
            <div class="details">
                <span class="title">Personal Details</span>
               <!-- <div class="fields">
                    <div class="input-field">
                        <label for="">Full Name</label>
                        <input type="text" placeholder="Enter your name" name="stu_name "required/>
                    </div>-->
                    <div class="fields">
                    <div class="input-field">
                        <label for="">name</label>
                        <input type="text" placeholder="Enter your Name"  name="name" required/>
                    </div>
                   
                   

                    <div class="input-field">
                        <label for="">Date of birth</label>
                        <input type="date" placeholder="Enter your name" name="dob" required/>
                    </div>

                    <div class="input-field">
                        <label for="">Email </label>
                       
                        <input type="email" placeholder="Enter your email" name="email" required/>  
                    </div>

                   

                    <div class="input-field">
                        <label for="">Gender</label>
                        <select  name="gender">
                            <option value="" disabled selected>----select---</option>
                           
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                           
                        </select>
                     
                    </div>
            </div>
            </div>
            <div class="Academic Details">
                <span class="title">Academic Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="">Roll Number </label>
                        <input type="text" placeholder="Enter your Roll Number"  name="rollno" required/>
                    </div>
                    <div class="input-field">
                    <label for="">Choose a Department</label>
       
                        <select name="dept" >
                            <option value="" disabled selected>----select---</option>
                           
                            <option value="BCA1">BCA 1 year</option>
                            <option value="BCA2">BCA 2 year</option>
                            <option value="BCA3">BCA 3 year</option>
                            <option value="IT1">IT 1 year</option>
                            <option value="IT2">IT 2 year</option>
                            <option value="IT3">IT 3 year</option>
                           
                        </select>
                    </div>
                    <div class="input-field">
                    <label for="">Choose a Batch</label>
       
                        <select name="batch" >
                            <option value="" disabled selected>----select---</option>
                           
                            <option value="2021">2021-2024</option>
                            <option value="2022">2022-2025</option>
                            <option value="2023">2023-2026</option>
                            
                            
                           
                        </select>
                    </div>
                

                    <div class="input-field">
                    <label for="">Choose a Academic year</label>
       
                        <select name="acad" >
                            <option value="" disabled selected>----select---</option>
                           
                            <option value="2021">2021-2022</option>
                            <option value="2022">2022-2023</option>
                            <option value="2023">2023-2024</option>
                            <option value="2024">2024-2025</option>
                            <option value="2025">2025-2026</option>
                            
                           
                        </select>
                    </div>
                </div>  
                </div>
           






    <!--        <div class="for first">
            <div class="details">
                <span class="title"> EVENT DETAILS</span>
                <div class="fields">
                   
                    <div class="input-field">
                        <label for="">Select the semester </label>
                        <select name="sem" >
                            <option value="" disabled selected>Selecte the semester</option>
                            <option value="sem1">sem1</option>
                            <option value="sem2">sem2</option>
                            <option value="sem3">sem3</option>
                            <option value="sem4">sem4</option>
                            <option value="sem5">sem5</option>
                            <option value="sem6">sem6</option>
                          </select>
                    </div>
               
                   

                    <div class="input-field">
                        <label for="">Event Date</label>
                        <input type="date" name="event_date" placeholder="Enter Event Date" required/>
                    </div>

                    <div class="input-field">
                        <label for="">Event Name  </label>
                       
                        <input type="text" name="event_name"placeholder="Enter Event Name" required/>  
                    </div>
                    <div class="input-field">
                        <label for="">Event Description  </label>
                       
                        <input type="text" name="event_description" placeholder="Enter Event Description" required/>          
</div>
                    <div class="input-field">
                        <label for="">Event Description  </label>
                       
                        <textarea cols="80" row="15" placeholder="Enter Event Name" required>
                        </textarea>        
                    </div>

                    <div class="input-field">
                      <label for="">Select a file:</label>
                      <input type="file" id="myfile" name="myfile">
                     </div>
                </div>
        </div>-->


          <input type="submit" class="reg" name="submit" value="Register">

       
    </form>
</div>
</body>
</html>

