


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>
<body>
<br>
<div class="container">
    <div class="col-md-12">
        <div class = "panel panel-primary">
            <div class="panel-heading ">
                <tr>
                    this is a list of city,country and continent
                </tr>
            </div>
            

            <table class="table" class="panel-body" >
                <thead>
                <tr>
                    <th>title</th>
                    <th>genere</th>
                </tr>
                </thead>
                <tbody>
<?php
$films = array(
    array('title'=>'funney movie 3',
        'genere'=>'comedy'));
foreach($films as $row)
{
    ?>
    <tr><td><?php echo $row ['title'];?></td>
        <td><?php echo $row ['genere'];?></td>
    </tr>
<?php
}
?>