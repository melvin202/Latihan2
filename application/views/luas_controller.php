<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan 2 - controller to view</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="form-group">
                <h1> LUAS PERSEGI </h1>
                <form action="<?php echo base_url ('luasp/hitung_luas');?>" method="post">
                    <div class="form-group">
                        <label for="">DMasukkan Angka</label>
                        <input type="number" class="form-control" name="luas">
                    </div>
                    <div class="form-grup">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="alert alert-succes">
            <h6><?php echo $hasil ?></h6>
            </div>
        </div>
    </body>
 </html>