<form class="navbar-form navbar-left">
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Language</a></li>
                    <li><a href="#">Geography</a></li>
                    <li><a href="#">Chemical</a></li>
                    <li><a href="#">Biology</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Entertainment</a></li>
                </ul>
            </div>
            <input type="text" placeholder="Search" class="form-control" value="<?php echo $search; ?>">
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">Go!</button>
            </span>
        </div>
    </div>
</form>