<html>
    <head>
        <title>Latihan 2 -</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="form-group">
                <h1> Berapa Jam , Menit dan detik </h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Detik </label>
                        <input type="number" class="form-control" name="detik">
                    </div>
                    <div class="form-grup">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <hr>
            <?php 
                if(!$this->input->post('detik')){
                    
                }else{
                $detik = $this->input->post('detik');
                $hitung_jam = round($detik / 3600);
                $hitung_menit = round((($detik -($hitung_jam*3600)) / 60));
                $detik_total = abs($detik - ($hitung_jam*3600) - ($hitung_menit*60));
            ?>
            <div class="alert alert-success">
                    <p><?php echo $hitung_jam ?> Jam 
                    <?php echo $hitung_menit ?> 
                    Menit <?php echo $detik_total ?> Detik</p>
            </div>
            <?php
                }
            ?>
           
           
        </div>
    </body>
</html>