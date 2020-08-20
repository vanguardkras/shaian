<div class="window" id="experience">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['experience']['title'] ?></div>
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
            <?php foreach ($data['pages']['experience']['experiences'] as $exp): ?>
                <div class="experience">
                    <div class="exp-name"><?= $exp['name'] ?></div>
                    <div class="exp-duration"><?= $exp['duration'] ?></div>
                    <div class="exp-company"><?= $exp['company'] ?></div>
                    <div class="exp-jd"><?= $exp['description'] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
