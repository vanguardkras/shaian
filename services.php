<div class="window" id="services">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['services']['title'] ?></div>
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
            <div id="services-body">
                <div class="clearfix" id="services-body-inner">
                    <?php foreach ($data['pages']['services']['services'] as $service): ?>
                        <div class="float-left service">
                            <div class="service-body">
                                <div class="service-icon">
                                    <i class="lni lni-<?= $service['icon'] ?>"></i>
                                </div>
                                <div class="service-name"><?= $service['name'] ?></div>
                                <div class="service-description line-clamp"><?= $service['description'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
