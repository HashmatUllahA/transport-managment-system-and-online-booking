<?php
include "links.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pay3.css">
    <title>payment</title>
</head>
<body>
<div class="navbar">
  <a href="#home">Bus</a>
  <a href="#news">Flight</a>
  <a href="#home">Hotal</a>
  <a href="#news">Cargo</a>
  <a href="#news">Cricket</a>
  <a href="#news">Movies</a>
  <a href="#news">Events</a>
  <a href="#news">Tours</a>
  <a href="#news">Car Rentel </a>
  
  </div> 
</div>
    <div class="contenair">
        <div >
            <h1>Payment Gatway</h1>
        </div>
        <div id="P1" onClick="highlight('P1')" class="img-contenair mybox">
            <img src="/images/payfast-logo.jpg" alt="">
            <b>Debit/created Card (Master and VISA Cards)</b>
        </div>
        <div id="P2" onClick="highlight('P2')" class="img-contenair mybox">
            <img src="/images/2nd.jpg" alt="">
            <b>Debit/created Card (Master and VISA Cards)</b>
        </div>
        <div id="P3" onClick="highlight('P3')" class="img-contenair mybox">
            <img src="/images/easy.jpg" alt="">
            <b>Debit/created Card (Master and VISA Cards)</b>
        </div>
        <div id="P4" onClick="highlight('P4')" class="img-contenair mybox">
            <img src="/images/jaizcash.jpg" alt="">
            <b>Debit/created Card (Master and VISA Cards)</b>
        </div>
        <div id="P5" onClick="highlight('P5')" class="img-contenair mybox">
            <img src="/images/stripe.png" alt="">
            <b>Debit/created Card (Master and VISA Cards)</b>
        </div>
        <div id="P6" onClick="highlight('P6')" class="img-contenair mybox">
            <img src="/images/natepay.png" alt="">
            <b>Debit/created Card (Master and VISA Cards)</b>
        </div>
        d
        <input class="btn btn-info two-btn" onclick="opnePopup()" type="submit" value="checkout">
        
        <div class="popup" id="popup">
                            <div>
                                <h2>Avail for More discount on Sania Express</h2>
                                <button class="close-btn" type="button" onclick="closePopup()">x</button>
                            </div>
                            <label class="text-center">Enter Your Mobile Number to Get Our App Link</label>
                            <label class="lift-text">Route:</label>
                            <div class="form-group ">
                                    
                                    <input  class="text-danger" type="text"  value="" placeholder="type Phone Nomber 03x">
                                    
                            </div>
                            <button class="btn btn-info submit-btn" >Submit</button>
                            <b><h2 style="margin-left: 150px;" class="or">OR</h2></b>

                            <div class="link-to-plystorimg">
                                <a href=""><img src="/images/appstor.png" alt=""></a>
                                <a href=""><img src="/images/5a902dbf7f96951c82922875.png" alt=""></a>
                            </div>

                            
                            
                        </div>

    </div>
    
    <script type="text/javascript">
        function highlight(currentdiv) {
        var divs = document.getElementsByTagName("div");
        for (var i = 0; i < divs.length; i++) {
            if (divs[i].id == currentdiv) {
                divs[i].style.backgroundColor = "#CCC";
            }
            else {
                divs[i].style.backgroundColor = "#000";
            }
        }
        }
        let popup = document.getElementById("popup");

    function opnePopup(){
        popup.classList.add("open-popup");
    }
    function closePopup(){
        popup.classList.remove("open-popup");
    }
</script>
</body>
</html>