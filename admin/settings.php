<?php include 'header.php';?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="sName" class="form-label">Shop Name</label>
                            <input type="text" class="form-control" id="sName" value="BABA ENTERPRISES" />
                        </div>
                        <div class="mb-3">
                            <label for="sAddress" class="form-label">Shop Address</label>
                            <textarea class="form-control" id="sAddress" rows="3" >TIWARIDIH, BADEM, AURANGABAD, BIHAR 824301</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="sgst" class="form-label">G.S.T No.</label>
                            <input type="text" class="form-control" id="sgst" value="JCTPK5432CXXXXX" />
                        </div>
                        <div class="mb-3">
                            <label for="spno" class="form-label">Primary Mob. no.</label>
                            <input type="text" class="form-control" id="spno" value="7368857460" />
                        </div>
                        <div class="mb-3">
                            <label for="sano" class="form-label">Alternate Mob. No.</label>
                            <input type="text" class="form-control" id="sano" value="9430507653" />
                        </div>
                        <div class="mb-3">
                            <label for="semail" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="semail" value="webformerinfotech@gmail.com" />
                        </div>
                        <div class="mb-3">
                            <label for="expiry" class="form-label">Expiry Alert Time (in Days)</label>
                            <input type="text" class="form-control" id="expiry" value="20" />
                        </div>
                        <div class="mb-3">
                            <label for="slogo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="slogo" />
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-primary">Save settings <i
                                class="ri-add-circle-line align-middle ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php include 'footer.php';?>