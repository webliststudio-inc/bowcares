<?php if ($page == 'pendingRequestPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-hourglass-split"></i></div>
            </div>

            <div class="text-div">
                <h3>Pending Requests</h3>
                <p>Review customer service requests, assign them to artisans, and manage pending jobs to ensure timely service delivery.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersPendingRequests(this.value);" placeholder="Search Request Here...">
                <i class="bi bi-search"></i>
            </div>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-hourglass-split"></i>
                    <p>Pending Requests</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="table-div animated fadeIn">
                    <table class="table" cellspacing="0" style="width:100%">
                        <thead>
                            <tr class="tb-col">
                                <th>SN</th>
                                <th>Request ID</th>
                                <th>Customer Details</th>
                                <th>Request Description</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="pendingRequestPageContent">
                            <script>
                                _fetchPendingRequestData();
                            </script>

                            <tr>
                                <td colspan="20">
                                    <div class="content-loading-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div id="pendingRequestPageContentPaginationControls" class="pagination-div"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>