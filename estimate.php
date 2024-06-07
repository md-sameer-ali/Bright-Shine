<?php
// Template Name: Estimate Page
get_header();
$directory = get_stylesheet_directory_uri();
?>
    <div class="modal estimate_page_modal" id="estimate_page_modal_id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Fill the Form For Estimation</h2>
                    <div class="main_form_area">
                        <?php echo do_shortcode('[contact-form-7 id="daae1e4" title="Contact form Estimate Page Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= COMMON BANNER AREA ============== -->
    <section class="common_banner_area_main"
        style="background-image: url(<?php echo $directory; ?>/img/b1.png);">
        <div class="container">
            <div class="common_banner_area">
                <div class="common_heading_small">
                    <h3>Calculate Your Estimation</h3>
                </div>
                <div class="common_heading_banner">
                    <h2>Estimate</h2>
                </div>
            </div>
        </div>
    </section>
     <!-- ================= ESTIMATE AREA ============== -->
    <section class="services_area_main common_bg_color">
        <div class="container">
            <div class="services_area">
                <div class="service_tab_area">
                    <div class="tabs">
                        <div class="tab_top_area">
                            <ul id="tabs-nav" class="tab_ul">
                                <li><a href="#tab1">Home Cleaning Services</a></li>
                                <li><a href="#tab2">Business Cleaning Services</a></li>
                                <li><a href="#tab3">Moving & Construction Clean-up</a></li>
                            </ul> <!-- END tabs-nav -->
                        </div>
                        <div id="tabs-content">
                            <div id="tab1" class="tab-content">
                                <div class="tab_content_details">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="free_estimate_area">
                                                <div class="common_heading">
                                                    <h2>Free Estimate Of Home Cleaning Service</h2>
                                                </div>

                                                <!-- <div class="range_area">
                                                        <input type="range" min="1000" max="3500" step="100" name='quantity'>
                                                    </div> -->

                                                <div class="level_of_cleaning">
                                                    <p class="cleaning_level_text">Level of Cleaning Needed</p>

                                                    <div class="select_area">
                                                        <select name="service_type" id="">
                                                            <option value="recurring">Recurring</option>
                                                            <option value="one_time">One-time/deep clean</option>
                                                            <option value="mini_service">Pick 2 or 3 Mini Service
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="square_ft_input_area">
                                                        <p class="cleaning_level_text">How Much Square Do You Have?</p>
                                                        <input type="number" name='total_square_ft_input' value="1000" min="0">
                                                    </div>
                                                    <div class="timewise_plan_area">
                                                        <p class="cleaning_level_text">Select Time Period</p>
                                                        <div class="select_area">
                                                            <select name="month-week" id="">
                                                                <option value="0.08">Monthy</option>
                                                                <option value="0.04">Weekly</option>
                                                                <option value="0.06">Bi-Weekly</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="timewise_plan_area">
                                                        <p class="cleaning_level_text">Select Time Period</p>
                                                        <div class="select_area">
                                                            <select name="one_time_cleaning" id="">
                                                                <option value="0.1">One Time</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="addons_area_main">
                                                        <!-- <select name="pick_mini_service" id="">
                                                                <option value="0.01">Kitchen</option>
                                                                <option value="0.02">Bathroom</option>
                                                            </select> -->
                                                        <div class="addons_area">
                                                            <div class="bathroom_input_with_tooltips">
                                                                <label for="kitchen_cleaning">Kitchen</label>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="$25 per kitchen">
                                                                    i
                                                                </button>
                                                            </div>
                                                            <input type="number" name="kitchen_cleaning"
                                                                class="add_number_input" value="1" min="0">
                                                        </div>

                                                        <div class="addons_area">
                                                            <div class="bathroom_input_with_tooltips">
                                                                <label for="bathroom_cleaning">Bathroom</label>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    data-bs-custom-class="custom-tooltip"
                                                                    data-bs-title="$25 per bathroom and $10 per additional bathroom">
                                                                    i
                                                                </button>
                                                            </div>
                                                            <input type="number" name="bathroom_cleaning"
                                                                class="add_number_input" value="1" min="0">
                                                        </div>

                                                        <div class="addons_area">
                                                            <label for="dust_cleaning">Dust (Square Ft. For Dust)</label>
                                                            <input type="checkbox" name="dust_cleaning"
                                                                class="checkbox_input" checked>
                                                        </div>

                                                        <div class="addons_area">
                                                            <label for="floor_cleaning"> Floor (Square Ft. For Floor)</label>
                                                            <input type="checkbox" name="floor_cleaning"
                                                                class="checkbox_input" checked>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="estimate_bill_area" id="estimate_bill_id">
                                                <div class="square_ft_area">
                                                    <p>Base Charge</p>
                                                    <p>$<span class="total" id="classic_base_charge"></span></p>
                                                </div>

                                                <div class="square_ft_area">
                                                    <p id="total_square_ft1">Rate of Square Ft.</p>
                                                    <p>$<span id="total_frequency_rate"></span></p>
                                                </div>

                                                <div class="addon_estimate_area select_disble" id="addon_estimate_id">
                                                    <div class="square_ft_area">
                                                        <p>Kitchen</p>
                                                        <p>$<span id="total_kitchen"></span></p>
                                                    </div>

                                                    <div class="square_ft_area">
                                                        <p>Bathroom</p>
                                                        <p>$<span id="total_bathroom"></span></p>
                                                    </div>

                                                    <div class="square_ft_area">
                                                        <p>dust</p>
                                                        <p>$<span id="total_dust"></span></p>
                                                    </div>

                                                    <div class="square_ft_area">
                                                        <p>floor</p>
                                                        <p>$<span id="total_floor"></span></p>
                                                    </div>
                                                </div>

                                                <div class="square_ft_area total_estimate_area">
                                                    <p>Total</p>
                                                    <p>$<span id="final_price"></span></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="common_btn sent_email_btn1" id="send_calculator_results">Get Your Estimate On Email</button>
                            </div>
                            <div id="tab2" class="tab-content">
                                <div class="tab_content_details">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="free_estimate_area">
                                                <div class="common_heading">
                                                    <h2>Free Estimate Of Office Cleaning</h2>
                                                </div>

                                                <!-- <div class="range_area">
                                                        <input type="range" min="1000" max="3500" step="100" name='quantity'>
                                                    </div> -->

                                                <div class="level_of_cleaning">
                                                    <p class="cleaning_level_text">Level of Cleaning Needed</p>

                                                    <div class="select_area">
                                                        <select name="service_type_office" id="">
                                                            <option value="classic_service_for_office">Classic Service</option>
                                                            <option value="one_time_for_office">One-time/deep clean</option>
                                                        </select>
                                                    </div>

                                                    <div class="square_ft_input_area">
                                                        <p class="cleaning_level_text">How Much Square Do You Have?</p>
                                                        <input type="number" name='total_square_ft_input_for_office' value="1000">
                                                    </div>
                                                    <div class="timewise_plan_area">
                                                        <p class="cleaning_level_text">Select Time Period</p>
                                                        <div class="select_area">
                                                            <select name="month_week_for_office" id="">
                                                                <option value="0.08">Monthy</option>
                                                                <option value="0.04">Weekly</option>
                                                                <option value="0.06">Bi-Weekly</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="timewise_plan_area">
                                                        <p class="cleaning_level_text">Select Time Period</p>
                                                        <div class="select_area">
                                                            <select name="one_time_cleaning_for_office" id="">
                                                                <option value="0.1">One Time</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="estimate_bill_area" id="estimate_bill_id">
                                                <div class="square_ft_area">
                                                    <p>Base Charge</p>
                                                    <p>$<span class="total" id="classic_base_charge_for_office"></span></p>
                                                </div>

                                                <div class="square_ft_area">
                                                    <p id="total_square_ft_for_office">Rate of Square Ft.</p>
                                                    <p>$<span id="total_frequency_rate_for_office"></span></p>
                                                </div>

                                                <div class="square_ft_area total_estimate_area">
                                                    <p>Total</p>
                                                    <p>$<span id="final_price_for_office"></span></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="common_btn sent_email_btn2" id="send_calculator_results_office">Get Your Estimate On Email</button>
                            </div>
                            <div id="tab3" class="tab-content">
                                <div class="tab_content_details">
                                    <section class="pricing_area_main">
                                        <div class="container">
                                            <div class="pricing_area">
                                                <div class="common_sub_heading">
                                                    <h3>Moving & Construction Clean-up Rate</h3>
                                                </div>
                                                <div class="common_heading">
                                                    <h2><span>$60/hour</span> USD</h2>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <button type="button" class="common_btn sent_email_btn3" id="send_calculator_results_moving">Get Your Estimate On Email</button>
                            </div>
                        </div> <!-- END tabs-content -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main_form_area d-none">
        <?php echo do_shortcode('[contact-form-7 id="2cfdc4b" title="Contact form For Result"]'); ?>
    </div>

   <div class="loader_area_main">
        <div><span class="loader-1"> </span></div>
   </div>
    


<?php get_footer();?>