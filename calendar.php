<?
include("inc/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Calendar
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <iframe style="border: solid 1px #777;" src="https://www.google.com/calendar/embed?mode=WEEK&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=ea0sei5aqbumrhdji4jr6if3p0%40group.calendar.google.com&amp;color=%235229A3&amp;src=profrevzen%40gmail.com&amp;color=%232952A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" height="800" width="100%" frameborder="0" scrolling="no"></iframe>
            </div>
            <? include("inc/deadlines.php"); ?>
        </div>
    </div>

<?
include("inc/footer.php");
?>
