<?
include("inc/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Teaching
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
           A Summary:</p>
            <ul>
                <li>Fall 2012
                <ul>
                    <li><strong><span style="line-height: 13px;">EECS 498</span></strong>
                        <ul>
                            <li><span style="line-height: 13px;">Course Title: Hands On Robotics</span></li>
                            <li>a robotics course based on building robots using the CKBot modular robot system.</li>
                            <li>See what the course is like: <a href="http://www.birds.eecs.umich.edu/research/handsonrobotics2012/">Hands On Robotics: An Example</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
            </ul>

            <ul>
                <li>Spring 2013
                    <ul>
                        <li><strong>EECS 562</strong>
                        <ul>
                            <li>Course Title: Nonlinear Systems and Control</li>
                            <li>Introduction to the analysis and design of nonlinear systems and nonlinear control systems. Stability analysis using Liapunov, input-output and asymptotic methods. Design of stabilizing controllers using a variety of methods: linearization, absolute stability theory, vibrational control, sliding modes and feedback linearization.</li>
                        </ul>
                        </li>
                        <li><strong>ME 450 </strong>(sponsored two projects)
                            <ul>
                                <li>Course Title: Capstone Design and manufacturing</li>
                                <li>The educational goal of this capstone design and manufacturing experience is to give each student a deep understanding of how to approach open ended challenges <em>by process</em>, and to learn how to creatively catalyze, synthesize, and apply the seemingly fragmented engineering knowledge he/she has acquired at UM to the design &amp; manufacturing of real mechanical systems.</li>
                                <li><a href="http://www.birds.eecs.umich.edu/research/senior-project-2013-scm/">2013 Senior Project: Extending SCM to the Human Scale</a></li>
                                <li><a href="http://www.birds.eecs.umich.edu/research/senior-project-2013-mechapod/">2013 Senior Project: Mechapod</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <?php foreach(collection("Teaching")->find() as $item): ?>
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
                <? include("inc/pager.php");?>
            </div>
        </div>
    </div>

<?
include("inc/footer.php");
?>
