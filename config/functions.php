<?php
function _otherPagesBtn($websiteUrl)
{ ?>
<div class="btn-div slide-btn-div" id="otherPagesBtn">
    <script>
    generalButtons({
        container: "otherPagesBtn",
        buttons: [{
            id: "otherPagesBtn",
            text: "Request For a Service",
            size: "btn-lg",
            icon: "bi bi-calendar-check-fill",
            variant: "btn-secondary"
        }, {
            id: "ff",
            text: "Join Our Team",
            icon: "bi bi-briefcase-fill",
            size: "btn-lg",
            variant: "btn-outline",
            onClick: "window.location.href=artisanSignUpUrl;"
        }]
    });
    </script>
</div>
<?php } ?>

<?php
function _otherPagesTitleContent($props)
{
    global $websiteUrl, $appName;

    $title = $props['title'] ?? '';
    $highlight = $props['highlight'] ?? '';
    $description = $props['description'] ?? '';
    $breadcrumbs = $props['breadcrumbs'] ?? [];
    ?>
<div class="other-pages-back-div">
    <div class="nav-title">
        <ul>
            <?php foreach ($breadcrumbs as $breadcrumb): ?>
            <a href="<?php echo $breadcrumb['url']; ?>">
                <li title="<?php echo htmlspecialchars($breadcrumb['title']); ?>">
                    <?php echo htmlspecialchars($breadcrumb['title']); ?>

                    <?php if (!$breadcrumb['last']) { ?>
                    <span><i class="bi-caret-right-fill"></i></span>
                    <?php } ?>
                </li>
            </a>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="main-content-back-div">
        <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
            <h1 data-aos="fade-in" data-aos-duration="800">
                <?php echo htmlspecialchars($title); ?>
                <?php if ($highlight) { ?>
                <span><?php echo htmlspecialchars($highlight); ?></span>
                <?php } ?>
            </h1>

            <p>
                <?php echo htmlspecialchars($description); ?>
            </p>

            <?php _otherPagesBtn($websiteUrl); ?>
        </div>

        <div class="right-wrapper">
            <div class="form-back-div">
                <div class="main-content-div dash-main-content-div">
                    <div class="tables-content-div">
                        <div class="content-title">
                            <div class="title">
                                <i class="bi-telephone-fill"></i>
                                <p>Request For a Call</p>
                            </div>
                        </div>

                        <div class="inner-table-content">
                            <div class="text_field_container col-3" id="FullName_container">
                                <script>
                                textField({
                                    id: 'FullName',
                                    title: 'Full Name',
                                });
                                </script>
                            </div>

                            <div class="text_field_container col-3" id="contactEmailAddress_container">
                                <script>
                                textField({
                                    id: 'contactEmailAddress',
                                    title: 'Email Address',
                                    type: 'email',
                                });
                                </script>
                            </div>

                            <div class="text_field_container col-3" id="contactPhoneNumber_container">
                                <script>
                                textField({
                                    id: 'contactPhoneNumber',
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
                                        iconPosition: "right"
                                    }]
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}

function _howItWorksSection($extraClass = '') { 
    global $websiteUrl;
    ?>

<section class="body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
    <div class="body-div-in">
        <div class="main-pages-back-div">
            <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                <div class="inner-div">
                    <span class="top-title">HOW IT WORKS</span>
                    <h2>Simple Steps to Get Your <span>Maintenance Done</span></h2>
                </div>

                <div class="btn-div" id="howItWorksButton">
                    <script>
                    generalButtons({
                        container: "howItWorksButton",
                        buttons: [{
                            id: "btnStart",
                            text: "Explore How It Works",
                            icon: "bi bi-arrow-right-circle",
                            iconPosition: "right",
                            link: "<?php echo $websiteUrl ?>/our-work-model"
                        }, ]
                    });
                    </script>
                </div>
            </div>

            <div class="how-it-works-wrapper">
                <div class="how-it-works-section">
                    <div class="how-it-works-back-div">
                        <!-- STEP 1 -->
                        <div class="how-it-works-div maintenance-step active-step" data-step="1" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="step-info">
                                <div class="step-number">1</div>

                                <h3>Call Us</h3>

                                <div class="step-icon">
                                    <i class="bi bi-telephone-inbound"></i>
                                </div>
                            </div>

                            <div class="customer-message-card">
                                <div class="message-user">
                                    <div class="user-avatar">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/customer.png"
                                            alt="Customer">
                                    </div>

                                    <div class="role">
                                        <strong>Customer</strong>
                                        <small>Just now</small>
                                    </div>
                                </div>

                                <p>
                                    Hello, I need help with my electrical system.
                                    Can you assist me?
                                </p>
                            </div>

                            <div class="step-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>

                            <div class="bowcares-card">
                                <div class="bowcares-header">
                                    <div class="bowcares-brand">
                                        <div class="brand-icon">B</div>

                                        <div class="title">
                                            <strong>BowCares Maintenance</strong>
                                            <small>Just now</small>
                                        </div>
                                    </div>

                                    <span class="more-icon">•••</span>
                                </div>

                                <div class="bowcares-content">
                                    <ul>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            Our team answers your call quickly
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            We understand your maintenance need
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            We recommend the best solution
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            You receive an estimated service plan
                                        </li>
                                    </ul>

                                    <div class="service-image">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/bowcare-phone.png"
                                            alt="Call">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- STEP 2 -->
                        <div class="how-it-works-div maintenance-step" data-step="2" data-step="1" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="step-info">
                                <div class="step-number">2</div>

                                <h3>
                                    Schedule<br>
                                    Visitation<br>
                                    Appointment
                                </h3>

                                <div class="step-icon">
                                    <i class="bi bi-calendar3"></i>
                                </div>
                            </div>

                            <div class="customer-message-card">
                                <div class="message-user">
                                    <div class="user-avatar">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/customer-visitation.png"
                                            alt="customer visitation">
                                    </div>

                                    <div class="role">
                                        <strong>Customer</strong>
                                        <small>Just now</small>
                                    </div>
                                </div>

                                <p>
                                    Great! Can we schedule a visitation appointment
                                    for this Friday?
                                </p>
                            </div>

                            <div class="step-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>

                            <div class="bowcares-card">
                                <div class="bowcares-header">
                                    <div class="bowcares-brand">
                                        <div class="brand-icon">B</div>

                                        <div class="title">
                                            <strong>BowCares Maintenance</strong>
                                            <small>Just now</small>
                                        </div>
                                    </div>

                                    <span class="more-icon">•••</span>
                                </div>

                                <div class="bowcares-content">
                                    <ul>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            Choose a convenient date & time
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            We assign the best technician
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            Appointment confirmed instantly
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            You get a reminder before the visit
                                        </li>
                                    </ul>

                                    <div class="service-image">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/calendar.png"
                                            alt="calendar">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- STEP 3 -->
                        <div class="how-it-works-div maintenance-step" data-step="3" data-step="1" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="step-info">
                                <div class="step-number">3</div>

                                <h3>
                                    Get Job<br>
                                    Done
                                </h3>

                                <div class="step-icon">
                                    <i class="bi bi-tools"></i>
                                </div>
                            </div>

                            <div class="customer-message-card">
                                <div class="message-user">
                                    <div class="user-avatar">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/technician.png"
                                            alt="technician">
                                    </div>

                                    <div class="role">
                                        <strong>Technician</strong>
                                        <small>Just now</small>
                                    </div>
                                </div>

                                <p>
                                    We are on-site and working on the issue.
                                </p>
                            </div>


                            <div class="step-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>

                            <div class="bowcares-card">
                                <div class="bowcares-header">
                                    <div class="bowcares-brand">
                                        <div class="brand-icon">B</div>

                                        <div class="title">
                                            <strong>BowCares Maintenance</strong>
                                            <small>Just now</small>
                                        </div>
                                    </div>
                                    <span class="more-icon">•••</span>
                                </div>

                                <div class="bowcares-content">
                                    <ul>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            We inspect the problem thoroughly
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            Professional repairs with quality parts
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            We test to ensure everything works
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            Clean up & quality check completed
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            You approve the completed job
                                        </li>
                                    </ul>

                                    <div class="service-image">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/toolsbox.png"
                                            alt="tools box">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- STEP 4 -->
                        <div class="how-it-works-div maintenance-step" data-step="4" data-step="1" data-aos="fade-left"
                            data-aos-duration="1200">
                            <div class="step-info">
                                <div class="step-number">4</div>

                                <h3>Payment</h3>

                                <div class="step-icon">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                            </div>

                            <div class="customer-message-card">
                                <div class="message-user">
                                    <div class="user-avatar">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/customer-visitation.png"
                                            alt="customer visitation">
                                    </div>

                                    <div class="role">
                                        <strong>Customer</strong>
                                        <small>Just now</small>
                                    </div>
                                </div>

                                <p>
                                    Job well done! How can I make payment?
                                </p>
                            </div>

                            <div class="step-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </div>

                            <div class="bowcares-card">
                                <div class="bowcares-header">
                                    <div class="bowcares-brand">
                                        <div class="brand-icon">B</div>

                                        <div class="title">
                                            <strong>BowCares Maintenance</strong>
                                            <small>Just now</small>
                                        </div>
                                    </div>

                                    <span class="more-icon">•••</span>
                                </div>

                                <div class="bowcares-content">
                                    <ul>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            Secure & convenient payment options
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            Pay online, with card or bank transfer
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            Instant invoice & payment receipt
                                        </li>

                                        <li>
                                            <i class="bi bi-check"></i>
                                            Thank you for choosing BowCares!
                                        </li>
                                    </ul>

                                    <div class="service-image">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/payment.png"
                                            alt="payment">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="how-it-works-progress" data-aos="fade-in" data-aos-duration="1200">
                    <div class="steps">
                        <div class="step active" data-step="1" onclick="_changeMaintenanceStep(1, this)">
                            <div class="circle">1</div>
                        </div>

                        <div class="step" data-step="2" onclick="_changeMaintenanceStep(2, this)">
                            <div class="circle">2</div>
                        </div>

                        <div class="step" data-step="3" onclick="_changeMaintenanceStep(3, this)">
                            <div class="circle">3</div>
                        </div>

                        <div class="step" data-step="4" onclick="_changeMaintenanceStep(4, this)">
                            <div class="circle">4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }

function _customerReviewSection($extraClass = '') { 
    global $websiteUrl;
    ?>

<section id="review-section" class="body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
    <div class="body-div-in">
        <div class="main-pages-back-div">
            <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                <div class="inner-div">
                    <span class="top-title">CUSTOMER REVIEWS</span>
                    <h2>What Our Client <span>Says</span></h2>
                </div>

                <div class="btn-div" id="indexReviewBtn">
                    <script>
                    generalButtons({
                        container: "indexReviewBtn",
                        buttons: [{
                            id: "btnStart",
                            text: "Submit Review",
                            icon: "bi bi-arrow-right-circle",
                            iconPosition: "right",
                            onClick: "_getForm({page: 'reviewForm', url: siteMiddlewareUrl});",
                        },]
                    });
                    </script>
                </div>
            </div>

            <div class="cg-carousel">
                <div class="cg-carousel__container" id="js-carousel_1">
                    <div class="cg-carousel__track js-carousel__track" id="fetchSiteReviews">
                        <div class="cg-carousel__track js-carousel__track" id="fetchSiteReviews">
                            <script>_fetchSiteReviews();</script>
                        </div>

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>                       
                    </div>
                </div>
            </div>

            <div class="slide-btn">
                <button class="btn" title="Previous" id="js-carousel__prev_1"><i
                        class="bi-chevron-double-left"></i></button>
                <button class="btn" title="Next" id="js-carousel__next_1"><i
                        class="bi-chevron-double-right"></i></button>
            </div>
        </div>
    </div>

    <script>
    window['carousel_options_1'] = ({
        items: 4,
        margin: 30,
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        smartSpeed: 650,
        autoplay: false,
        breakpoints: {
            700: {
                slidesPerView: 2,
            },
            1100: {
                slidesPerView: 3,
            },
            1300: {
                slidesPerView: 3,
            }

        }
    });
    </script>
</section>
<?php }