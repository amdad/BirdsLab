<?
include("inc/header.php");
include("inc/modal.php");

?>
<style>
iframe,embed,img{
width:450px;
height:300px;
}
</style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Media
                </h1>
            </div>
        </div>
        <div class="row">
<?php foreach(collection("Media")->find() as $item): ?>
            <div class="col-md-1">
                <?php
                $string = '';
                $media = $item["MediaType"];
                switch ($media) {
                case 'Picture':
                    $string = 'camera';
                    break;
                case 'Video':
                    $string = 'film';
                    break;
                case 'Document':
                    $string = 'file-text';
                    break;
            }

                ?>
                <p><i class="fa fa-<?= $string ?> fa-4x"></i>
                </p>
                <p><?php echo $item["Date"];?></p>
            </div>
            <div class="col-md-5">
            <?php if ($item["Media"]) echo $item["Media"];
            else echo $item["HostedFile"];?>
            </div>
            <div class="col-md-6">
                <h3><?php echo $item["Title"];?></h3>
                <p><?php echo $item["Description"];?>
                </p>
            </div>
        </div>
        <hr />
<?php endforeach;?>

        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
<?
include("inc/footer.php");
?>