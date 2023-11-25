<html>
    <head>
        <title>student update form</title>
    <link rel="stylesheet" href="eventupdate.css">
</head>
<body>
  <div class="container">
    <header>STUDENTS UPDATE FORM </header>
    <form action="">
        <div class="for first">
            <div class="details">
                <span class="title">UPDATE  EVENT DETAILS</span>
                <div class="fields">
                    <div class="input-field">
                        <label for="">Roll Number </label>
                        <input type="text" placeholder="Enter your Roll Number " required/>
                    </div>
                    <div class="input-field">
                        <label for="">Select the semester </label>
                        <select name="semester" >
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
                        <label for="">Academic year </label>
                       
                        <input type="text" placeholder="Enter your Academic year" required/>   
                    </div>
                    

                    <div class="input-field">
                        <label for="">Event Date</label>
                        <input type="date" placeholder="Enter Event Date" required/>
                    </div>

                    <div class="input-field">
                        <label for="">Event Name  </label>
                       
                        <input type="text" placeholder="Enter Event Name" required/>   
                    </div>
                    <div class="input-field">
                        <label for="">Event Description  </label>
                       
                        <textarea cols="80" row="15" placeholder="Enter Event Name" required> 
                        </textarea>         
                    </div>
            </div>
        </div>
        <input type="submit" class="update" value="UPDATE">
    </form>

 </div>