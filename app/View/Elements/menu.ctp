<div class="row-fluid" style="">
    <div class="span2 visible-desktop"></div>
        <div class="span8">
            <div class="navbar">
	            <div class="navbar-inner">
                    <ul class="nav">
                        <li> <a href="<?php echo Router::Url('/')?>">Joyify</a></li>
                        <li><a href="<?php echo Router::Url('/account/home')?>">Home</a></li>
                        <li><a href="<?php echo Router::Url('/pages/generate')?>">Generate</a></li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
    <div class="span2 visible-desktop"></div>
    <div class="span8">            
        <ul class="nav nav-pills"> 
         <?php if($loggedIn):?>
            <li><a href="<?php echo Router::Url('/account/home')?>">Home</a></li>
            <li><a href="<?php echo Router::Url('/account/joys')?>">Joys</a></li>
            <li><a href="<?php echo Router::Url('/account/aquativity')?>">Aquativity</a></li>
            <li><a href="<?php echo Router::Url('/account/settings')?>">Settings</a></li>
            <li><a href="<?php echo Router::Url('/logout')?>">Log out</a></li>
            <?php else:?>
            <li><a href="<?php echo Router::Url('/account/add')?>">Sign up!</a></li>
            <li><a href="<?php echo Router::Url('/account/login')?>">Log in</a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
