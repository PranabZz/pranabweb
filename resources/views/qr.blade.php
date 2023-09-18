<html>
  <head>
    <title>QR GENERATOR</title>
    <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
    <style>
      .generator{
        border:1px solid black;
        padding: 10px;
      }

      .qr_value{
        width:80%;
      }
    </style>
  </head>
  <body>
    <h1>Generate a qr</h1>
    <div class="generator">
      Your linkedin profile: <input type="text" placeholder="account name" class="qr_value" /><br><br>
      <img src="" alt="" class="qr_img"/><br><br>
      <button class="button">Generate</button>
    </div>

    <div class="scanner">
      <div id="qr-reader" style="width: 600px"></div>
      <p class="details"></p>
    </div>

  </body>

</html>
 <script>
        console.log("Hello world");

        const qr_value = document.querySelector('.qr_value');
        const generateBtn = document.querySelector('.button');
        const qr_img = document.querySelector('.qr_img');
        const reader = document.querySelector('.scanner');

        generateBtn.addEventListener("click", () => {
            let qr_value_input = qr_value.value;
            qr_img.src = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${qr_value_input}`;
        });


function onScanSuccess(decodedText, decodedResult) {
    console.log(`Code scanned = ${decodedText}`, decodedResult);
     reader.innerHTML =  decodedText;
}
var html5QrcodeScanner = new Html5QrcodeScanner(
	"qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);

</script>
