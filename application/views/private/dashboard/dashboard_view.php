<?php include 'dashboard_header.php'; ?>
    <div class="container" style="margin-left: 100px; margin-top: 50px;">
        <div class="row">
            <div class="col-lg-2">
                <a href="<?= site_url('admissions'); ?>"><img src="<?= base_url() ?>/public/assets/img/admission.png"
                                                              height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: -5px;" class="text-info">Admissions</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('attendance/attend_view'); ?>"><img
                            src="<?= base_url() ?>/public/assets/img/attend.png" height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: -4px;" class="text-info">Attendance</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('admin/route_plan'); ?>"><img
                            src="<?= base_url() ?>/public/assets/img/transport.png" height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 2px;" class="text-info">Transport</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('misc'); ?>"><img src="<?= base_url() ?>/public/assets/img/misc.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 20px;" class="text-info">Misc</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('hr'); ?>"><img src="<?= base_url() ?>/public/assets/img/hr.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 25px;" class="text-info">HR</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('discuss'); ?>"><img src="<?= base_url() ?>/public/assets/img/discuss.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 10px;" class="text-info">Discuss</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <a href="<?= site_url('fees/fees_view'); ?>"><img src="<?= base_url() ?>/public/assets/img/fees.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 20px;" class="text-info">Fees</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('library'); ?>"><img src="<?= base_url() ?>/public/assets/img/library.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 15px;" class="text-info">Library</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('tt'); ?>"><img src="<?= base_url() ?>/public/assets/img/tt.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 2px;" class="text-info">Time Table</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('certificates/'); ?>"><img src="<?= base_url() ?>/public/assets/img/cert.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: -2px;" class="text-info">Certificates</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('quiz/'); ?>"><img src="<?= base_url() ?>/public/assets/img/quiz.png"
                                                          height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 27px;" class="text-info">Quiz</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('lms/'); ?>"><img src="<?= base_url() ?>/public/assets/img/lms.png"
                                                          height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 18px;" class="text-info">LMS</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <a href="<?= site_url('dues_list/'); ?>"><img src="<?= base_url() ?>/public/assets/img/dues.png"
                                                                   height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 2px;" class="text-info">Dues List</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('summary/fees_summary'); ?>"><img
                            src="<?= base_url() ?>/public/assets/img/summary.png" height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 2px;" class="text-info">Summary</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('admin/'); ?>"><img src="<?= base_url() ?>/public/assets/img/admin.png"
                                                          height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 15px;" class="text-info">Admin</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('accounts'); ?>"><img src="<?= base_url() ?>/public/assets/img/accounts.png"
                                                          height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 2px;" class="text-info">Accounts</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('exams'); ?>"><img src="<?= base_url() ?>/public/assets/img/exams.png"
                                                          height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 10px;" class="text-info">Exams</p>
            </div>
            <div class="col-lg-2">
                <a href="<?= site_url('calendar'); ?>"><img src="<?= base_url() ?>/public/assets/img/cal.png"
                                                          height="80" width="80"></a><br>
                <p style="font-size: 18px; margin-left: 5px;" class="text-info">Calendar</p>
            </div>
        </div>
    </div>
<?php include 'dashboard_footer.php'; ?>