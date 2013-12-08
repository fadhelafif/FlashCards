<?php echo $header; ?>
<div class="ccontent">
    <div class="container">
        <div class="row">
            <?php echo $sidebar; ?>
            <div class="col-sm-9 col-md-9">
                <h1>New Flash Card</h1>
                <?php echo $top_sidebar; ?>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        General
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="FlashCards name" value="Test">
                                    <span class="help-block">permalink : test</span>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#" class="btn btn-primary">Update</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="FlashCards description"></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-success pull-right">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>