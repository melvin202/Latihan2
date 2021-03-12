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
                <h1> CM ke Meter </h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">CM </label>
                        <input type="number" class="form-control" name="bilangan">
                    </div>
                    <div class="form-grup">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <hr>
            <?php 
                if(!$this->input->post('bilangan')){}else{
                $bil = $this->input->post('bilangan');

            ?>
            <div class="alert alert-success">
                    <p><?php echo $bil / 100; ?> Meter</p>
            </div>
            <?php
                }
            ?>
           
           
        </div>
    </body>
</html>