<?php echo $header; ?>
<div class="ccontent">
    <div class="container">
        <div class="row">
            <?php echo $sidebar; ?>
            <div class="col-sm-9 col-md-9">
                
                <h1>Play - Test 
                    <div class="pull-right"><a href="<?php echo site_url('john-doe/test'); ?>" class="btn btn-primary">Finish</a></div> 
                </h1>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" style="width: 48%">
                        <span class="sr-only">35%</span>
                    </div>
                    <div class="progress-bar progress-bar-warning" style="width: 16%">
                        <span class="sr-only">20%</span>
                    </div>
                    <div class="progress-bar progress-bar-danger" style="width: 6%">
                        <span class="sr-only">10%</span>
                    </div>
                    <div class="progress-bar progress-bar-info" style="width: 30%">
                        <span class="sr-only">10%</span>
                    </div>
                </div>
                <?php echo $top_sidebar; ?>

                <div class="jumbotron">
                    <h1>おはようございます</h1>
                </div>
                <div class="well">
                    <a href="#" class="btn btn-primary btn-lg">Selamat Malam</a>
                    <a href="#" class="btn btn-primary btn-lg">Selamat Siang</a>
                    <a href="#" class="btn btn-primary btn-lg">Selamat Pagi</a>
                    <a href="#" class="btn btn-primary btn-lg">Selamat Jalan</a>
                    <a href="#" class="btn btn-primary btn-lg">Selamat Makan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>