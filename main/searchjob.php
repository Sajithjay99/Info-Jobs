

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home2</title>
    <link rel="stylesheet" href="searchjob.css">
</head>
<body>
<?php 
include "header2.php";

?>

<br><br><br><br>

  <div class="container">
    <div class="nav">
    
    </div>
<div class="Ndiv">

    <h2 style="font-size: 50px; margin-left: -30px;">Search Job</h2>
    <div class="container1">
      <div class="test">
      

      <form action="/action_page.php">
        <div style="display: flex; ">
          
      <h3>Select Qualification</h3>
      <div style="padding-left: 70px;margin-top: 10px;">
      <select>
        <option value="">Select Qualification</option>
        <option value="">Communication Skill</option>
        <option value="">Computer Proficiancy</option>
        <option value="">Industry Experience</option>
        <option value="">Education Level</option>
        

      </select>
    </div>
    </div>
      </form>

      <div style="display: flex;">

      <h3>Select Company Name</h3>
      <div style="padding-left: 30px;margin-top: 10px;">

     <select>
      <option value="">Select Company </option>
      <option value="">Bandcamp</option>
      <option value="">The Knot</option>
      <option value="">Ventura</option>
      <option value="">Starnext</option>
      <option value="">Brandix</option>


    </select>
  </div>
  </div>

  <div style="display: flex;">

    <h3>Select Area Of Work</h3>
    <div style="padding-left: 65px;margin-top: 10px;">

    <select>
      <option value="">Select Work Area </option>
      <option value="">Computer Programmer</option>
      <option value="">Office Worker</option>
      <option value="">Accountant</option>
      <option value="">Receptionist</option>
      <option value="">Project Manager</option>
      <option value="">Web Designer</option>
      <option value="">Marketing Coordinator</option>
      <option value="">Auditing Clerk</option>
      <option value="">Human Resources</option>
    </select>
  </div>
  </div>

  </div>
  </div>
  
  


    <br>
    <br>


    <div class="container2">
      <div style="display:flex"
      <label for="fname" ><h3>Job ID:<h3></label>
        <div style="padding-left: 160px;">
      <input type="text" id="fname" name="fname" style="margin-top: -100px; padding-left: 40px; padding-top: 10px; border-radius: 5px;">
      </div>
      </div>
<br>
      <div style="display:flex"
      <label for="fname" ><h3>Company Name:<h3></label>
        <div style="padding-left: 65px;">
      <input type="text" id="fname" name="fname" style="margin-top: -100px; padding-left: 40px; padding-top: 10px; border-radius: 5px;">
      </div>
      </div>
      <br>
      <div style="display:flex"
      <label for="fname" ><h3>  Job Title:<h3></label>
        <div style="padding-left: 145px;">
      <input type="text" id="fname" name="fname" style="margin-top: -100px; padding-left: 40px; padding-top: 10px; border-radius: 5px;">
      </div>
      </div>
      <br>
      <div style="display:flex"
      <label for="fname" ><h3>Vacancy:<h3></label>
        <div style="padding-left: 140px;">
      <input type="text" id="fname" name="fname" style="margin-top: -100px; padding-left: 40px; padding-top: 10px; border-radius: 5px;">
      </div>
      </div>
      <br>
      <div style="display:flex"
      <label for="fname" ><h3>Qualification:<h3></label>
        <div style="padding-left: 110px;">
      <input type="text" id="fname" name="fname" style="margin-top: -100px; padding-left: 40px; padding-top: 10px; border-radius: 5px;">
      </div>
      </div>
<br>
      <div style="display:flex"
      <label for="fname" ><h3>Description  :<h3></label>
        <div style="padding-left: 120px;">
      <input type="text" id="fname" name="fname" style="margin-top: -100px; padding-left: 40px; padding-top: 10px; border-radius: 5px;">
      </div>
      </div>




      
      <input  type="submit" value="Submit" style="font-size: 40px; border-radius: 10px; margin-left: 200px; margin-top: 40px; padding-left: 15px; padding-top: 5px; background-color: rgb(10, 160, 160); color: black;">




    </div>
    </form>

  </div>




</body>

</html>



    </main>

    <br><br><br><br>
<?php 
include "footer2.php";

?>
</body>
</html>