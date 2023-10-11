<h1>How to generate QR code in Laravel</h1>

<div class="container">
  <!-- generate function from simple-qr code package -->

 
  {{QrCode::generate('http://127.0.0.1:8000/code');}}
  <img src="/qrcode.png">
</div>


</div>