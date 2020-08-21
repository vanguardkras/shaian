<div class="window" id="portfolio">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['portfolio']['title'] ?></div>
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
            <div id="portfolio-tabs">
                <div class="portfolio-tab active" data-filter="*"><?= $data['pages']['portfolio']['all'] ?></div>
                <?php foreach ($data['pages']['portfolio']['categories'] as $category): ?>
                    <div class="portfolio-tab"
                         data-filter=".portfolio-<?= $category['code'] ?>"><?= $category['name'] ?></div>
                <?php endforeach; ?>
            </div>
            <div id="portfolio-content">
                <div class="clearfix" id="portfolio-body">
                    <?php foreach ($data['pages']['portfolio']['contents'] as $key => $content): ?>
                        <div class="float-left portfolio-item portfolio-<?= $content['category_code'] ?>">
                            <a href="<?= $content['link'] ?>" target="_blank">
                                <img src="/img/portfolio/<?= $content['image'] ?>" alt="Portfolio item">
                                <div class="portfolio-item-title">
                                    <span class="gradient-<?= ($key + 1) % 10 ?>"><?= $content['text'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
