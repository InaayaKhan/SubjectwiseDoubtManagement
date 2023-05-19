<?php include "layouts/header.php"; ?>
<style>
  h2{
color:white;
  }

  h3 {
  color: white;
}
  label{
color:white;
  }
  .container {
    margin-top: 2%;
    width: 50%;
    height: 75%;
    background-color: rgba(58, 58, 58, 0.9); 
    padding-top:2%;
    padding-bottom:2%;
  }
  

select { 
                appearance: none; 
                outline: 0; 
                background: #f1f1f1; 
                background-image: none; 
                width: 100%; 
                height: 100%; 
                color: black; 
                cursor: pointer; 
                border:1px solid black; 
                border-radius:3px; 
                text-align: center;
                text-align-last: center;

            } 
            .select { 
                position: relative; 
                display: block; 
                width: 100%; 
                height: 3.5em; 
                line-height: 3; 
                overflow: hidden; 
                border-radius: .25em; 
                padding-bottom:10px; 
                text-align: center;
                text-align-last: center;
                  
            } 
            h1 { 
                color:green; 
            } 

.wrapper {
    text-align: center;
}

.roll {
  text-align: center;
  width: 100%;
  height: 75%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.button {
    position: absolute;
    top: 50%;
    background-color: #212121;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
  </style>

<div class="container">

  <center><h2>Student Registration Form</h2></center></br>
  <form class="form-horizontal" method="post" action="add_student.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="number">Number:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" required>
      </div>
    </div>

<hr>

      <center><h3 color: white>Enter Academic Details</h3></center></br>
      


        <div class="select">  
            <select name="year" id="year"> 
                <option>&nbsp&nbsp&nbspSelect Year</option> 
                <option value="FE">&nbsp&nbsp&nbspFE</option> 
                <option value="SE">&nbsp&nbsp&nbspSE</option> 
                <option value="TE">&nbsp&nbsp&nbspTE</option>
                <option value="BE">&nbsp&nbsp&nbspBE</option> 

                
            </select> 
        </div>


        <div class="select">  
            <select name="branch" id="branch"> 
            <option>&nbsp&nbsp&nbspSelect Branch</option> 
                <option value="COMPS">&nbsp&nbsp&nbspCOMPS</option> 
                <option value="IT">&nbsp&nbsp&nbspIT</option> 
                <option value="EXTC">&nbsp&nbsp&nbspEXTC</option>
                <option value="MECH">&nbsp&nbsp&nbspMECH</option>  
                <option value="ELEC">&nbsp&nbsp&nbspELEC</option> 
                <option value="CIVIL">&nbsp&nbsp&nbspCIVIL</option>

                
            </select> 
        </div>


        <div class="select">  
            <select name="division" id="division"> 
            <option>&nbsp&nbsp&nbspSelect Division</option> 
                <option value="A">&nbsp&nbsp&nbspA</option> 
                <option value="B">&nbsp&nbsp&nbspB</option> 
                <option value="C">&nbsp&nbsp&nbspC</option> 

                
            </select> 
        </div>

     
        <input class="roll" type="text" placeholder="Enter Roll No" name="roll_no" required>
    


    <div class="wrapper">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="button">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
