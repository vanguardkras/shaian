<div class="window" id="education">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['education']['title'] ?></div>
        <div class="clearfix float-right window-header-btns">
            <div class="float-left pointer window-header-btn window-expand-btn">
                <i class="lni lni-frame-expand"></i>
            </div>
            <div class="float-left pointer window-header-btn window-close-btn">
                <a href="#"><i class="lni lni-close"></i></a>
            </div>
        </div>
    </div>
    <div class="window-body backdrop" data-simplebar>
        <div class="window-content">
            <div class="education">
                <div class="edu-name"><?= $data['pages']['education']['qualification_title'] ?></div>
                <div class="edu-major"><?= $data['pages']['education']['qualification'] ?></div>
                <div class="edu-duration"><?= $data['pages']['education']['years'] ?></div>
                <div class="edu-institute"><?= $data['pages']['education']['institution'] ?></div>
            </div>
        </div>
    </div>
</div>
