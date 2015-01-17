<?php
    session_start();



        if (empty($_POST['number1']) && empty($_POST['number2'])) {
            $_SESSION['msg']="Number1 and Number2 is required";
            header('location: calculator.php');
        }
        else {
            if ($_POST['cal'] == 'add') {
                $_SESSION['result']=add($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            } elseif ($_POST['cal'] == 'subtract') {
                $_SESSION['result']=subtract($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            } elseif ($_POST['cal'] == 'divide') {
                $_SESSION['result']=divide($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            } elseif ($_POST['cal'] == 'multiply') {
                $_SESSION['result']=multiply($_POST['number1'], $_POST['number2']);
                header('location: calculator.php');
            }
            else{
                $_SESSION['msg']="Firstly select Add or Subtract or Divide or Multiply...";
                header('location: calculator.php');
            }
        }

        function add($num1, $num2)
        {
            return $num1 + $num2;
        }

        function subtract($num1, $num2)
        {
            if ($num1 > $num2) {
                return $num1 - $num2;
            } else {
                $_SESSION['msg'] = "Number1 should be larger than Number2";
                header('location: calculator.php');
            }
        }

        function divide($num1, $num2)
        {
            if ($num2==0 ) {
                $_SESSION['msg'] = "Can not Divide";
                header('location: calculator.php');
            } else {
                return $num1 / $num2;
            }
        }

        function multiply($num1, $num2)
        {
            return $num1 * $num2;
        }
