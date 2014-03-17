<?
include("inc/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Appearances
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <?php foreach(collection("Appearances")->find() as $item): ?>
                   <h1>
                       <?php echo $item["Title"];?>
                    </h1>
                    <p class="lead">by <?php echo $item["Author"];?>
                    </p>
                    <hr>
                    <p><i class="fa fa-clock-o"></i> Posted on <?php echo $item["Date"];?> at <?php echo $item["Time"];?></p>
                    <p>
                    <?php echo $item["Content"];?>
                    </p>
                    <hr>
                <?php endforeach;?>
                    <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>
            </div>
<? include("inc/deadlines.php"); ?>
        </div>
    </div>
<?
include("inc/footer.php");
?>
