<?php echo $header; ?>
<div class="ccontent">
    <div class="container">
        <div class="row">
            <?php echo $sidebar; ?>
            <div class="col-sm-9 col-md-9">                
                <?php echo $top_sidebar; ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profile
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="FlashCards name" value="John Doe">
                                    <span class="help-block">permalink : john-doe</span>
                                </div>
                                <div class="col-sm-2">
                                    <a href="#" class="btn btn-primary">Update</a>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="Your city" value="Jakarta">
                                </div>
                            </div>                           
                            <div class="form-group">
                                <label for="country" class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="country" id="country">
                                    	<option value="">Your Country</option>
                                        <option value="148" selected>Indonesia</option>
                                        <option value="149">Singapure</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Your description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cover" class="col-sm-2 control-label">Cover</label>
                                <div class="col-sm-10">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" width="100" height="100" src="<?php echo base_url('assets/img/placeholder.jpg'); ?>" alt="FlashCard Cover" ><br>
                                        </a>
                                        <div class="media-body">
                                            <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        </div>
                                    </div>
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