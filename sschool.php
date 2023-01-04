
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page foor payment</title>
        <style>
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
                padding: 0;
            }
            
            .row::after {
                display: block;
                content: '';
                clear: both;
            }

            .row > div {
                float: left;
                height: 96.5vh;
            }
            .sidebar {
                background-color: rgb(123, 123, 123);
                color: white;
                width: 22%;
            }
            .sidebar .logo {
                border-top: 1px solid white;
                height: 100px;
                align-items: center;
                padding: 5px; 
                display: flex;  
                border-bottom: 1px solid white;
            }
            .sidebar .logo h5 {
                font-size: 13px;
                color: black;
                text-align: center;
            }
            ul {
                list-style-type: none;
                line-height: 300%;
                padding: 20px;
            }
             ul > li >.active  {
                color: rgb(152, 5, 5);
                text-decoration: underline;
                text-decoration-thickness: 2px;

            }
            .sidebar a {
                text-decoration: none;
                color: black;
                padding-left: 10px;
                display: block;
                font-size: 25px;
            }
            .logo img{
                width: 60px;
                height: 60px;
            }
            .content {
                background-color: white;
                width: 78%;
            }
            .content h2 {
                padding-top: 20px;
                text-align: center;
                color: black;
            }.content p {
                padding-top: 17px;
                width: 90%;
                text-align: justify;
                margin: auto;
            }
            input {
                width: 45%;
                height: 1.5rem;
            }
            input[type=checkbox] {
                width: auto;
                padding-right: 23rem;
            }
            select {
                width: 45%;
                height: 1.5rem;
            }
            .c {
                background-color: rgb(123, 123, 123);
                height: 20px;
            }

            .box {
                width: 60%;
                height: 70vh;
                padding-top: 50px;
                text-align: center;
                margin: 50px 0px 50px 200px;
                box-shadow: 4px 7px 2px  #333;
                background-color: rgb(123, 123, 123);
            }
        </style>
</head>
<body>
    <div class="c">

    </div>
    <div class="row">
        <div class="sidebar">
            <div class="logo">
                <img src="./Federal-College-of-Animal-Health-and-Production-Technology-Ibadan-logo-480x482-removebg-preview.png" alt="">
                <h5>Federal-College-of-Animal-Health-and-Production-Technology-Ibadan</h5>
            </div>
            <ul>
                <li><a href="./index.php" >Home</a></li>
                <hr>
                <li><a href="#" class="active">School Fees</a></li>
                <hr>
                <li><a href="#">Deparment</a></li>
                <hr>
                <li><a href="#">Medical</a></li>
                <hr>
                <li><a href="#">SUG</a></li>
                <hr>
                <li><a href="#">State</a></li>
            </ul>
        </div>

        <div class="content">
        <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
 <div class="box">
 
<form action="process.php" id="paymentForm" method="post">

  <div class="form-group">
    <label for="email" style='margin-right: 12rem'>Email Address</label> <br>
    <input type="email" id="email-address" name='email' required /> 
  </div>

  <div class="form-group">
    <label for="first-name" style='margin-right: 13.5rem'>Full Name</label> <br>
    <input type="text" name='name' id="fname"/> <br>
  </div>

  <div class="form-group">
    <label for="" style='margin-right: 13.5rem'>Department</label><br>
   <select name="" id=""> 
   <option value="">---select option---</option>
    <option value="Computer">Computer ND1 - #1500</option>
    <option value="1000">Computer ND2 -#1000</option>
   </select>
  </div>

  <div class="form-group">
    <label for="" style='margin-right: 16rem'>Level</label><br>
   <select name="" id=""> 
   <option value="">---select option---</option>
    <option value="Computer">ND1</option>
    <option value="1000">ND2</option>
    <option value="1000">HND1</option>
    <option value="1000">HND2</option>
   </select>
  </div>

  <div class="form-group">
    <label for="" style='margin-right: 15rem'>Amount</label><br>
   <select name="" id="amount"> 
    <!-- computer department -->  
    <option value="">---select option---</option>
    <option value="100">Computer ND1 - #1500</option>
    <option value="1000">Computer ND2 -#1000</option>
    <option value="1000">Computer HND1 -#1000</option>
    <option value="1000">Computer HND2 -#1000</option>
    <!-- computer department -->

            <!-- slt deparment -->
    <option value="1000">Science Laboratory Technology ND1</option>
    <option value="1000">Science Laboratory Technology ND2</option>
    <!-- slt deparment -->
            <!-- vlt deparment -->
    <option value="1000">Vertinary LAboratory Technology ND1</option>
    <option value="1000">Vertinary LAboratory Technology ND2</option>
    <!-- vlt deparment -->

    <!-- ahm -->
    <option value="1000">Animal Health ND1</option>
    <option value="1000">Animal Health ND2</option>
    <!-- ahm -->

    <option value="1000">Statistic ND1</option>
    <option value="1000">Statistic ND2</option>
   </select>
  </div> <br>

  
 
  <div class="form-submit">
    <input type="submit" name='btn'>
  </div>
 </div>
 
</form>
</body>

<script src="https://js.paystack.co/v1/inline.js"> </script>

<script>
const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_5dea9fa9ca95a7a40750b76c97e0b2e7bbb924eb', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();

}
</script>
<!-- <script>
var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack() {
  var handler = PaystackPop.setup({
    key: 'YOUR_PUBLIC_KEY', // Replace with your public key
    // email: document.getElementById('email-address').value,
    amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
    currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: 'YOUR_REFERENCE', // Replace with a reference you generated
    callback: function(response) {
      //this happens after the payment is completed successfully
      var reference = response.reference;
      var email = response.email;
      alert('Payment complete! Reference: ' + reference);
      alert('Payment complete! Reference: ' + email);
      // Make an AJAX call to your server with the reference to verify the transaction
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
  });
  handler.openIframe();
}
</script> -->

</html>