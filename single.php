<?php get_header(); ?>

    <section class="single">
        <div class="inner">
            <div class="single-inner">
                <div class="single-top">
                    <div class="single-top__textArea">
                        <p class="single-top__company"><?php echo CFS()->get('company');?></p>
                        <div class="single-top__titleArea">
                            <img width="18" height="13" src="<?php echo get_template_directory_uri(); ?>/images/double-quotation.png" alt="ダブルクオテーション" class="single-top__doubleQuotation">
                            <h2 class="single-top__title"><?php echo the_title(); ?></h2>
                        </div>
                        <figure class="single-top__imgArea sp-only">
                        <img src="<?php echo CFS()->get('image-sp');?>" alt="クライアント画像" class="single-top__img">
                        </figure>
                        <div class="single-top__nameArea">
                            <p class="single-top__occupation"><?php echo CFS()->get('occupation');?></p>
                            <p class="single-top__name"><?php echo CFS()->get('name');?></p>
                        </div>
                        <p class="single-top__text"><?php echo CFS()->get('text');?></p>
                    </div>
                    <figure class="single-top__imgArea pc-only">
                        <img src="<?php echo CFS()->get('image');?>" alt="クライアント画像" class="single-top__img">
                    </figure>
                </div>
                <div class="single-container">
                    <?php the_content(); ?>
                </div>
                <!-- /.single-container -->
                <div class="single-bottom">
                    <figure class="single-bottom__logoArea">
                        <img src="<?php echo CFS()->get('company-logo'); ?>" alt="ロゴ" class="single-bottom__logo">
                    </figure>
                    <div class="single-bottom__textArea">
                        <p class="single-bottom__companyName"><?php echo CFS()->get('company'); ?></p>
                        <p class="single-bottom__companyDesc"><?php echo CFS()->get('company-desc'); ?></p>
                        <p class="single-bottom__link"><?php echo CFS()->get('url'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.section single -->

<?php get_footer(); ?>