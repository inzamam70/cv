<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form action="" method="post">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full name" required class="name" name="full_name">
                    <i class="fa-solid fa-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Nick Name" required class="name" name="nick_name">
                    <i class="fa-solid fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Enter Email" required class="name" name="email">
                    <i class="fa-solid fa-envelope icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <h4>Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
            </div>

                <div class="input-box">
                    <h4>Gender</h4>
                    <input type="radio" id="b1" name="gender" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gender"  class="radio">
                    <label for="b2">Female</label>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <h4>Payment Details</h4>
                        <input type="radio" name="pay" id="bc1" checked class="radio">
                        <label for="bc1"><span><i class="fa-brands fa-cc-visa"></i>Credit Card</span></label>
                        <input type="radio" name="pay" id="bc2" class="radio">
                        <label for="bc2"><span><i class="fa-brands fa-cc-paypal"></i>Paypal</span></label>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card-Number" required class="name">
                        <i class="fa-solid fa-credit-card icon"></i>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <input type="tel" placeholder="Card CVC" required class="name">
                        <i class="fa-solid fa-user icon"></i>
                    </div>
                    <div class="input-box">
                        <input type="date">
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <button type="submit">Pay Now</button>
                    </div>
                </div>
            
        </form>
    </div>
</body>
</html>