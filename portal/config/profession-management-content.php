<?php if ($page == 'professionManagement') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div">
                    <i class="bi bi-person-badge"></i>
                </div>
            </div>

            <div class="text-div">
                <div class="back-div">
                    <span
                        title="Click to return to System Settings"
                        onclick="_getActivePage({page:'settingsPage', divid:'settingsPage'});"
                    >
                        <i class="bi-arrow-left"></i> System Settings /
                    </span>
                    Profession Management
                </div>
                <h3>Profession Management</h3>
                <p>
                    Manage and configure professions to maintain accurate professional
                    classifications and support efficient service management.
                </p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input
                    type="text"
                    onkeyup="_filtersProfession(this.value);"
                    placeholder="Search Profession Here..."
                >
                <i class="bi bi-search"></i>
            </div>

            <button
                class="btn"
                title="ADD NEW PROFESSION"
                onclick="sessionStorage.removeItem('useEachProfessionSession'); _getForm({page: 'professionReg', url: portalMiddleWareUrl});"
            >
                <i class="bi-plus-square"></i> ADD NEW PROFESSION
            </button>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-person-badge"></i>
                    <p>Profession Management</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="service-back-div" id="professionContent">
                    <script>_fetchProfessionData();</script> 

                    <div class="content-loading-div">
                        <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                    </div>
                </div>
                <div id="professionContentPaginationControls" class="pagination-div"></div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- /// Profession Registration Form /// -->
<?php if ($page == 'professionReg') { ?>
    <script>
        useEachProfessionSession =
            JSON.parse(sessionStorage.getItem("useEachProfessionSession")) || {};

        $('#pageTitle').html(
            useEachProfessionSession?.professionId
                ? 'UPDATE PROFESSION'
                : 'ADD A NEW PROFESSION'
        );

        $('#subTitle, #subTitle2').html(
            useEachProfessionSession?.professionId
                ? 'update this profession'
                : 'create a new profession'
        );
    </script>

    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div">
                    <i class="bi bi-person-badge"></i>
                </div>
                <h3 id="pageTitle">ADD A NEW PROFESSION</h3>
            </div>

            <div class="btn-div">
                <button
                    class="btn"
                    title="Close"
                    onclick="_alertClose(<?php echo $modalLayer ?>);"
                >
                    <i class="bi bi-x-lg"></i> Close
                </button>
            </div>
        </div>

        <div class="container-back-div">
            <div class="form-notification">
                <p>
                    You are about to
                    <span id="subTitle"></span>.
                    Please complete the form below with accurate details
                    to successfully
                    <span id="subTitle2"></span>.
                </p>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-person-badge"></i>
                            <p>Profession Information</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div
                            class="text_field_container"
                            id="professionName_container"
                        >
                            <script>
                                textField({
                                    id: 'professionName',
                                    title: 'Profession Name',
                                    value: useEachProfessionSession?.professionName,
                                });
                            </script>
                        </div>

                        <div class="text_area_container" id="professionDescription_container">
                            <script>
                                textField({
                                    id: 'professionDescription',
                                    title: 'Profession Description',
                                    type: 'textarea',
                                    value: useEachProfessionSession?.professionDescription ?? ''
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-main-content">
                    <div class="content-title">
                        <label for="professionImage" style="cursor:pointer;" title="Click To Upload Profession Image">
                            <div class="title">
                                <i class="bi-upload"></i>
                                <p>Click To Upload Profession Image</p>
                            </div>
                        </label>
                    </div>

                    <div class="form-container">
                        <div class="pdf-back-div">
                            <label for="professionImage">
                                <div class="div-in" id="video_upload_area">
                                    <div class="pix-div" title="Click To Upload Preview Image">
                                        <img id="professionImagePreview" src="<?php echo $websiteUrl ?>/uploaded_files/professionImages/defaults.png" alt="Default Image">
                                        <input type="file" id="professionImage" style="display:none" accept="*/*" onchange="professionImagePixPreview.UpdatePreview(this);" />
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="issue-text" id="issues_professionImage"></div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            const professionImage = useEachProfessionSession?.professionImage ? professionPixPath + "/" + useEachProfessionSession.professionImage + '?t=' + new Date().getTime() : "<?php echo $websiteUrl ?>/uploaded_files/professionImages/defaults.png";
                            $("#professionImagePreview").attr("src", professionImage).attr("alt", useEachProfessionSession?.professionName + " Image");
                        });
                    </script>
                </div>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-main-content">
                    <div class="content-title">
                        <label for="professionIcon" style="cursor:pointer;" title="Click To Upload Profession icon">
                            <div class="title">
                                <i class="bi-upload"></i>
                                <p>Click To Upload Profession icon</p>
                            </div>
                        </label>
                    </div>

                    <div class="form-container">
                        <div class="pdf-back-div">
                            <label for="professionIcon">
                                <div class="div-in" id="video_upload_area">
                                    <div class="pix-div" title="Click To Upload Pression Icon">
                                        <img id="professionIconPreview" src="<?php echo $websiteUrl ?>/uploaded_files/professionImages/defaults.png" alt="Default Image">
                                        <input type="file" id="professionIcon" style="display:none" accept="*/*" onchange="professionIconPixPreview.UpdatePreview(this);" />
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="issue-text" id="issues_professionIcon"></div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            const professionIcon = useEachProfessionSession?.professionIcon ? professionPixPath + "/" + useEachProfessionSession.professionIcon + '?t=' + new Date().getTime() : "<?php echo $websiteUrl ?>/uploaded_files/professionImages/defaults.png";
                            $("#professionIconPreview").attr("src", professionIcon).attr("alt", useEachProfessionSession?.professionName + " Image");
                        });
                    </script>
                </div>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-main-content">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-person-badge"></i>
                            <p>Profession Status</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="statusId_container">
                            <script>
                                selectField({
                                    id: 'statusId',
                                    title: 'Select Status',
                                    fieldValue: useEachProfessionSession?.statusData?.statusId ?? '',
                                    fieldLabel: useEachProfessionSession?.statusData?.statusName ?? ''
                                });
                                _getSelectStatusId('statusId', '1,2');
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-div">
                <button
                    class="btn"
                    title="SUBMIT"
                    id="submitBtn"
                    onclick="_addAndUpdateProfession();"
                >
                    <i class="bi-check"></i> SUBMIT
                </button>
            </div>
        </div>
    </div>
<?php } ?>