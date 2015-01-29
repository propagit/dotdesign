<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!-- jQuery-->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.min.1.11.1.js"></script>

<!-- bootstrap js-->
<script type="text/javascript" src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

<!--app js-->
<script type="text/javascript" src="<?=base_url();?>assets/js/app/app.js"></script>

<!--styles-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/app.css">


<title>Dot Design</title>
</head>
<body>
<header>
	<div id="header" class="center">
        <div class="nav-toggle">
            <a id="nav-toggle" href="javascript:void(0);" data-toggle="modal" data-target="#navModal">
            	<span>
                	<i class="fa fa-bars"></i>
                	<i class="fa fa-angle-down" style="display:none;"></i>
                </span>
                menu
            </a>
        </div>           
        <a href="<?=base_url();?>"><img src="<?=base_url();?>assets/img/core/logo.png" alt="logo.png" title="Dot Design Logo"></a>
    </div>
</header>     

<?php $this->load->view('common/nav');?>





