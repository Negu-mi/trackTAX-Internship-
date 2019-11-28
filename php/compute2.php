<?php include("connectdb.php"); ?>

<?php
    session_start(); 
    $id = $_SESSION['ID'];
    echo $id;

    $birth = $_POST['bday'];
    $disabled = $_POST['radio'];
    $day180 = $_POST['180day'];
    $status = $_POST['statuss'];
    $oneway = $_POST['work'];
    $salary = $_POST['salary'];
    $taxwhile = $_POST['tax'];
    $outwork = $_POST['outwork'];
    $outworkincome = $_POST['outworkincome'];
    $outworktax = $_POST['outworktax'];
    $getincome = $_POST['salaryy'];

    $couple = $_POST['couple'];
    $son = $_POST['son'];
    $countson = $_POST['countson'];
    $spawn = $_POST['spawn'];
    $countdisabled = $_POST['disabled'];

    $moneyloan = $_POST['moneyloan'];
    $countloan = $_POST['countloan']; 

    $promajor = $_POST['provincemajor'];
    $promminor = $_POST['provinceminor'];
    $otop = $_POST['otop'];
    $sport = $_POST['sport'];
    $book = $_POST['book'];

    $firsthome = $_POST['condo'];
    $comins = $_POST['commoninsurance'];
    $myhealthins = $_POST['myhealthinsurance'];
    $pahealthins = $_POST['parenthealthinsurance'];
    $longins = $_POST['longlifeinsurance'];
    $socialins = $_POST['socialinsurance'];
    $phalanx = $_POST['phalanx'];
    $owe = $_POST['owe'];
    $social = $_POST['social'];

    $sql = "UPDATE user u
            SET u.Birth_Of_Date = '$birth'
                ,u.Salary = '$salary' 
                ,u.Disabled = '$disabled' 
                ,u.Status = '$status'
                ,u.Is_180_Days_In_THAI = '$day180'
                ,u.Oneway = '$oneway'
                ,u.Taxwhile = '$taxwhile'
                ,u.Outwork = '$outwork'
                ,u.Outworkincome = '$outworkincome'
                ,u.Outworktax = '$outworktax'
                ,u.Getincome = '$getincome'
            WHERE User_ID = '$id'";
    $insert = mysqli_query($mysqli,$sql);
    
    $sql = "UPDATE deduction d
            SET d.Couple = '$couple'
                ,d.Countson = '$countson'
                ,d.Spawn = '$spawn'
                ,d.Countdisabled = '$countdisabled'
                ,d.Moneyloan = '$moneyloan'
                ,d.Countloan = '$countloan'
                ,d.Promajor = '$promajor'
                ,d.Prominor = '$promminor'
                ,d.Otop = '$otop'
                ,d.Sport = '$sport'
                ,d.Book = '$book'
                ,d.Firsthome = '$firsthome'
                ,d.Commonins = '$comins'
                ,d.Myhealthins = '$myhealthins'
                ,d.Parenthealthins = '$pahealthins'
                ,d.Longlifeins = '$longins'
                ,d.Socialins = '$socialins'
                ,d.Phalanx = '$phalanx'
                ,d.Owe = '$owe'
                ,d.Social = '$social'
            WHERE User_ID = '$id'";
    $insert1 = mysqli_query($mysqli,$sql);

            if($insert){
                echo "Success"; 
            }
            else{
                echo "fail";
            }

?>