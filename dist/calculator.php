<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<header class="container">

</header>
<section class="container">
    <div class="row">
        <div class="col-md-offset-6 col-md-3">
            <div class="panel panel-primary">
                <form action="cal.php" method="post">
                    <fieldset>
                        <legend class="btn-info text-center">Calculator</legend>
                        <?php if(isset($_SESSION['result'])){?>
                            <div class="alert alert-danger text-center">
                                <?php   echo "Output: <strong>".$_SESSION['result']."</strong>"; session_unset();session_destroy(); ?>
                            </div>
                        <?php } ?>
                        <?php if(isset($_SESSION['msg'])){?>
                            <div class="alert alert-warning text-center">
                                <?php   echo "<strong>".$_SESSION['msg']."</strong>"; session_unset();session_destroy(); ?>
                            </div>
                        <?php } ?>
                        <div class="form-group text-center">
                            <label class="form-inline">Number1: </label>
                            <input type="number" class="form-inline" name="number1">
                        </div>
                        <div class="form-group text-center">
                            <label class="form-inline">Number2: </label>
                            <input type="number" class="form-inline" name="number2">
                        </div>
                        <div class="form-inline text-center radio">
                            <label><input type="radio" name="cal" value="add"> Add </label>
                            <label><input type="radio" name="cal" value="subtract"> Subtract </label>
                            <label><input type="radio" name="cal" value="divide"> Divide </label>
                            <label><input type="radio" name="cal" value="multiply"> Multiply </label>
                        </div>
                            <button type="submit" class="btn btn-default center-block">Calculate</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>