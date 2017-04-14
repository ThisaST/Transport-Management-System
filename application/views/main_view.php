<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Header</title>
    
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/sb-admin-2.min.css')?>"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/metisMenu.min.css')?>"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>"/>
    <link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>"/>

    <style>
        .affix{
            top: 0;
            width: 100%
        }
        .affix + .content {
            padding-top: 50px;
        }
    </style>

</head>
<body>

    <div id="wrapper">
        <div class="headSection">
            <img src="<?=base_url('assets/img/logo.png')?>" height="100"/>
            <span style="color: white; font-size: xx-large; ">
                | Transport Division
            </span>
        </div>

        <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="122" role="navigation" style="margin-bottom: 0; background-color: #F1C40F;">
            
            <?php
                $this->load->view($nevigation_bar);
            ?>

        </nav>

        <div class="content">
            <!-- Renuka: This is needed to preserve affix functionality of the site -->
        </div>

    </div>

    <div<?php if($sidebar) echo ' id="page-wrapper"';?>>
        <br/>
        <?php
            $this->load->view($content);
        ?>
    </div>

    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/metisMenu.min.js')?>"></script>
    <script src="<?=base_url('assets/js/sb-admin-2.js')?>"></script>
    <script src="<?=base_url('assets/js/main.js')?>"></script>
</body>
</html>