<?php get_header(); ?>
    <section class="fv">
        <div class="inner fv-inner">
            <div class="fv-left">
                <h1 class="fv-left__title pc-only">
                    グローバルデザインを<br>
                    提供する伴走型パートナー
                </h1>
                <h1 class="fv-left__title sp-only">
                    伴走型海外デザインパートナー
                    <!-- 海外デザイン<br>伴走型パートナー -->
                </h1>
            </div>
            <div class="fv-right">
                <h4 class="fv-right__subtitle">まるでグローバルデザイン部署を社内に設置するように、海外のプロデザイナーとスムーズに協働できるサービスです。</h4>
                <a href="#" class="btn blackBtn fv-right__btn">
                    <span class="blackBtn-text">問い合わせてみる</span>
                </a>
            </div>
        </div>
        <!-- スライドショー -->
        <div class="fv-slider">   
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img01.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img02.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img03.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img04.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img05.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img06.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img07.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img08.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img09.png" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img10.png" class="fv-slide__img">
            </div>
        </div>
        <!-- <div class="swiper fv-slider">
            <div class="swiper-wrapper noSwiping">
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img01.png" alt="画像1" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img02.png" alt="画像2" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img03.png" alt="画像3" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img04.png" alt="画像4" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img05.png" alt="画像5" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img06.png" alt="画像6" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img07.png" alt="画像7" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img08.png" alt="画像8" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img09.png" alt="画像9" />
                </div>
                <div class="swiper-slide noSwiping">
                    <img class="swiper-slide__img" src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img10.png" alt="画像10" />
                </div>
            </div>
        </div> -->
        <!--/fv-slider--><!-- スライドショーここまで -->
        <a href="#" class="btn blackBtn fv-right__btn fv-right__btn--spOnly">
            <span class="blackBtn-text">問い合わせてみる</span>
        </a>
    </section>
    <!-- /.FV -->

    <section class="section ex" aria-labelledby="id">
        <div class="inner ex-inner">
            <h2 id="ex-title" class="section-title ex-title">世界を舞台とするスタート<br class="sp-only">アップが利用しています</h2>
            <!-- ここ動的（記事） -->
            <!-- 将来的には、数を増やして、カルーセルで！ -->
            <div class="ex-items">
            <?php 
            $args = array(
                'posts_per_page' => 3, //取得する投稿数
                'post_type' => 'post', // 投稿タイプ
                'post_status' => 'publish', // 公開された投稿のみ
            );

            $posts = get_posts( $args );
            foreach ( $posts as $post ) : setup_postdata( $post );
            ?>
                <a href="<?php the_permalink(); ?>" class="ex-item">
                    <div class="ex-item__inner">
                        <img width="32" height="22" src="<?php echo get_template_directory_uri() ?>/images/double-quotation.png" alt="ダブルクオテーション" class="ex-item__doubleQuotation">
                        <p class="ex-item__title"><?php the_title(); ?></p>
                        <div class="ex-item__user">
                            <div class="ex-item__userIconArea">
                                <img src="<?php echo CFS()->get('icon');?>" alt="ユーザーアイコン" class="ex-item__userIcon">
                            </div>
                            <div class="ex-item__userTextArea">
                                <p class="ex-item__userCompany"><?php echo CFS()->get('company');?></p>
                                <p class="ex-item__userPersonal"><?php echo CFS()->get('name');?></p>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endforeach;

            wp_reset_postdata();
            ?>
            </div>
        </div>
    </section>
    <!-- /.ex -->

    <section class="section achievement" aria-labelledby="id">
        <div class="inner achievement-inner">
            <div class="achievement-left">
                <h2 id="achievement-title" class="section-title achievement-title">
                    海外デザイナーによる<br>
                    グローバル基準のデザインを
                </h2>
                <h5 class="section-subtitle achievement-subtitle">
                    グローバルデザインのプロフェッショナルが、共に考え・デザインします。まるであなたの企業のデザイン部門のように機能する、これまでにない伴走型の海外デザインソリューションです。
                </h5>
                <a href="#" class="btn whiteBtn achievement-btn">
                    <span class="whiteBtn-text">無料で実績を見る</span>
                </a>
            </div>
            <div class="achievement-right">
                <img width="320" height="310" src="<?php echo get_template_directory_uri() ?>/images/achivement-img.png" alt="画像" class="achievement-right__img">
            </div>
            <a href="#" class="btn whiteBtn achievement-btn--spOnly">
                <span class="whiteBtn-text">無料で実績を見る</span>
            </a>
        </div>
    </section>
    <!-- /.achievement -->

    <section class="section work" aria-labelledby="id">
        <div class="inner work-inner">
            <h2 id="work-title" class="section-title work-title">どのようなデザインも<br class="sp-only">お任せください</h2>
            <h5 class="section-subtitle work-subtitle">各分野のプロフェッショナルが所属しているためあらゆるデザインがmixerで完結します。</h5>
            <ul class="work-ul">
                <li class="work-list">
                    <img src="<?php echo get_template_directory_uri() ?>/images/work-icon01.png" alt="アイコン" class="work-list__icon">
                    <p class="work-list__title">アプリケーション</p>
                    <p class="work-list__text">グローバルなアプリケーションデザインを得意としています。テストテストテストテス</p>
                </li>
                <li class="work-list">
                    <img src="<?php echo get_template_directory_uri() ?>/images/work-icon02.png" alt="アイコン" class="work-list__icon">
                    <p class="work-list__title">Web</p>
                    <p class="work-list__text">グローバルなアプリケーションデザインを得意としています。テストテストテストテス</p>
                </li>
                <li class="work-list">
                    <img src="<?php echo get_template_directory_uri() ?>/images/work-icon03.png" alt="アイコン" class="work-list__icon">
                    <p class="work-list__title">イラスト</p>
                    <p class="work-list__text">グローバルなアプリケーションデザインを得意としています。テストテストテストテス</p>
                </li>
                <li class="work-list">
                    <img src="<?php echo get_template_directory_uri() ?>/images/work-icon04.png" alt="アイコン" class="work-list__icon">
                    <p class="work-list__title">ロゴ</p>
                    <p class="work-list__text">グローバルなアプリケーションデザインを得意としています。テストテストテストテス</p>
                </li>
                <li class="work-list">
                    <img src="<?php echo get_template_directory_uri() ?>/images/work-icon05.png" alt="アイコン" class="work-list__icon">
                    <p class="work-list__title">バナー</p>
                    <p class="work-list__text">グローバルなアプリケーションデザインを得意としています。テストテストテストテス</p>
                </li>
                <li class="work-list">
                    <img src="<?php echo get_template_directory_uri() ?>/images/work-icon06.png" alt="アイコン" class="work-list__icon">
                    <p class="work-list__title">ドキュメント</p>
                    <p class="work-list__text">グローバルなアプリケーションデザインを得意としています。テストテストテストテス</p>
                </li>
            </ul>
        </div>
    </section>
    <!-- /.work -->

    <section class="section about" aria-labelledby="id">
        <div class="inner about-inner">
            <div class="abtou-left">
                <h2 id="about-title" class="section-title about-title">
                    社内デザイナーに依頼する<br class="sp-only">ように<br class="pc-only">簡単・シームレス
                </h2>
            </div>
            <div class="about-right">
                <h5 class="section-subtitle about-subtitle pc-only">
                    言語の壁を気にすることなく海外の優秀なデザイナーと協働し、世界で通用する高品質なデザインを制作できます。
                </h5>
                <h5 class="section-subtitle about-subtitle sp-only">
                    ストレスなく海外の優秀なデザイナーと協働し、世界で通用する高品質なデザインを制作できます。
                </h5>
                <a href="#" class="btn whiteBtn about-btn">
                    <span class="whiteBtn-text">見積もりを依頼する</span>
                </a>
            </div>
        </div>
        <!-- スマホ実績スライダー部分 -->
        <div class="about-slider">
            <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/images/about-img.png" media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-img-sp.png" alt="スマホ実績画像" class="about-slider__img">
            </picture>
        </div>
    </section>
    <!-- /.about -->

    <section class="section contact" aria-labelledby="id">
        <div class="inner contact-inner">
            <div class="contact-left">
                <h2 id="contact-title" class="section-title contact-title">お問い合わせ</h2>
                <h5 class="section-subtitle contact-subtitle">グローバルを目指す企業のパートナーとしてデザイン課題の解決に向け伴走します。まずはお気軽にお問い合わせください。</h5>
            </div>
            <div class="contact-right">
                <!-- class, action, methodを変更しないでください -->
                <form class="formrun contact-form" action="https://form.run/api/v1/r/nm99lbxn50mwak6ltnvvl4kc" method="post">
                    <dl class="contact-form__dl">
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-company">法人・組織名<span class="require-label">*</span></label></dt>
                            <dd class="contact-form__input">
                                <input name="会社名" id="your-company" type="text" placeholder="mixer株式会社">
                            </dd>
                        </div>
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-email">メールアドレス<span class="require-label">*</span></label></dt>
                            <dd class="contact-form__input">
                                <input name="メールアドレス" id="your-email" type="text" placeholder="example@mixer.deign">
                            </dd>
                        </div>
                    </dl>
                    <dl class="contact-form__dl">
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-name">担当者氏名<span
                                        class="require-label">*</span></label></dt>
                            <dd class="contact-form__input"><input name="お名前" id="your-name" type="text"
                                    placeholder="ミクサー太郎"></dd>
                        </div>
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-number">日中連絡可能な電話番号<span
                                        class="require-label">*</span></label></dt>
                            <dd class="contact-form__input"><input name="電話番号" id="your-number" type="text"
                                    placeholder="080-1234-5678"></dd>
                        </div>
                    </dl>
                    <dl class="contact-form__dl contact-form__textarea">
                        <dt class="contact-form__label"><label class="contact-form__labelText" for="your-message">お問い合わせ内容<span
                                    class="require-label">*</span></label></dt>
                        <dd class="contact-form__input">
                            <textarea name="お問い合わせ" id="your-message" placeholder="ご依頼内容の概要や、その他ご相談などをご記入ください"></textarea>
                        </dd>
                    </dl>
                    <div class="contact-form__submit">
                        <input type="submit" value="送信する">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.contact -->
<?php get_footer(); ?>