<?php 

$apiKey = "rzp_test_Ks38CT1WS06WvQ" ;

?>

<form action="app.php" method="POST">
<script
   src="https://checkout.razorpay.com/v1/checkout.js"
    data-key=<?php echo $apiKey ; ?> 
    data-amount=<?php echo $_POST['amount']*100; ?>
    data-currency="INR"
    data-id=<?php echo 'OID'.rand(10,100).'END';?>
    data-buttontext="Pay with Razorpay"
    data-name="RR Corp"
    data-description="product namt"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name=<?php echo $_POST['name'];?>
    data-prefill.email=<?php echo $_POST['email'];?>
    data-prefill.contact=<?php echo $_POST['mobile'];?>
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>



<!-- qtjVnsffWeV1w26JpjcvoIrk -->
 <!-- rzp_test_Ks38CT1WS06WvQ -->