<?
include("inc/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive team" src="img/banner.png">
            </div>
            <div class="col-md-6">
                <h2>About BIRDS Lab</h2>
                <p>Birds Lab is a robotics project based out of 4344 EECS Building on University of Michigan's North Campus. BIRDS stands for Biological etc etc etc</p>
                <p>Typical about info goes here. Verbiage TBD.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>
        <div class="col-sm-12 container">
        <? $i = 0; ?>
        <?php foreach(collection("Team")->find() as $item): ?>
        <? if ($i == 0): ?>
        <div class="row">
        <? endif; ?>
            <div class="col-sm-4 teammate">
            <?php
            if ($item["Photo"]){
            echo $item["Photo"];
            }
            else
            echo $item["HostedImage"];
            ?>
                <h3><?php echo $item["Name"];?> <small><?php echo $item["Role"];?></small>
                </h3>
                <p><?php echo $item["Description"];?></p>
                <ul class="list-unstyled list-inline list-social-icons">

                <?php if($item["Facebook"]): ?>
                    <li class="tooltip-social facebook-link"><a href="<?php echo $item["Facebook"];?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                <? endif; ?>
                <?php if($item["LinkedIn"]): ?>
                    <li class="tooltip-social linkedin-link"><a href="<?php echo $item["LinkedIn"];?>" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                <? endif ?>
                <?php if($item["Twitter"]): ?>
                    <li class="tooltip-social twitter-link"><a href="<?php echo $item["Twitter"];?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                <? endif; ?>
                <?php if($item["Gplus"]): ?>
                    <li class="tooltip-social google-plus-link"><a href="<?php echo $item["Gplus"];?>" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                <? endif; ?>
                </ul>
            </div>
            <? if ($i==2): ?>
            </div>
            <? endif;
            $i++;?>
            <? if ($i==3):
            $i=0;
            endif;?>
            <?php endforeach;?>
        </div>

<?
include("inc/footer.php");
?>
