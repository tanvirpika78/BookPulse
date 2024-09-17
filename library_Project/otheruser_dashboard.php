<?php
session_start();
$userloginid = $_SESSION["userid"] = $_GET['userlogid'];
?>

<!DOCTYPE html>
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
    <style>
        .innerright, label { color: #feaa23;
            font-size: 20px;font-weight: bold;text-align:justify;text-shadow: 2px 3px 3px black;
             }
        .container, .row { margin: auto; }
        .innerdiv { text-align: center; margin: 30px; }
        body { font-family: 'Bahnschrift'; background-image: url('uploads/general.png'); }
        input { margin-left: 35px;width:92%; }
        .leftinnerdiv { float: left; width: 25%; margin-top: 30px; }
        .rightinnerdiv { float: right; width: 75%; }
        .btn-primary { color: #fff; background-color: #6b1013;font-size:22px; border-color: white; }
        .btn-primary:hover { color: white; background-color: #9b1318;border-color:black;
}
        .innerright { background-color: rgb(130 57 16 / 42%); margin-top: 40px; padding:30px;box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 100%), 0 9px 26px 0 rgba(250, 223, 170, 100%); }
        .greenbtn { background-color: rgb(74 3 9 / 60%); box-shadow: 0 5px 8px 0 rgba(250, 223, 170, 40%), 0 9px 26px 0 rgba(250, 223, 170, 40%); width: 95%; height: 50px; margin-top: 15px; }
        .greenbtn, a { text-decoration: none; color: white; font-size: 22px; text-shadow: 0 0 4px black; font-family: Cambria, serif; }
        .greenbtn:hover { color: #feab21; }
        tbody, td, tfoot, th, thead, tr { border-color: inherit;text-align:center; border-style: solid; border-width: 2px; border-color: white; }
        th { background-color: #8f2c10; text-shadow:2px 3px 3px black;color: white; padding: 8px; }
        td { background-color: #ffb468a6; color: black; padding: 8px; }
        td { color: black ;font-size:20px;text-shadow:3px 1px 4px white; }
        .body-img { max-width: 800px; width: 100%; margin: 0 auto 35px auto; }
        .header-1 { padding: 1px 5px; background-color: rgb(0 0 0 / 25%); display: flex; align-items: center; justify-content: space-between; position: sticky; }
        .imglogo { max-width: 220px; width: 100%; height: auto; }
        .icons1 { font-size: 2.5rem; margin-left: 1rem; cursor: pointer; }
    </style>
</head>
<body>
<div class="header-1">
    <div class="icons1">
        <a href="../index2.php" class="fa-solid fa-house icons1" style="color:#feab21;"></a>
        <a href="./loginadmin_server_page.php" class="fa-solid fa-circle-user icons1" style="color:#feab21;"></a>
    </div>
</div>

<?php include("data_class.php"); ?>

<div class="container">
    <div class="innerdiv">
        <div class="leftinnerdiv">
            <Button class="greenbtn" onclick="openpart('myaccount')"> <img class="icons" src="images/icon/profile.png" width="30px" height="30px"/> MY ACCOUNT</Button>
            <Button class="greenbtn" onclick="openpart('requestbook')"><img class="icons" src="images/icon/book.png" width="30px" height="30px"/>REQUEST BOOK</Button>
            <Button class="greenbtn" onclick="openpart('issuereport')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px"/>BOOK REPORT</Button>
            <Button class="greenbtn" onclick="openpart('recommendbook')"> <img class="icons" src="images/icon/book.png" width="30px" height="30px"/>BOOK RECOMMEND</Button>
            <a href="index.php"><Button class="greenbtn"><img class="icons" src="images/icon/logout.png" width="30px" height="30px"/> LOGOUT</Button></a>
        </div>

        <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php if(!empty($_REQUEST['returnid'])){ echo 'display:none'; } ?>">
                <Button class="greenbtn">MY ACCOUNT</Button>
                <?php
                $u = new data;
                $u->setconnection();
                $recordset = $u->userdetail($userloginid);

                // Initialize variables to avoid undefined variable warnings
                $name = '';
                $email = '';
                $type = '';

                if (!empty($recordset)) {
                    foreach($recordset as $row) {
                        $name = $row[1];
                        $email = $row[2];
                        $type = $row[4];
                    }
                }
                ?>
                <p style="color:#ffbe55;font-size:30px;margin-left: 50px;text-align:justify;text-shadow: 2px 3px 3px black">USER NAME : &nbsp;&nbsp;<?php echo $name ?></p>
                <p style="color:#feaa23;font-size:30px;margin-left: 50px;text-align:justify;text-shadow: 2px 3px 3px black">EMAIL : &nbsp;&nbsp;<?php echo $email ?></p>
                <p style="color:#eb8d25;font-size:30px;margin-left: 50px;text-align:justify;text-shadow: 2px 3px 3px black">ACCOUNT TYPE : &nbsp;&nbsp;<?php echo $type ?></p>
            </div>
        </div>

        <div class="rightinnerdiv">   
            <div id="issuereport" class="innerright portion" style="<?php if(!empty($_REQUEST['returnid'])){ echo 'display:none'; } else { echo 'display:none'; } ?>">
                <Button class="greenbtn">BOOK REPORT</Button>
                <?php
                $userloginid = $_SESSION["userid"] = $_GET['userlogid'];
                $u = new data;
                $u->setconnection();
                $recordset = $u->getissuebook($userloginid);
                $table = "<table style='font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;'><tr><th>BOOK NAME</th><th>ISSUE DATE</th><th>RETURN DATE</th><th>ISSUE DAYS</th><th>STATUS</th></tr>";
                foreach($recordset as $row) {
                    $table .= "<tr>";
                    //$table .= "<td>$row[2]</td>";
                    $table .= "<td>$row[3]</td>";
                    
                    $table .= "<td>$row[6]</td>";
                    $table .= "<td>$row[7]</td>";
                    $table .= "<td>$row[5]</td>";
                    //$table.="<td>$row[8]</td>";
                    $table .= "<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'><button type='button' class='btn btn-primary'style='font-size: 20px;'>RETURN</button></a></td>";
                    $table .= "</tr>";
                }
                $table .= "</table>";
                echo $table;
                ?>
            </div>
        </div>

        <div class="rightinnerdiv">   
            <div id="return" class="innerright portion" style="<?php if(!empty($_REQUEST['returnid'])){ $returnid = $_REQUEST['returnid']; } else { echo 'display:none'; } ?>">
                <Button class="greenbtn">Return Book</Button>
                <?php
                $u = new data;
                $u->setconnection();
                $u->returnbook($returnid);
                $recordset = $u->returnbook($returnid);
                ?>
            </div>
        </div>

        <div class="rightinnerdiv">   
            <div id="requestbook" class="innerright portion" style="<?php if(!empty($_REQUEST['returnid'])){ $returnid = $_REQUEST['returnid']; echo 'display:none'; } else { echo 'display:none'; } ?>">
                <Button class="greenbtn">Request Book</Button>
                <?php
                $u = new data;
                $u->setconnection();
                $recordset = $u->getbookissue();
                $table = "<table style='font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;'><tr><th>IMAGE</th><th>BOOK NAME</th><th>AUTHOR NAME</th><th>BRANCH</th><th>PRICE</th><th>STATUS</th></tr>";
                foreach($recordset as $row) {
                    $table .= "<tr>";
                    $table .= "<td><img src='uploads/$row[1]' width='100px' height='100px' style='border:1px solid #333333;'></td>";
                    $table .= "<td>$row[2]</td>";
                    $table .= "<td>$row[4]</td>";
                    $table .= "<td>$row[6]</td>";
                    $table .= "<td>$row[7]</td>";
                    $table .= "<td><a href='requestbook.php?bookid=$row[0]&userid=$userloginid'><button type='button' class='btn btn-primary'style='font-size: 20px;'>Request Book</button></a></td>";
                    $table .= "</tr>";
                }
                $table .= "</table>";
                echo $table;
                ?>
            </div>
        </div>

        <div class="rightinnerdiv">   
            <div id="recommendbook" class="innerright portion" style="<?php if(!empty($_REQUEST['returnid'])){ $returnid = $_REQUEST['returnid']; echo 'display:none'; } else { echo 'display:none'; } ?>">
                <Button class="greenbtn">RECOMMEND BOOK</Button><br>
                <form action="recommendbook.php" method="post">
                <label for="bookname" style="margin-left: 33px;margin-top: 20px;">BOOK NAME</label><br>

            <input type="text" id="bookname" name="bookname" required placeholder="enter book name"><br>
            
            <label for="author"style="margin-left: 33px;padding-top: 10px;">AUTHOR </label><br>
            <input type="text" id="author" name="author" required placeholder="enter author name"><br>
            
            <label for="genre"style="margin-left: 33px;padding-top: 10px;">GENRE </label><br>
            <input type="text" id="genre" name="genre" required placeholder="book genre"><br>
            
            <label for="description"style="margin-left: 34px;padding-top: 10px;">DESCRIPTION </label><br>
            <textarea id="description" name="description" rows="4" cols="50" required style="margin-left: 35px; width: 92%;margin-bottom: 18px;"placeholder="type your message"></textarea><br>

            
            <input type="submit" class="btn btn-primary" value="SEND"><br>
        </form>
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
</body>
</html>
