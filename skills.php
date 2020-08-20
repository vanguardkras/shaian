<div class="window" id="skills">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['skills']['title'] ?></div>
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
            <?php foreach ($data['pages']['skills']['skills'] as $skill): ?>
                <div class="skill">
                    <div class="skill-info">
                        <div class="skill-name"><?= $skill['name'] ?></div>
                        <div class="skill-exp"><?= $skill['years'] ?> <?= $data['pages']['skills']['years_exp'] ?></div>
                    </div>
                    <div class="skill-meter" style="width: <?= $skill['percentage'] ?>%">
                        <span><?= $skill['percentage'] ?>%</span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
