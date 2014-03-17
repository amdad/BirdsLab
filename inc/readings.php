<div class="col-lg-4">
    <div class="well">
        <h4>Readings of Note</h4>
        <div title="Publication Links" class="row cushycms">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                <?php foreach(collection("Readings of Note")->find() as $item): ?>
                    <li><?php echo $item["Link"];?>
                    </li>
                <? endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <div title="Our Recent Publications" class="well cushycms">
        <h4>Our Publications</h4>
        <div class="col-lg-12">
            <ul class="list-unstyled">
            <?php foreach(collection("Our Recent Publications")->find() as $item): ?>
                <li><?php echo $item["Link"];?>
                </li>
            <? endforeach;?>
            </ul>
        </div>
    </div>
</div>