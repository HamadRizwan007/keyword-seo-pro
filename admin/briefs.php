<?php
include('../head.php');
include('sidebar.php')
?>


<!--Container Main start-->
<div class="row mt-120">
    <div class="col-md-8">
        <h4 class="welcome_head_admin">Start creating Content Brief</h4>

        <!-- Search bar -->
        <div class="search_border d-flex mt-50">
            <input class="searchbar_text width_available" type="text" placeholder="Enter a topic/target keyword">


            <div class="filter d-flex">
                <img src="../imgs/close_icon_l.svg">
            </div>
        </div>
        <div class="row">
            <!-- Card 3 -->
            <div class="col-md-6 m-auto">

               
                <div class="row d_grid">
                    <form id="submission_form" class="d_form">
                        <table>
                            <tr>
                                <td class="first_field_r_spacing">
                                    <label class="form_label" for="fname">First
                                        name<span class="red_asterik">*</span></label><br>
                                    <input required class="form_fields" type="text" id="fname" name="fname"
                                        placeholder="Enter your First Name">
                                </td>
                                <td class="first_field_l_spacing">
                                    <label class="form_label" for="lname">Last name</label><br>
                                    <input class="form_fields" type="text" id="lname" name="lname"
                                        placeholder="Enter your Last Name">
                                </td>
                            </tr>
                        </table>

                        <label class="form_label" for="email">Email<span class="red_asterik">*</span></label>
                        <input required class="form_fields" type="email" id="email" name="email"
                            placeholder="Enter your Email Address">

                        <label class="form_label" for="number">Phone Number<span class="red_asterik">*</span></label>
                        <input required class="form_fields" type="number" id="number" name="number"
                            placeholder="Enter your Phone No.">

                        <table>
                            <tr>
                                <div class="row">

                                    <div class="col-md-8 first_field_r_spacing"><label class="form_label"
                                            for="instructions">Instructions<span
                                                class="form_label_optional">(optional)</span>
                                        </label><br>
                                        <textarea class="form_fields txtarea" type="text" id="instructions"
                                            name="instructions"
                                            placeholder="Enter any instructions(optional)"></textarea>
                                    </div>
                                    <div class="col-md-4 first_field_l_spacing">
                                        <label class="form_label">Attach Files</label><br>
                                        <!-- actual upload which is hidden -->
                                        <input type="file" id="actual-btn" hidden />

                                        <!-- our custom upload button -->
                                        <label for="actual-btn" class="width_available">
                                            <div class="col attach_field">
                                                <img class="upload_icon icon_black" src="images/backup_black.png"
                                                    alt="upload icon">
                                                <img class="upload_icon icon_orange" src="images/backup_orange.png"
                                                    alt="upload icon">
                                                <p class="sprtd_file_text">Supported File Types</p>
                                                <p class="formats_text"> PDF,DOCX,DOC,TXT</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            </tr>
                        </table>
                        <center>
                            <div class="g-recaptcha" data-sitekey="6LfTPlUUAAAAAGSUt1_LqpJXQpatx7_BzTDcU9On"></div>
                            <button type="submit" class="proceed_btn">Proceed <span class="arrow_prcd_btn">
                                    <img class="arrow_black" src="images/arrow_right_black.png" alt="proceed icon">
                                    <img class="arrow_orange" src="images/arrow_right_white.png"
                                        alt="proceed icon"></span>
                            </button>
                        </center>
                    </form>
                </div>
            </div>




        </div>

    </div>
</div>

<!--Container Main end-->