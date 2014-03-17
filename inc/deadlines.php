<div class="col-lg-4">
    <div class="well">
        <h4>Upcoming Deadlines</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled cushycms"><ul>
                <?php foreach(collection("Deadlines")->find() as $item): ?>
                   <li>
                       <?php echo $item["Task"];?>, Due on <?php echo $item["Due"];?>
                   </li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>