<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($title)){echo $title;}else{echo'Simple To Do List';}?></title>
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <script src="<?php echo base_url('public/js/jquery-1.7.2.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/code.js'); ?>"></script>
</head>
<body>
            <div class="container">
                <div class="content">
