<html>
    <head>
        <title>Latihan 2 - Controller To View</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="form-group">
                <h1>Login Ke: Iri bilang bos</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-grup">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <hr>
            <?php 
                if(!$this->input->post('username')){}else{
            ?>
            <div class="alert alert-success">

                    <h2>Halloo, <?php echo $this->input->post('username'); ?> !</h2>
                    <p>Password: <?php echo $this->input->post('password'); ?></p>

            </div>
            <?php } ?>
        </div>
    </body>
</html>