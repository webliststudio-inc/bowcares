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
                        icon: "bi bi-arrow-left-circle",
                        variant: 'btn-outline',
                        onClick: "_getNextPage({page:'customreInfoPage'});"
                    }, {
                        id: "addressBtn",
                        text: "Save and Continue",
                        icon: "bi bi-arrow-right-circle",
                        iconPosition: "right",
                        onClick: "_getNextPage({page:'summaryPage'});"
                    }]
                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'summaryPage') { ?>
    <div class="form-wrapper">
        <div class="text_area_container" id="messageRequest_container">
            <script>
                textField({
                    id: 'messageRequest',
                    title: 'Describe Your Service Request',
                    type: 'textarea',
                    maxlength: 180,
                });
            </script>
        </div>

        <div class="check-box-container" id="notificationConsent_container">
            <label class="check-box-label">
                <input type="checkbox" id="notificationConsent" name="notificationConsent" value="1">

                <span>
                    By checking this box, I agree to receive emails, notifications, and other important updates from BowCare regarding my service request, including request status, appointment confirmations, service updates, reminders, and other information related to the services I have requested. I can opt out at any time.
                </span>
            </label>
        </div>

        <div class="btn-div btn-flex-end" id="backBtn">
            <script>
                generalButtons({
                    container: "backBtn",
                    buttons: [{
                        id: "backBtn",
                        text: "Back",
                        icon: "bi bi-arrow-left-circle",
                        variant: 'btn-outline',
                        onClick: "_getNextPage({page:'addressPage'});"
                    }, {
                        id: "addressBtn",
                        text: "Submit Request",
                        icon: "bi bi-arrow-right-circle",
                        iconPosition: "right",
                        onClick: "_completeServiceRequest();"
                    }]
                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'galleryDetails') { ?>
    <script>getEachGalleySessionData = JSON.parse(sessionStorage.getItem("getEachGalleySessionData"));</script>

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

                    <script>
                        $(document).ready(function() {
                            const galleryImage = getEachGalleySessionData?.seoFlyer ? galleryPixPath + "/" + getEachGalleySessionData?.seoFlyer + '?t=' + new Date().getTime() : "<?php echo $websiteUrl ?>/all-images/images/defaultPage.jpg";
                            $("#galleryMainImage").attr("src", galleryImage).attr("alt", getEachGalleySessionData?.pageTitle + " Image");
                        });
                    </script>
                </div>

                <div class="bottom-img-div">
                    <div class="inner-img-container">
                        <div class="inner-img-div" id="fetchPagePictures">
                            <script>
                                $(document).ready(function() {
                                    const picturesArray = getEachGalleySessionData?.pagePicturesData ?? [];
                                    let galleryPixHtml = '';

                                    for (let item of picturesArray) {
                                        galleryPixHtml += `
                                            <div class="each-img-div" title="Click to Preview" id="img${item.sn}"
                                                onclick="_viewPreviewImage('img${item.sn}', 'galleryPreviewPix')">
                                                <img src="${pagesPixPath}/${item.pagePix}"
                                                alt="${pageTitle}" />
                                            </div>
                                        `;
                                    }
                                    $('#fetchPagePictures').html(galleryPixHtml);

                                    if (picturesArray.length>0) {
                                        $('.bottom-img-div').show();
                                    } else {
                                        $(".bottom-img-div").hide();
                                    }
                                });
                            </script>                        
                        </div>
                    </div>
                </div>  
            </div>  
                
            <div class="gallery-info-back-div">
                <div class="left-info-container">
                    <h2 id="galleryTitle">
                        <script>
                            $("#galleryTitle").html(getEachGalleySessionData?.pageTitle);
                        </script>
                    </h2>
                    <div class="info-wrapper">
                        <div class="title" id="galleryCategory">
                            <script>
                            $("#galleryCategory").html(getEachGalleySessionData?.professionData?.professionName);
                        </script></div>
                        <div class="info"><i class="bi bi-calendar3"></i> <span id="craetedDate">
                            <script>
                            $("#craetedDate").html(_fetchFormatDate(getEachGalleySessionData?.updatedTime));
                        </script></span></div>
                        <div class="info"><i class="bi bi-images"></i> <span id="galleryCount">
                            <script>
                            $("#galleryCount").html(getEachGalleySessionData?.pagePicturesData?.length);
                        </script></span></div>
                    </div>
                    <p id="galleryDescription">
                        <script>
                            $("#galleryDescription").html(getEachGalleySessionData?.seoDescription);
                        </script>
                    </p>

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
                                        <span id="infoGalleryCategory"><script>
                                            $("#infoGalleryCategory").html(getEachGalleySessionData?.professionData?.professionName);
                                        </script></span>
                                    </div>

                                    <div class="list-content-div"> 
                                        <div>Date</div>
                                        <span id="infoDate"><script>
                                            $("#infoDate").html(_fetchFormatDate(getEachGalleySessionData?.updatedTime));
                                        </script></span>
                                    </div>

                                    <div class="list-content-div"> 
                                        <div>Location</div>
                                        <span id="location"><script>
                                            $("#location").html(getEachGalleySessionData?.location);
                                        </script></span>
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
                <div class="pages-tables-content-div">
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