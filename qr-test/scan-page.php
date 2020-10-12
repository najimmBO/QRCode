<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo-email-150x150.png" type=" image/png">

    <title>qr test</title>
  </head>

<body class="scan-page">

<nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="row">
                <!-- START: Logo PRO-->
                <div class="col-md-6 col-sm-4 col-3 header-logo">
                    <a class="navbar-brand" href="#">
                        <img src="Burj-Asia-Corp-Logo.png" width="100" height="30" alt="">
                        <span class="egoditor-logo__text">QR Code Reader</span>
                    </a>
                </div>
                <!-- END: Logo -->
            </div>
        </div>
       
    </nav>
    <a type="button" href="sign.php" class="btn btn-secondary" style="float:right;margin-top:2rem;margin-right:1rem;"><i class="fas fa-upload" style="margin-right:0.5rem;"></i>Upload signature</a>
    <div id="container">

        

        <a class="btn btn-squared-default-plain btn-success" id="btn-scan-qr">
        <i class="fas fa-qrcode fa-lg"></i>
                    <br />
                    <p class="c2scan">Click to scan</p>
        </a>

        <canvas hidden="" id="qr-canvas"></canvas>

        <div id="qr-result" hidden="">
            <b>Data:</b> <a id="outputData"></a>
        </div>
    </div>


<script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<script src="./src/qrCodeReader.js"></script>




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>