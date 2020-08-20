<div class="window" id="testimonials">
    <div class="window-header">
        <div class="window-title"><?= $data['pages']['testimonials']['title'] ?></div>
        <div class="clearfix float-right window-header-btns">
            <div class="float-left pointer window-header-btn window-expand-btn">
                <i class="lni lni-frame-expand"></i>
            </div>
            <div class="float-left pointer window-header-btn window-close-btn">
                <a href="#"><i class="lni lni-close"></i></a>
            </div>
        </div>
    </div>
    <div class="window-body max-height backdrop" data-simplebar>
        <div class="window-content max-height">
            <?php foreach ($data['pages']['testimonials']['testimonials'] as $key => $testimonial): ?>
            <div class="testimonial max-height flex-center">
                <div class="testimonial-info max-height flex-center gradient-<?= ($key + 3) % 10 ?>">
                    <div class="testimonial-info-body">
                        <div class="testimonial-photo">
                            <img src="/img/testimonials/<?= $testimonial['photo'] ?>" alt="Testimonial photo">
                        </div>
                        <div class="testimonial-person-name"><?= $testimonial['name'] ?></div>
                        <div class="testimonial-person-designation">
                            <span><?= $testimonial['position'] ?>,</span>
                            <a href="<?= $testimonial['link'] ?>" target="_blank">
                                <span><?= $testimonial['company'] ?></span>
                                <b><?= $data['pages']['testimonials']['open_link'] ?></b>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text-cover max-height">
                    <div class="testimonial-text">
                        <div class="testimonial-text-body">
                            <div class="testimonial-text-content"><?= $testimonial['text'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
