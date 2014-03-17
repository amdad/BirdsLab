<?
include("inc/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Publications
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <strong>For a searchable list of publications, talk abstract and patents <a href="http://shrevzen.nfshost.com/searchable-list.html">click here</a></strong>
                    <ul>
                        <li><a href="http://shrevzen.nfshost.com/publications.html#pr">Peer-Reviewed Publications</a></li>
                        <li><a href="http://shrevzen.nfshost.com/publications.html#ip">Invited Papers, Tutorials, Book Chapters and Theses</a></li>
                        <li><a href="http://shrevzen.nfshost.com/publications.html#cf">Conferences</a></li>
                        <li><a href="http://shrevzen.nfshost.com/publications.html#pt">Patents</a></li>
                        <li><a href="http://shrevzen.nfshost.com/publications.html#ur">In Preparation / Under Review</a></li>
                    </ul>
                </div>
                <p><a name="pr"></a><a name="pr"></a></p>
                <h2>Peer-Reviewed Publications</h2>
                <div>
                    <ul>
                    <?php foreach(collection("Peer Reviewed Publications")->find() as $item): ?>
                       <li>
                           <?php echo $item["Citation"];?>
                       </li>
                    <?php endforeach;?>
                    </ul>
                </div>
                <p><a name="ip"></a><a name="ip"></a></p>
                <h2>Invited Papers, Tutorials, Book Chapters and Theses</h2>
                <div>
                    <ul>
                    <?php foreach(collection("Invited Papers, etc")->find() as $item): ?>
                       <li>
                           <?php echo $item["Citation"];?>
                       </li>
                    <?php endforeach;?>
                    </ul>
                </div>
                <p><a name="cf"></a><a name="cf"></a></p>
                <h2>Conferences</h2>
                <div>
                    <ul>
                    <?php foreach(collection("Conferences")->find() as $item): ?>
                       <li>
                           <?php echo $item["Citation"];?>
                       </li>
                    <?php endforeach;?>
                    </ul>
                </div>
                <p><a name="pt"></a><a name="pt"></a></p>
                <h2>Patents</h2>
                <div>
                    <ul>

                    <?php foreach(collection("Patents")->find() as $item): ?>
                       <li>
                           <?php echo $item["Citation"];?>
                       </li>
                    <?php endforeach;?>
                    </ul>
                </div>
                <p><a name="ur"></a><a name="ur"></a></p>
                <h2>In Preparation / Under Review</h2>
                <div>
                    <ul>
                    <?php foreach(collection("In Preparation / Under Review")->find() as $item): ?>
                       <li>
                           <?php echo $item["Citation"];?>
                       </li>
                    <?php endforeach;?>
                    </ul>
                </div>
            </div>
                        <? include("inc/readings.php"); ?>
        </div>

    </div>

<?
include("inc/footer.php");
?>
