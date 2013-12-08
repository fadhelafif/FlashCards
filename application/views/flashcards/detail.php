<?php echo $header; ?>
<div class="ccontent">
    <div class="container">
        <div class="row">
            <?php echo $sidebar; ?>
            <div class="col-sm-9 col-md-9">                
                <?php echo $top_sidebar; ?>
                <h1>Test
                    <div class="pull-right">
                        <a href="<?php echo site_url('john-doe/test/play'); ?>" class="btn btn-primary">Play</a>
                        <a href="<?php echo site_url('john-doe/test/settings'); ?>" class="btn btn-primary">Settings</a> /
                        <a href="<?php echo site_url('john-doe/test/add-to-desk'); ?>" class="btn btn-primary">Add to desk</a> 
                    </div> 
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
                <p>by <a href="<?php echo site_url('john-doe'); ?>">John Doe</a> 。 1 year ago 。 130,345 views</p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, mollitia, et, ut, odit error similique necessitatibus libero perspiciatis accusantium laborum amet repudiandae sunt ad facilis deleniti nemo sit nostrum voluptates blanditiis rerum ratione cumque consequuntur explicabo soluta maxime aliquam dolores placeat quisquam a hic. Molestias magnam provident molestiae distinctio optio.
                </p>
                <p>
                    <a href="<?php echo site_url('explore?tag=language'); ?>"><span class="label label-info">Language</span></a>
                    <a href="<?php echo site_url('explore?tag=language'); ?>"><span class="label label-info">Japanese</span></a>
                    <a href="<?php echo site_url('explore?tag=language'); ?>"><span class="label label-info">Basic</span></a>
                </p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Section 
                        <div class="pull-right"><a href="#">Reset</a> <a href="#">Hide</a></div> 
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iure praesentium odit sit excepturi eligendi alias ad dignissimos laborum consequatur. At, rerum, rem repellendus suscipit quia amet illum alias tempore adipisci possimus quibusdam quis libero quae ea corporis necessitatibus dolorem repellat laborum nisi explicabo fugit optio deleniti. Esse, rem, veniam.
                        </p>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>State</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td> 
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#"><i class="fa fa-circle text-danger"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td> 
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#"><i class="fa fa-circle text-warning"></i></a>
                                <a href="#"><i class="fa fa-eye-slash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mark</td>
                            <td>Otto</td> 
                            <td>
                                <a href="#"><i class="fa fa-circle text-success"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>  
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Intermediate Section
                        <div class="pull-right"><a href="#">Reset</a> <a href="#">Hide</a></div> 
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iure praesentium odit sit excepturi eligendi alias ad dignissimos laborum consequatur. At, rerum, rem repellendus suscipit quia amet illum alias tempore adipisci possimus quibusdam quis libero quae ea corporis necessitatibus dolorem repellat laborum nisi explicabo fugit optio deleniti. Esse, rem, veniam.
                        </p>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>State</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td> 
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#"><i class="fa fa-circle text-danger"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td> 
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a href="#"><i class="fa fa-circle text-warning"></i></a>
                                <a href="#"><i class="fa fa-eye-slash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td> 
                            <td>
                                <a href="#"><i class="fa fa-circle text-success"></i></a>
                                <a href="#"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>  
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>