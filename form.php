<?php include_once("Account.php")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name= $_GET['name']; 
    $acctNum= $_GET['acctNum'];
    $paymentType= $_GET['payment'];
    $amt= $_GET['amt'];
    
    ?>
<Form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
     <label for="name">Name</label>
     <input type="text" name="name" id="name">
     <label for="acctNum">Account Number</label>
     <input type="Number" name="acctNum" id="acctNum">
     <fieldset>
     <legend>Choose payment type</legend>
    <input type="radio" name="payment" value="withdrawl">
    <label for="radio">Withdrawl</label>
    <input type="radio" name="payment" value="deposit">
    <label for="radio">Deposit</label>
    </fieldset>
    <label for="amt">Amount</label>
    <input type="Number" name="amt" id="amt">
    <input type="submit" name="submit" id="">
</Form>
<div>
    Current Balance: $
<?php 
 $name.$acctNum.$paymentType.$amt;
$acct1 = new Account($name, $acctNum);
if($paymentType=="deposit"){
$acct1->Deposit($amt, date("d/m/y"));
}
if($paymentType=="withdrawl"){
    $acct1->Withdrawl($amt, date("d/m/y"));
    }
echo $acct1->GetBalance();
?>
</div>
</body>
</html>