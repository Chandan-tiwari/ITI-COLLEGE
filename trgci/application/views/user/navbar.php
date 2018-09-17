<?php include('header.php');?>

<div class="container">
  <!-- navbar -->
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            
                        <a class="navbar-brand" href="<?php echo base_url('Welcome/index');?>">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="Memorial Private Industrial Training Institute"></a>
        </div
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right mainNav">
                <li class="c4"><a href="<?php echo base_url('Welcome/index');?>">Home</a></li>                    
                <li class="c4"><a href="<?php echo base_url('Welcome/about');?>">About</a></li>
                <li class="c4"><a href="<?php echo base_url('Welcome/schemes');?>">Scheme</a></li>                  <li class="c4"><a href="<?php echo base_url('Welcome/placement');?>">Placement</a></li>   
                <li class="c4"><a href="<?php echo base_url('Welcome/gallery');?>">Gallery</a></li>                 
                <li class="c4"><a href="<?php echo base_url('Welcome/contact');?>">Contact Us</a></li>
                <li class="c4"><a href="<?php echo base_url('Welcome/contact');?>">CODE: 1984</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /.navbar -->


<?php include('footer.php');?>