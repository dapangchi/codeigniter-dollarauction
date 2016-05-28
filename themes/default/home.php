<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo theme_view('parts/_head'); ?>
</head>

<body>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Unite.Social</h1>
                <p>Everything in one Place</p>
            </div>
        </div><!-- /.row -->
        <div class="row login-input">
            <?php echo Template::draw(); ?>
        </div>
    </div><!-- /.container -->    
</section><!-- /.section login -->

<?php echo theme_view('parts/_foot'); ?>
<?php echo theme_view('parts/common'); ?>

</body>
</html>
