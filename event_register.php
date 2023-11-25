<html>
    <head>
        <title>student event register form</title>
    <link rel="stylesheet" href="eventupdate.css">
</head>
<body>
  <div class="container">
    <header>STUDENTS EVENT REGISTER FORM </header>
    <form method="POST" action="http://localhost/loginn/event_reg.php" enctype="multipart/form-data">
        <div class="for first">
            <div class="details">
                <span class="title">EVENT REGISTER DETAILS</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="">Roll Number </label>
                        <input type="text" name="rollno" placeholder="Enter your Roll Number " required/>
                    </div>

                    <div class="input-field">
                    <label for="">Choose a Academic year</label>
       
                        <select name="acad" required >
                            <option value="" disabled selected>Select the Academic</option>
                           
                            <option value="2021">2021-2022</option>
                            <option value="2022">2022-2023</option>
                            <option value="2023">2023-2024</option>
                            <option value="2024">2024-2025</option>
                            <option value="2025">2025-2026</option>
                            
                           
                        </select>
                    </div>

                    <div class="input-field">
                    <label for="">Choose a Department</label>
       
                        <select name="dept" required >
                            <option value="" disabled selected>Select the department</option>
                           
                            <option value="BCA1">BCA 1 year</option>
                            <option value="BCA2">BCA 2 year</option>
                            <option value="BCA3">BCA 3 year</option>
                            <option value="IT1">IT 1 year</option>
                            <option value="IT2">IT 2 year</option>
                            <option value="IT3">II 3 year</option>
                           
                        </select>
                    </div>
                    <div class="input-field">
                    <label for="">Choose a Batch</label>
       
                        <select name="batch" required >
                            <option value="" disabled selected>Select the batch-</option>
                           
                            <option value="2021">2021-2024</option>
                            <option value="2022">2022-2025</option>
                            <option value="2023">2023-2026</option>
                            
                            
                           
                        </select>
                    </div>
                    <div class="input-field">
                        <label for="">Select the semester </label>
                        <select name="sem" required>
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
                        <input type="date" name="edate" placeholder="Enter Event Date" required/>
                    </div>

                    <div class="input-field">
                        <label for="">Select the event</label>
                        <select name="ename" required >
                            <option value="" disabled selected>Selecte the event</option>
                            <option value="Club Activies">Club Activies</option>
                            <option value="Sport Activies">Sport Activies</option>
                            <option value="Inter College meet">Inter College Meet</option>
                            <option value="Cutural Event">Cultural Event</option>
                            <option value="Part V">Part V</option>
                            <option value="others">others</option>
                            
                          </select>
                    </div>
                    <div class="input-field">
                        <label for="">Event Description  </label>
                       
                        <textarea cols="80" row="15" name="edesc" placeholder="Enter Event Name" required> 
                        </textarea>         
                    </div>
                    <div class="input-field">
                      <label for="">Select a file:</label>
                      <input class="fil" type="file" id="myfile" name="myfile" required/>
                     </div>
                </div>
            </div>
        </div>
        <input type="submit" class="update" value="EVENT REGISTER">
    </form>

 </div>
</body>
</html>