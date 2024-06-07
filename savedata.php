<?php
// Template Name: Save Data
get_header();
$directory = get_stylesheet_directory_uri();
$person_FirstName = $_POST['FirstName'];
$person_LastName = $_POST['LastName'];
$person_email = $_POST['email'];
$person_PhoneNumber = $_POST['PhoneNumber'];
$person_ServiceAddress = $_POST['ServiceAddress'];
$person_NeededService = $_POST['NeededService'];
$person_ContactMethod = $_POST['ContactMethod'];
$person_OnsiteEstimate = $_POST['OnsiteEstimate'];


?>


    <section class="common_banner_area_main contact_area_main" style="background-image: url(<?php echo $directory; ?>/img/b1.png);">
        <div class="container">
            <div class="common_banner_area contact_area">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="main_form_area">
                            <form action="savedata.php" method="post" >
                                <div class="contact_form_area_main">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input_area">
                                                <?php echo $person_FirstName; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input_area">
                                                <?php echo $person_LastName; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input_area">
                                                <?php echo $person_email; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input_area">
                                                <?php echo $person_PhoneNumber; ?>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input_area">
                                                <?php echo $person_ServiceAddress; ?>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="select_area">
                                               <?php echo $person_NeededService; ?>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="select_area">
                                                <?php echo $person_ContactMethod; ?>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="select_area">
                                                <?php echo $person_OnsiteEstimate; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>