<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Integration</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <!--pop-up-box-->
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!--//pop-up-box-->
        <!-- price range -->
        <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
        <!-- fonts -->
</head>
<style>
    #container{
        width:100%;
        max-width:500px;
        display: table;
        margin:150px auto 0;
    }
    .productBlock{
        width : 100%;
        max-width: 200px;
        display : table;
        margin: 0 auto;
        border: 3px solid #666;
        padding: 10px;
    }

    .let{
        padding: 30px;
    }

    .panel-body{
        padding:40px;
    }
</style>

<body>
    <!-- <div id="container">
        <div class="productBlock">
        <p>Size: 20 MP</p>
        <p>Date: 12/12/2020</p>
        <p>Author: Temitope</p>
        </div> -->
<div class="container">

    <form action="process.php" method="post" class="let">
            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
            <input type="email" name="email" class="form-control" placeholder="Enter Your email">
<br>
<br>
            <div class="col-md-4 text-center">
            <div class="panel panel-danger panel-pricing">
            <div class="panel-heading">
            <i class="fa fa-money"></i>
            <h3>Regular Donator</h3>
            </div>
        <div class="panel-body text-center">
        <p><Strong>₦100</Strong></p>
        </div>
        <ul class="list-group text-center">
        <li class="list-group-item"><i class="fa fa-check"></i>Personal Use</li>
        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited projects</li>
        <li class="list-group-item"><i class="fa fa-check"></i>27/7 support</li>
        </ul>
        <div class="panel-footer">
        <label class="btn btn-danger btn-block">
            <input type="radio" name="options" id="regular" value="100"> Select Bundle 1
        </label>
        </div>
            </div>
            </div>
            <!-- End item1 -->

            <div class="col-md-4 text-center">
            <div class="panel panel-danger panel-pricing">
            <div class="panel-heading">
            <i class="fa fa-money"></i>
            <h3>Bank Donator</h3>
            </div>
        <div class="panel-body text-center">
        <p><Strong>₦200</Strong></p>
        </div>
        <ul class="list-group text-center">
        <li class="list-group-item"><i class="fa fa-check"></i>Personal Use</li>
        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited projects</li>
        <li class="list-group-item"><i class="fa fa-check"></i>27/7 support</li>
        </ul>
        <div class="panel-footer">
        <label class="btn btn-danger btn-block">
            <input type="radio" name="options" id="regular" value="200"> Select Bundle 2
        </label>
        </div>
            </div>
            </div>
<!-- End Item2 -->

<div class="col-md-4 text-center">
            <div class="panel panel-danger panel-pricing">
            <div class="panel-heading">
            <i class="fa fa-money"></i>
            <h3>Huge Donator</h3>
            </div>
        <div class="panel-body text-center">
        <p><Strong>₦300</Strong></p>
        </div>
        <ul class="list-group text-center">
        <li class="list-group-item"><i class="fa fa-check"></i>Personal Use</li>
        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited projects</li>
        <li class="list-group-item"><i class="fa fa-check"></i>27/7 support</li>
        </ul>
        <div class="panel-footer">
        <label class="btn btn-danger btn-block">
            <input type="radio" name="options" id="regular" value="300"> Select Bundle 3
        </label>
        </div>
            </div>
            </div>
<!-- End Item3 -->
            <div class="col-md-12" align="center">
            <center><button type="submit" name="donate" class="btn btn-primary">
            Submit Donation</button></center>
            </div>
            </form>

    </div>
        
    
    </div>
</body>
</html>