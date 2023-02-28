<section id="about-procedure">
    <div class="container">
        <div class="title-heading-about">
            <h2>Quy trình làm việc</h2>
            <p>Quy trình làm việc của Hoàng Anh Website</p>
        </div>
        <div class="row">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="col-lg-2 col-md-2 col-sm-6 items-procedure">
                    <div class="box-procedure">
                        <div class="procedure-thumbs">
                            <span class="color_<?= $i ?>">0<?= $i ?></span>
                        </div>
                        <div class="procedure-info">
                            <p>Tư vấn và lấy ý tưởng
                                khách hàng xây dựng
                                website</p>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>
</section>