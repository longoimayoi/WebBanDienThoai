<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
        ob_start();
         include('config/config.php');
          include('../inc/myconnect.php');
        if(!isset($_SESSION['uid']))
        {
            header('Location: login.php');
        }
        //tránh lỗi nhớ link để sửa quyền
        else
        {
            $query="SELECT * FROM tbldangnhap WHERE id=".$_SESSION['uid']."";
            $result=mysqli_query($connect,$query);
            $checkrole=mysqli_fetch_assoc($result);
            $current_url=$_SERVER["SERVER_NAME"].$_SERVER['REQUEST_URI'];
            $current_tach=explode('/', $current_url);
            $tm=count($current_tach);
            $dem=1;
            foreach ($current_tach as $current_tach2) 
            {
                if($dem==$tm)
                {
                    //tách id edit,delete
                    if(isset($_GET['id']) || isset($_GET['s']))
                    {
                       
                        $tachid=explode('?', $current_tach2);
                        
                    }
                    $mangthaythe=array();
                    $tachcheckrole=explode(',', $checkrole['role']);
                    $demthay=1;
                    foreach ($tachcheckrole as $tachcheckrole2) 
                    {
                        if($demthay>1)
                        {
                              $tachcheckrole3=explode('-', $tachcheckrole2);
                                $mangthaythe[]=array(
                                    'link1'=>$tachcheckrole3[1],//thêm mới
                                    'link2'=>$tachcheckrole3[2],//list
                                    'link3'=>$tachcheckrole3[3],//edit
                                    'link4'=>$tachcheckrole3[4],//delete

                                );
                                $ok=0;
                                foreach ($mangthaythe as $itemthay) 
                                {
                                    //kiểm tra có ?id=eidt,delete
                                    if(isset($_GET['id']))
                                    {
                                        if($tachid[0]== $itemthay['link3']||$tachid[0]==$itemthay['link4'])

                                        {
                                            $ok=1;
                                            break;
                                        }
                                    }
                                    //xử lý phân trang 
                                    elseif(isset($_GET['s'])) 
                                    {
                                        if($tachid[0] == $itemthay['link2'])
                                        {
                                            $okc=1;
                                            break;
                                        }                        
                                    } 
                                    //nếu k có id (thêm mới, danh sách)
                                    else
                                    {
                                        if($current_tach2==$itemthay['link1'] || $current_tach2==$itemthay['link2'] )
                                        {
                                            $ok=1;
                                            break;
                                        }
                                    }
                                }
                        }
                        $demthay++;
                      
                    }
                }
                $dem++;
            }
            if($ok != 1)
            {
                $dem_mtch=1;
                foreach ($current_tach as $current_tach_ch2) {
                    if($dem_mtch==$tm)
                    {
                        if($current_tach_ch2 != "index.php")
                        {
                           /* echo "<script>alert('bạn có k có quyền truy cập');location.href = '"."index.php';</script>";*/
                            
                        }
                    }
                    $dem_mtch++;
                }
            }
        }
    } 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta http-equiv="Location" content="http://example.com/">
     <?php  //<meta http-equiv="Refresh" content="2; url=../admin/index.php">?> 

    <title>Quản trị hệ thống</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link href="../csslogin/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="../js/jquery.js"></script>

</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="login.php">QUẢN TRỊ HỆ THỐNG</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Xin chào:&nbsp;<?php if(isset($_SESSION['Username'])) echo $_SESSION['Username']  ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="thongtinuser.php"><?php echo $_SESSION['uid'] ?><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>                        
                        <li>
                            <a href="doimatkhau.php"><i class="fa fa-fw fa-gear"></i>Đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include('includes/sidebar.php')?>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->        
<?php ob_flush()?>