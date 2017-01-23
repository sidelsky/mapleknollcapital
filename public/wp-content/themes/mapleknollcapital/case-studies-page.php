<?php
    /*
        Template name: Case Studies Template
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
        <div id="magic-door" data-url="<?php echo get_template_directory_uri(); ?>/partials/case-studies-item.php"></div>
    </div>
<!-- END: Magic door -->

<!-- START: Cta content -->
    <?php include("partials/cta-content.php"); ?>
<!-- END: Cta content -->

<!-- START: Case Studies grid layout -->
    <?php include('partials/case-studies-grid.php') ?>
<!-- END: Case Studies grid layout -->

<?php include("footer.php"); ?>
