<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    </head>
    
    <style>
#recommendedbooks .greenbtn {
    background-color: rgb(0 11 123 / 25%);
    box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 40%), 0 9px 26px 0 rgba(250, 223, 170, 40%);
    width: 95%;
    height: 50px;
    margin-top: 15px;
}

#recommendedbooks .greenbtn:hover {
    color: #feab21;
}

#recommendedbooks .greenbtn,
#recommendedbooks a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    text-shadow: 0 0 4px black;
}

#recommendedbooks table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
    background-color: #f3cbae;
    color: black;
}

#recommendedbooks th {
    background-color: #c7572f;
    color: black;
    padding: 8px;
}

#recommendedbooks td,
#recommendedbooks th {
    border: 2px solid white;
    padding: 8px;
    text-align:left;
    
}
#contacts {
        display: none;
        padding: 20px;
        margin-top: 20px;
        margin-left: -235px;
    }

    #contacts .greenbtn {
        background-color: rgb(0 11 123 / 25%);
        box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 40%), 0 9px 26px 0 rgba(250, 223, 170, 40%);
        width: 95%;
        height: 50px;
        margin-top: 15px;
    }

    #contacts .greenbtn:hover {
        color: #feab21;
    }

    #contacts .greenbtn,
    #contacts a {
        text-decoration: none;
        color: white;
        font-size: 20px;
        text-shadow: 0 0 4px black;
    }

    /* Table styles */
    #contacts table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        background-color: #f3cbae;
        color: black;
    }

    #contacts th {
        background-color: #c7572f;
        color: black;
        padding: 8px;
    }

    #contacts td,
    #contacts th {
        border: 2px solid white;
        padding: 8px;
        text-align: left;
    }

        .innerright,label {
    color: #ff8f00;
    font-weight:bold;
    box-sizing: border-box;
    text-align:left;
    
} 
.container,
.row,
.imglogo {
    /* margin:center; */
    padding:0px 0px 0px 0px;
    

}
tbody, td, tfoot, th, thead, tr {
    border-color:white;
    border-style: solid;
    border-width: 2px;
}

.innerdiv {
    text-align: center;
  margin-top:5px;
    margin: 30px;
}
input{
    margin-left:50px;
    text-size:25px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
}

.rightinnerdiv {
    float: right;
    width: 75%;
}

.innerright {
      background-color:rgba(13,110,253,.25); 
    box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 100%);
    padding:20px;
}

.greenbtn {
    background-color:rgb(0 11 123 / 25%); 
    box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 40%), 0 9px 26px 0 rgba(250, 223, 170, 40%);
    
    width: 98%;
    height: 50px;
    margin-top: 15px;
}

.greenbtn:hover{
    color:#feab21;
}

.greenbtn,
a {
    text-decoration: none;
    color: white;
    font-size: 20px;
    text-shadow: 0 0 4px black;
}


th{
    background-color: #c7572f;
    color: black;
    text-align: center;
}
.btn-primary {
    color: #fff;
    background-color: #053a5a;
    border-color: #042943;
}

td{
    background-color: #f3cbae;
    margin-top:10rem;
    color: white;
}
td, a{
    color:black;
    text-align:center;
    padding:1px;
}



        *{
            box-sizing: border-box;
           padding:1px;
        }
        
        label {
            margin-left:50px;
            padding-Top:10px;
           
            font-size: 25px;
           
            color:#ffeba4;
            
            text-shadow: 0 0 5px black;
        }
        
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        
        input[type=text]:focus,
        input[type=email]:focus,
        input[type=number]:focus,
        input[type=pasword]:focus,

        select:focus,
        textarea:focus {
            outline: none;
        }
        
        input[type=text],
        input[type=email],
        input[type=number],
        input[type=pasword],
        select,
        textarea {
            
            width: 85%;
            padding: 2px;
            border: 1px solid black;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 2px;
            margin-bottom: 2px;
            resize: vertical;
            margin-left:50px;
        }

.header-1{
    padding: 1px 5px;
    background-color:rgb(0 0 0 / 25%);;  
 display:flex;
 align-items:center;
 justify-content: space-between;
    position: sticky;

}
.b{
    display: inline-block; /* Display as inline-block element */
font-weight: 400; /* Normal font weight */
line-height: 1.5; /* Line height of 1.5 */
color: white; /* Text color */
text-align: center; /* Center text alignment */
text-decoration: none; /* No underline or strikethrough */
vertical-align: middle; /* Align vertically in the middle */
cursor: pointer; /* Show pointer cursor on hover */
-webkit-user-select: none; /* Disable text selection for WebKit browsers */
-moz-user-select: none; /* Disable text selection for Firefox */
user-select: none; /* Disable text selection */
background-color: red; /* Transparent background */
border: 1px solid black; /* Transparent border with 1px width */
padding: .375rem .75rem; /* Padding around text */
font-size: 1rem; /* Font size of 1rem */
border-radius: .25rem; /* Border radius of .25rem (rounded corners) */
transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out; /* Smooth transitions for color, background-color, border-color, and box-shadow */
}
.imglogo{
    max-width: 220px;
    width: 100%;
    height: auto;
}

.icons1{
    font-size: 2.5rem;
    margin-left: 1rem;
    cursor: pointer;
}
        
body {
    font-family: 'Bahnschrift';
        background-image: url('uploads/booook.png');
    
}

.body-img{
max-width: 800px;
width: 100%;
margin: 0 auto 5px auto;
}


 ::placeholder {
    color: rgb(189, 184, 184);
    font-style: italic;
    font-size: 14px;
}

    </style>
    <body >
   
    <div class="header-1">
    
 <div class ="icons1">
  <a href="../index2.php" class="fa-solid fa-house icons1" style="color: #f1df9f;"background-color:cyan;" ></a>
  <a href="./loginadmin_server_page.php" class="fa-solid fa-circle-user icons1" style="color: #f1df9f;"background-color:cyan;"></a>
     </div>
    </div>

    <?php
   include("data_class.php");

$msg="";#556B2F

   if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 if ($msg == "done") {
    echo "<div id='alert' class='alert alert-success' role='alert'>Successfully Done</div>";
    echo "<script>
            setTimeout(function() {
                var alert = document.getElementById('alert');
                alert.style.display = 'none';
            }, 3000); 
          </script>";
}
elseif ($msg == "fail") {
    echo "<div id='alert' class='alert alert-danger' role='alert'>Fail</div>";
    echo "<script>
            setTimeout(function() {
                var alert = document.getElementById('alert');
                alert.style.display = 'none';
            }, 3000);
          </script>";
}

    ?>



        <div class="container">
        <div class="innerdiv">
        <!-- <div class="row"><img class="body-img" src="images/logo1.png"/></div> -->
            <div class="leftinnerdiv">
                <!-- <Button class="greenbtn"> ADMIN</Button> -->
                
                <Button class="greenbtn" onclick="openpart('addbook')" ><img class="icons" src="images/icon/book.png" width="30px" height="30px"/>  ADD BOOK</Button>
                <Button class="greenbtn" onclick="openpart('bookreport')" > <img class="icons" src="images/icon/open-book.png" width="30px" height="30px"/> BOOK DETAILS</Button>
                <Button class="greenbtn" onclick="openpart('bookrequestapprove')"><img class="icons" src="images/icon/interview.png" width="30px" height="30px"/> BOOK REQUESTS</Button>
                <button class="greenbtn" onclick="openpart('recommendedbooks')"><img class="icons" src="images/icon/book.png" width="30px" height="30px"/> RECOMMENDED BOOKS</button>
                <button class="greenbtn" onclick="openpart('contacts')"><img class="icons" src="images/icon/book.png" width="30px" height="30px"/> USER ENQUIRY</button>

                <Button class="greenbtn" onclick="openpart('addperson')"> <img class="icons" src="images/icon/add-user.png" width="30px" height="30px"/> ADD USER</Button>
                <Button class="greenbtn" onclick="openpart('studentrecord')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px"/> USER RECORD</Button>
                <Button class="greenbtn"  onclick="openpart('issuebook')"> <img class="icons" src="images/icon/test.png" width="30px" height="30px"/> ISSUE BOOK</Button>
                <Button class="greenbtn" onclick="openpart('issuebookreport')"> <img class="icons" src="images/icon/checklist.png" width="30px" height="30px"/> ISSUE REPORT</Button>
                <a href="index.php">
                <Button class="greenbtn"><img class="icons" src="images/icon/book.png" width="30px" height="30px"/> LOGOUT</Button></a>
            </div>

            <div class="rightinnerdiv">   
            <div id="bookrequestapprove" class="innerright portion" style="display:none">
            <Button class="greenbtn" >BOOK REQUEST</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->requestbookdata();
            $recordset=$u->requestbookdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='
            padding: 8px;'>USER NAME</th><th>USER TYPE</th><th>BOOK NAME</th><th>DAYS</th><th>Approve</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
              "<td>$row[1]</td>";
              "<td>$row[2]</td>";

                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[6]</td>";
               // $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved BOOK</button></a></td>";
                 $table.="<td><a href='approvebookrequest.php?reqid=$row[0]&book=$row[5]&userselect=$row[3]&days=$row[6]'><button type='button' class='btn btn-primary'>Approved</button></a></td>";
               // $table.="<td><a href='deletebook_dashboard.php?deletebookid=$row[0]'>Delete</a></td>";
                $table.="</tr>";
             //$table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
</div>

<div class="rightinnerdiv">   
            <div id="addbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >ADD BOOK</Button>
            <br>
            <form action="addbookserver_page.php" method="post" enctype="multipart/form-data">
        
        <label>Book Name</label><br>
        <input type="text" name="bookname" required style="font-size: 20px;"/><br>
        
        <label>Detail</label><br>
        <input type="text" name="bookdetail" required style="font-size: 20px;"/><br>
        
        <label>Author</label><br>
        <input type="text" name="bookauthor" required style="font-size: 20px;"/><br>
        
        <label>Publication</label><br>
        <input type="text" name="bookpub" required style="font-size: 20px;"/><br>
        
        <label>Branch</label><br>
        <input type="radio" name="branch" value="other" style="font-size: 20px;"> OTHER
<input type="radio" name="branch" value="BSIT" style="font-size: 20px;"> BSIT
<input type="radio" name="branch" value="BSCS" style="font-size: 20px;"> BSCS
<input type="radio" name="branch" value="BSSE" style="font-size: 20px;"> BSSE
<br>
        
        <label>Price</label><br>
        <input type="number" name="bookprice" required style="font-size: 20px;"/><br>
        
        <label>Quantity</label><br>
        <input type="number" name="bookquantity" required style="font-size: 20px;"/><br>
        
        <label>Book Photo</label><br>
        <input type="file" name="bookphoto" required/><br><br><br>
        
        <input type="submit" value="SUBMIT" style="background-color: #c7572f;box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 10%); color: white; font-size: 20px; width: 80%; margin: 0 auto; display: block;font-weight: bolder;"><br><br>

    </form>
            </div>
            </div>



            <div class="rightinnerdiv">   
            <div id="addperson" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ADD USER</Button>
            <form action="addpersonserver_page.php" method="post" enctype="multipart/form-data">
            <label>Name:</label>
            <input type="text" name="addname" style="font-size: 20px;"/>

            </br>
            <label>Password:</label><input type="pasword" name="addpass" style="font-size: 20px;"/>
            </br>
            <label>Email:</label><input  type="email" name="addemail" style="font-size: 20px;"/></br>
            <label for="typw">Choose type:</label>
            <select name="type" id="typeSelect" style="font-size: 25px;"><br><br>
    <option value="student" style="font-size: 20px;">student</option>
    <option value="teacher" style="font-size: 20px;">teacher</option>
</select>
            <br><br>

            <input type="submit" value="SUBMIT" style="background-color: #c7572f;box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 10%); color: white; font-size: 20px; width: 80%; margin-top:35px; display: block;"><br><br>
            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="studentrecord" class="innerright portion" style="display:none">
            <Button class="greenbtn" >USER RECORD</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'>ID</th><th>NAME</th><th>EMAIL</th><th>PASSWORD</th><th>TYPE</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
               $table.="<td>$row[0]</td>";
                $table.="<td>$row[1]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[4]</td>";
                // $table.="<td><a href='deleteuser.php?useriddelete=$row[0]'><button type='button' class='b'>DELETE</a></td>";
                 
                 $table.="</tr>";
                
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="issuebookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ISSUE REPORT</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->issuereport();
            $recordset=$u->issuereport();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>USER NAME</th><th>BOOK NAME</th><th>ISSUE DATE</th><th>RETURN DATE</th><th>USER TYPE</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
             
                $table.="<td>$row[4]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'>Return</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

<!--             

issue book -->
            <div class="rightinnerdiv">   
            <div id="issuebook" class="innerright portion" style="display:none">
            <Button class="greenbtn" >ISSUE BOOK</Button>

            <form action="issuebook_server.php" method="post" enctype="multipart/form-data">
            
            
            <label for="book">Choose Book</label>
           
            <select name="book"  style="font-size: 22px;">
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();
            foreach($recordset as $row){

                echo "<option value='". $row[2] ."'>" .$row[2] ."</option>";
        
            }            
            ?>
            </select>
<br>
            <label for="Select Student">Select Student</label>
            <select name="userselect"  style="font-size: 22px;">
            <?php
            $u=new data;
            $u->setconnection();
            $u->userdata();
            $recordset=$u->userdata();
            foreach($recordset as $row){
               $id= $row[0];
                echo "<option value='". $row[1] ."'>" .$row[1] ."</option>";
            }            
            ?>
            </select>
<br>
           <label>Days</label> <input type="number" name="days" style="font-size: 20px;"/><br><br>

           <input type="submit" value="SUBMIT" style="background-color: #c7572f;box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 10%); color: white; font-size: 20px;margin-top:20px; width: 80%; margin-left:65px; display: block;"><br><br>
            


            </form>
            </div>
            </div>

            <div class="rightinnerdiv">   
            <div id="bookdetail" class="innerright portion" style="<?php  if(!empty($_REQUEST['viewid'])){ $viewid=$_REQUEST['viewid'];} else {echo "display:none"; }?>">
            
            <Button class="greenbtn" >BOOK DETAILS</Button>
</br>
<?php
            $u=new data;
            $u->setconnection();
            $u->getbookdetail($viewid);
            $recordset=$u->getbookdetail($viewid);
            foreach($recordset as $row){

                $bookid= $row[0];
               $bookimg= $row[1];
               $bookname= $row[2];
               $bookdetail= $row[3];
               $bookauthor= $row[4];
               $bookpub= $row[5];
               $branch= $row[6];
               $bookprice= $row[7];
               $bookquantity= $row[8];
               $bookava= $row[9];
               $bookrent= $row[10];

            }            
?>

            <img width='150px' height='150px' style='border:2px solid rgba(250, 223, 170, 100%);    box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 100%); float:left;margin-left:20px' src="uploads/<?php echo $bookimg?> "/>
            <!-- </br> -->
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Name : &nbsp&nbsp<?php echo $bookname ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Detail : &nbsp&nbsp<?php echo $bookdetail ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Author : &nbsp&nbsp<?php echo $bookauthor ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Publisher : &nbsp&nbsp<?php echo $bookpub ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Branch : &nbsp&nbsp<?php echo $branch ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Price : &nbsp&nbsp<?php echo $bookprice ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Available Book:&nbsp&nbsp<?php echo $bookava ?></p>
            <p style="margin-left: 200px;color:#ffeba4;font-size:24px;text-shadow: 0 0 5px black">Book Rent : &nbsp&nbsp<?php echo $bookrent ?></p>


            </div>
            </div>



            <div class="rightinnerdiv">   
            <div id="bookreport" class="innerright portion" style="display:none">
            <Button class="greenbtn" >BOOK DETAILS</Button>
            <?php
            $u=new data;
            $u->setconnection();
            $u->getbook();
            $recordset=$u->getbook();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style=' 
            padding: 8px;'>BOOK NAME</th><th>PRICE</th><th>QUANTITY</th><th>AVAILABILITY</th><th>VIEW</th><th>REMOVE</th></tr>";
            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[7]</td>";
                $table.="<td>$row[8]</td>";
                
                $table.="<td>$row[10]</td>";
                $table.="<td><a href='admin_service_dashboard.php?viewid=$row[0]'><button type='button' class='btn btn-primary'>View BOOK</button></a></td>";
                $table.="<td ><a href='deletebook_dashboard.php?deletebookid=$row[0]'><button type='button' class='b'>Delete</a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>

            <!-- rcmnd -->
            <div class="rightinnerdiv">
                <div id="recommendedbooks" class="innerright portion" style="display:none">
                    <Button class="greenbtn">RECOMMENDED BOOKS</Button>
                    <?php
                    // PHP code to fetch and display recommended books
                    $u = new data;
                    $u->setconnection();
                    $recommendations = $u->getRecommendedBooks(); // Replace with your method to fetch recommended books
                    
                    echo "<table class='table'>";
                    echo "<thead class='thead-dark'>";
                    echo "<tr>";
                    echo "<th scope='col'>USER ID</th>";
                    echo "<th scope='col'>BOOK NAME</th>";
                    echo "<th scope='col'>AUTHOR</th>";
                    echo "<th scope='col'>DESCRIPTION</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
            
                    foreach ($recommendations as $book) {
                        echo "<tr>";
                        echo "<td>{$book['userid']}</td>";
                        echo "<td>{$book['bookname']}</td>";
                        echo "<td>{$book['author']}</td>";
                        echo "<td>{$book['description']}</td>";
                        echo "</tr>";
                    }
            
                    echo "</tbody>";
                    echo "</table>";
                    ?>
                </div>

    <!-- cont -->
            
                <div class="rightinnerdiv">
    <div id="contacts" class="innerright portion" style="display:none">
        <Button class="greenbtn">USER ENQUIRY</Button>
        <?php
        // PHP code to fetch and display contacts
        $u = new data;
        $u->setconnection();
        $contacts = $u->getContacts(); // Fetch contacts from the database
        echo "<table class='table'>";
                    echo "<thead class='thead-dark'>";
                    echo "<tr>";
                    echo "<th scope='col'>NAME</th>";
                    echo "<th scope='col'> PHONE NO.</th>";

                    echo "<th scope='col'>EMAIL</th>";
                    echo "<th scope='col'>MESSAGE</th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
            

        foreach ($contacts as $contact) {
            echo "<tr>";
          
            echo "<td>{$contact['name']}</td>";
            echo "<td>{$contact['number']}</td>";
            echo "<td>{$contact['email']}</td>";
            echo "<td>{$contact['message']}</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        ?>
    </div>
</div>


        </div>
        </div>
        

     
        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>