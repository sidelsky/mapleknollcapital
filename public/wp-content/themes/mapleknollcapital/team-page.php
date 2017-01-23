<?php
    /*
        Template name: Team Template
    */

    include("header.php");
?>

<!-- Load Team Single content here -->

<!-- START: Loading animation -->
    <div class="loader" id="loading">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
<!-- END: Loading animation -->

<!-- START: Magic door -->
    <div id="door-frame">
        <div id="magic-door" data-url="<?php echo get_template_directory_uri(); ?>/partials/team-item.php"></div>
    </div>
<!-- END: Magic door -->

<!-- START: Cta content -->
    <?php include("partials/cta-content.php"); ?>
<!-- END: Cta content -->

<!-- START: Team grid -->
    <?php include('partials/team-grid.php'); ?>
<!-- END: Team grid -->

<?php include("footer.php"); ?>
