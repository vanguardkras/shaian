<div class="window" id="about">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['about']['title'] ?></div>
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
            <div id="my-photo">
                <img src="https://via.placeholder.com/200x200" alt="<?= $data['pages']['about']['name'] ?>">
            </div>
            <div id="intro-line"><?= $data['pages']['about']['name'] ?></div>
            <div id="intro-secondary-line"><?= $data['pages']['about']['profession'] ?></div>
            <p id="about-me-lines">
                <?= $data['pages']['about']['text'] ?>
            </p>
            <div id="doc-link">
                <a href="/docs/cv.pdf" download>
                    <i class="lni lni-download"></i>
                    <span><?= $data['pages']['about']['download_cv'] ?></span>
                </a>
            </div>
            <div id="freelance">
                <span><?= $data['pages']['about']['contact_me_text'] ?>
                    <a href="#contact"><?= $data['pages']['about']['contact_me_button'] ?></a></span>
            </div>
        </div>
    </div>
</div>
