<?php if ($page == 'customreInfoPage') { ?>
    <div class="form-wrapper">
        <div class="text_field_container col-3" id="FullName_container">
           <script>
            textField({
                id: 'FullName',
                title: 'Full Name',
            });
            </script>
        </div>

        <div class="text_field_container col-3" id="emailAddress_container">
            <script>
            textField({
                id: 'emailAddress',
                title: 'Email Address',
                type: 'email',
            });
            </script>
        </div>

        <div class="text_field_container col-3" id="phoneNumber_container">
            <script>
            textField({
                id: 'phoneNumber',
                title: 'Phone Number',
                type: 'tel',
            });
            </script>
        </div>

        <div class="btn-div" id="formBtn">
            <script>
            generalButtons({
                container: "formBtn",
                buttons: [{
                    id: "formBtn",
                    text: "Save and Continue",
                    icon: "bi bi-arrow-right-circle",
                    width: "btn-full",
                    size: "btn-lg",
                    iconPosition: "right",
                    onClick: "_getNextPage({page:'addressPage'});"
                }]
            });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'addressPage') { ?>
    <div class="form-wrapper">
        <div class="text_field_container col-3" id="addressId_container">
            <script>
                textField({
                    id: 'addressId',
                    title: 'Address',
                });
            </script>
        </div>
                
        <div id="map" style="height: 190px; border-radius: 12px;"></div>

        <div class="btn-div btn-flex-end" id="backBtn">
            <script>
                generalButtons({
                    container: "backBtn",
                    buttons: [{
                        id: "backBtn",
                        text: "Back",
                        size: "btn-lg",
                        icon: "bi bi-arrow-left-circle",
                        variant: 'btn-outline',
                        onClick: "_getNextPage({page:'customreInfoPage'});"
                    }, {
                        id: "addressBtn",
                        text: "Save and Continue",
                        icon: "bi bi-arrow-right-circle",
                        size: "btn-lg",
                        iconPosition: "right",
                        onClick: "_getNextPage({page:'consentPage'});"
                    }]
                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'galleryDetails') { ?>
    <div class="user-profile-div" data-aos="fade-left" data-aos-duration="900" onclick="event.stopPropagation();">
        <div class="form-title-wrapper">
            <div class="form-title-div">
                <div class="icon-div"><i class="bi bi-images"></i></div>
                <h3 id="pageTitle">GALLERY</h3>
            </div>
            <div class="btn-div">
                <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                    <i class="bi bi-x-lg"></i> Close
                </button>
            </div>
        </div>

        <div class="profile-content-div">
            <div class="main-picture-back-div">
                <div class="main-picture-div gallery-main-picture-div" id="galleryPreviewPix">
                    <img id="galleryMainImage" src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg" alt="Gallery" />
                    <button class="gallery-nav-btn gallery-prev" id="galleryPrevBtn" onclick="_navigateGallery(-1);">
                        <i class="bi bi-chevron-left"></i>
                    </button>

                    <button class="gallery-nav-btn gallery-next" id="galleryNextBtn" onclick="_navigateGallery(1);">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                <div class="bottom-img-div">
                    <div class="inner-img-container">
                        <div class="inner-img-div" id="fetchPagePictures">
                            <div class="each-img-div" title="Click to Preview" id="img1"
                                onclick="_viewPreviewImage('img1', 'galleryPreviewPix')">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg" alt="Plumber Repairing" />
                            </div>

                            <div class="each-img-div" title="Click to Preview" id="img2"
                                onclick="_viewPreviewImage('img2', 'galleryPreviewPix')">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg" alt="Plumber Repairing" />
                            </div>

                            <div class="each-img-div" title="Click to Preview" id="img3"
                                onclick="_viewPreviewImage('img3', 'galleryPreviewPix')">
                               <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg" alt="Plumber Repairing" />
                            </div>

                            <div class="each-img-div" title="Click to Preview" id="img4"
                                onclick="_viewPreviewImage('img4', 'galleryPreviewPix')">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg" alt="Plumber Repairing" />
                            </div>
                        </div>
                    </div>
                </div>  
            </div>  
                
            <div class="gallery-info-back-div">
                <div class="left-info-container">
                    <h2>Emergency Plumbing Repair</h2>
                    <div class="info-wrapper">
                        <div class="title">Plumbing</div>
                        <div class="info"><i class="bi bi-calendar3"></i> <span>May 15, 2026</span></div>
                        <div class="info"><i class="bi bi-images"></i> <span>18</span></div>
                    </div>
                    <p>Take a look at our skilled technicians delivering reliable maintenance and repair services with precision, professionalism, and attention to detail. Every project reflects our commitment to quality workmanship and customer satisfaction.</p>

                    <h4>Share this photo</h4>
                    <div class="social-info">
                        <a href="" title="YouTube">
                            <li><i class="bi-youtube"></i></li>
                        </a>
                        <a href="https://web.facebook.com" target="_blank" title="Facebook">
                            <li><i class="bi-facebook"></i></li>
                        </a>
                        <a href="https://twitter.com" target="_blank" title="Twitter">
                            <li><i class="bi-twitter"></i></li>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" title="Instagram">
                            <li><i class="bi-instagram"></i></li>
                        </a>
                        <a href="https://api.whatsapp.com/send?text=Hello AfooTECH Global&amp;phone=+234 812 700 0262"
                            target="_blank" title="Whatsapp">
                            <li><i class="bi-whatsapp"></i></li>
                        </a>
                    </div>
                </div>
                
                <div class="right-info-container">
                    <div class="main-content-div dash-main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title">
                                    <i class="bi bi-image"></i>
                                    <span>Image Information</span>
                                </div>
                            </div>

                            <div class="inner-table-content colum-table-content">
                                <div class="list-content-wrapper">
                                    <div class="list-content-div"> 
                                        <div>Category</div>
                                        <span>Plumbing</span>
                                    </div>

                                    <div class="list-content-div"> 
                                        <div>Date</div>
                                        <span>May 15, 2026</span>
                                    </div>

                                    <div class="list-content-div"> 
                                        <div>Location</div>
                                        <span>Texas, USA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'reviewForm') { ?>
    <div class="slide-form-div" data-aos="fade-in" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-container">
                <div class="icon-div"><i class="bi bi-chat-quote-fill"></i></div>
                <h3 id="pageTitle">WRITE A REVIEW</h3>
            </div>
            
            <div class="btn-div">
                <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                    <i class="bi bi-x-lg"></i> Close
                </button>
            </div>
        </div>

        <!-- /////////// Title ////////////////////////////// -->
        <div class="container-back-div">
            <div class="form-notification">
               <p>You are about to share your experience</span>.
                Please complete the form below with accurate details to successfully submit your review</span>.
                </p>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="other-tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-chat-quote-fill"></i>
                            <p>Write your review here</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="fullName_container">
                            <script>
                                textField({
                                    id: 'fullName',
                                    title: 'Full Name',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="emailAddress_container">
                            <script>
                                textField({
                                    id: 'emailAddress',
                                    title: 'Email Address',
                                    type: 'email',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="phoneNumber_container">
                            <script>
                                textField({
                                    id: 'phoneNumber',
                                    title: 'Phone Number',
                                    type: 'tel',
                                });
                            </script>
                        </div>

                        <div class="text_area_container" id="message_container">
                            <script>
                                textField({
                                    id: 'message',
                                    title: 'Write Your Review',
                                    type: 'textarea',
                                    maxlength: 180,
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" title="Send Review" id="submitBtn" onclick="_submitReview('REVIEW');">
                    <i class="bi-send-check"></i> Send
                </button>
            </div>
        </div>
    </div>
<?php } ?>