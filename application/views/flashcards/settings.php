<?php echo $header; ?>
<div class="ccontent">
    <div class="container">
        <div class="row">
            <?php echo $sidebar; ?>
            <div class="col-sm-9 col-md-9">
                <?php echo $top_sidebar; ?>                
                <h1>
                    Settings - Test
                    <div class="pull-right">
                        <a href="<?php echo site_url('john-doe/test'); ?>" class="btn btn-primary">Back</a>
                    </div>
                </h1>
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
                            <div class="form-group">
                                <label for="tag" class="col-sm-2 control-label">Tag</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="tag" id="tag" placeholder="FlashCards tag"></textarea>
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

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Play Setting
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="default_mode" class="col-sm-2 control-label">Default Mode</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="default_mode" id="default_mode">
                                        <option value="flashcard">Flashcard</option>
                                        <option value="multiple">Multiple Choice</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="default_random" class="col-sm-2 control-label">Default Random</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="default_random" id="default_random">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="random" class="col-sm-2 control-label">Mode</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="random" id="random">
                                        <option value="flashcard">Flashcard</option>
                                        <option value="multiple">Multiple Choice</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="random" class="col-sm-2 control-label">Random</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="random" id="random">
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
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

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Caution
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <h4 class="list-group-item-heading">Remove from Desk</h4>
                            <p class="list-group-item-text">Lorem ipsum dolor sit amet.</p>
                            <button type="button" class="btn btn-danger pull-right">Remove from Desk</button>
                        </div>
                    </div>
                </div> 

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Basic Section
                    </div>
                    <div class="panel-body">                        
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" placeholder="Section name" value="Basic Section">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="description" placeholder="Section description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iure praesentium odit sit excepturi eligendi alias ad dignissimos laborum consequatur. At, rerum, rem repellendus suscipit quia amet illum alias tempore adipisci possimus quibusdam quis libero quae ea corporis necessitatibus dolorem repellat laborum nisi explicabo fugit optio deleniti. Esse, rem, veniam.</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="main-field">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="2" name="question[1]" placeholder="Question">Question Test 1</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="main-additional">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Option 1</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="2" name="option[1][]" placeholder="Option">Option Test 1</textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="radio">
                                            <input type="radio" name="answer[1][]" value="answer" checked>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Option 2</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="2" name="option[1][]" placeholder="Option">Option Test 2</textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="radio">
                                            <input type="radio" name="answer[1][]"  value="answer">
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Option 3</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="2" name="option[1][]" placeholder="Option">Option Test 3</textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="radio">
                                            <input type="radio" name="answer[1][]"  value="answer">
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-primary btn-add">Add Option</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <hr>
                            
                            <div class="main-field">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Question</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="2" name="question[2]" placeholder="Question">Question Test 2</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="main-additional">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Option 1</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="2" name="option[2][]" placeholder="Option">Option Test 1</textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="radio">
                                            <input type="radio" name="answer[2][]" value="answer">
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Option 2</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="2" name="option[2][]" placeholder="Option">Option Test 2</textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="radio">
                                            <input type="radio" name="answer[2][]"  value="answer" checked>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Option 3</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" rows="2" name="option[2][]" placeholder="Option">Option Test 3</textarea>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="radio">
                                            <input type="radio" name="answer[2][]"  value="answer">
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default btn-upload"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-delete"><i class="fa fa-trash-o"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-primary btn-add">Add Option</button>                                        
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-primary btn-add">Add Question</button>  
                                    <button type="submit" class="btn btn-success pull-right">Save</button>  
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
                <p>
                    <button type="button" class="btn btn-primary">Add Section</button>
                </p>
            </div>
        </div>
    </div>
</div>
<?php echo $footer; ?>