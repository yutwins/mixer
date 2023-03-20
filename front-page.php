<?php get_header(); ?>
<div id="front-page">
    <section class="fv">
        <div class="inner fv-inner">
            <div class="fv-left">
                <h1 class="fv-left__title pc-only">
                    グローバルデザインを<br>
                    提供する伴走型パートナー
                </h1>
                <h1 class="fv-left__title sp-only">
                    伴走型海外デザインパートナー
                </h1>
            </div>
            <div class="fv-right">
                <h4 class="fv-right__subtitle">まるでグローバルデザイン部署を社内に設置するように、海外のプロデザイナーとスムーズに協働できるサービスです。</h4>
                <a class="btn blackBtn fv-right__btn js-contact__btn">
                    <span class="blackBtn-text">問い合わせてみる</span>
                </a>
            </div>
        </div>
        <!-- スライドショー -->
        <div class="fv-slider">
            <div class="fv-slider__wrap">
                <ul class="fv-slider__list fv-slider__list--left">
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img01.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img02.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img03.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img04.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img06.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img07.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img08.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img09.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img10.webp" alt></li>
                 </ul>
                 <ul class="fv-slider__list fv-slider__list--left">
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img01.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img02.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img03.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img04.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img06.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img07.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img08.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img09.webp" alt></li>
                    <li class="fv-slider__item"><img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img10.webp" alt></li>
                 </ul>
            </div>
        </div>
        <!-- <div class="fv-slider">   
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img01.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img02.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img03.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img04.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img06.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img07.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img08.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img09.webp" class="fv-slide__img">
            </div>
            <div class="fv-slide">
                <img src="<?php echo get_template_directory_uri() ?>/images/fv-slider-img10.webp" class="fv-slide__img">
            </div>
        </div> -->
        <!--/fv-slider-->
        <a class="btn blackBtn fv-right__btn fv-right__btn--spOnly js-contact__btn--sp">
            <span class="blackBtn-text">問い合わせてみる</span>
        </a>
    </section>
    <!-- /.FV -->

    <section id="ex" class="section ex" aria-labelledby="id">
        <div class="inner ex-inner">
            <h2 id="ex-title" class="section-title ex-title">世界を舞台とするスタート<br class="sp-only">アップが利用しています</h2>
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
                                <img width="70" height="70" src="<?php echo CFS()->get('icon');?>" alt="ユーザーアイコン" class="ex-item__userIcon">
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
                <a class="btn whiteBtn achievement-btn js-free__btn">
                    <span class="whiteBtn-text">無料で実績を見る</span>
                </a>
            </div>
            <div class="achievement-right">
                <img width="340" height="340" src="<?php echo get_template_directory_uri() ?>/images/achievement-img.png" alt="画像" class="achievement-right__img">
            </div>
            <a class="btn whiteBtn achievement-btn--spOnly js-free__btn">
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
                    <div class="work-list__container">
                        <img width="72" height="72" src="<?php echo get_template_directory_uri() ?>/images/work-icon01.png" alt="アイコン" class="work-list__icon work-list__icon01">
                        <p class="work-list__title">ソフトウェア</p>
                        <p class="work-list__text">プロダクトの深層から表層まで包括する本質的なUI/UXのデザイン</p>
                    </div>
                </li>
                <li class="work-list">
                    <div class="work-list__container">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/images/work-icon02.png" alt="アイコン" class="work-list__icon work-list__icon02">
                        <p class="work-list__title">Webサイト</p>
                        <p class="work-list__text">トレンドを取り入れたビジュアルと目的の達成を実現する各種Webサイトのデザイン</p>
                    </div>
                </li>
                <li class="work-list">
                    <div class="work-list__container">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/images/work-icon03.png" alt="アイコン" class="work-list__icon work-list__icon03">
                        <p class="work-list__title">イラストレーション</p>
                        <p class="work-list__text">グローバルスタンダードに準拠したあらゆるテイストのイラスト制作</p>
                    </div>
                </li>
                <li class="work-list">
                    <div class="work-list__container">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/images/work-icon04.png" alt="アイコン" class="work-list__icon work-list__icon04">
                        <p class="work-list__title">ロゴ</p>
                        <p class="work-list__text">会社やサービスの根底にある強い想いや考えをビジュアライズするロゴデザイン</p>
                    </div>
                </li>
                <li class="work-list">
                    <div class="work-list__container">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/images/work-icon05.png" alt="アイコン" class="work-list__icon work-list__icon05">
                        <p class="work-list__title">バナー</p>
                        <p class="work-list__text">広告クリエイティブ、サムネイルなど、目的に沿った効果的なバナーデザイン</p>
                    </div>
                </li>
                <li class="work-list">
                    <div class="work-list__container">
                        <img width="40" height="40" src="<?php echo get_template_directory_uri() ?>/images/work-icon06.png" alt="アイコン" class="work-list__icon work-list__icon06">
                        <p class="work-list__title">ドキュメント</p>
                        <p class="work-list__text">ホワイトペーパー、セールス資料などの効果的な情報設計とビジュアルの制作</p>
                    </div>
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
                <a class="btn whiteBtn about-btn js-estimate__btn">
                    <span class="whiteBtn-text">見積もりを依頼する</span>
                </a>
            </div>
        </div>
        <div class="about-slider">
            <ul class="about-slider__ul">
                <li class="about-slider__list"></li>
                <li class="about-slider__list"></li>
                <li class="about-slider__list"></li>
                <li class="about-slider__list"></li>
            </ul>
        </div>
    </section>
    <!-- /.about -->

    <section id="contact" class="section contact" aria-labelledby="id">
        <div class="inner contact-inner">
            <div class="contact-left">
                <h2 id="contact-title" class="section-title contact-title">お問い合わせ</h2>
                <h5 class="section-subtitle contact-subtitle">グローバルを目指す企業のパートナーとしてデザイン課題の解決に向け伴走します。まずはお気軽にお問い合わせください。</h5>
            </div>
            <div class="contact-right">
                <form class="formrun contact-form" action="https://form.run/api/v1/r/nm99lbxn50mwak6ltnvvl4kc" method="post">
                    <dl class="contact-form__dl">
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-company">法人・組織名<span class="require-label">*</span></label></dt>
                            <dd class="contact-form__input">
                                <input name="会社名" id="your-company" type="text" placeholder="mixer株式会社" required>
                            </dd>
                        </div>
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-email">メールアドレス<span class="require-label">*</span></label></dt>
                            <dd class="contact-form__input">
                                <input name="メールアドレス" id="your-email" type="text" placeholder="example@mixer.deign" required>
                            </dd>
                        </div>
                    </dl>
                    <dl class="contact-form__dl">
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-name">担当者氏名<span
                                        class="require-label">*</span></label></dt>
                            <dd class="contact-form__input"><input name="お名前" id="your-name" type="text"
                                    placeholder="ミクサー太郎" required></dd>
                        </div>
                        <div class="contact-form__row">
                            <dt class="contact-form__label"><label class="contact-form__labelText" for="your-number">日中連絡可能な電話番号<span
                                        class="require-label">*</span></label></dt>
                            <dd class="contact-form__input"><input name="電話番号" id="your-number" type="text"
                                    placeholder="080-1234-5678" required></dd>
                        </div>
                    </dl>
                    <dl class="contact-form__dl contact-form__textarea">
                        <dt class="contact-form__label"><label class="contact-form__labelText" for="your-message">お問い合わせ内容<span
                                    class="require-label">*</span></label></dt>
                        <dd class="contact-form__input">
                            <textarea name="お問い合わせ" id="your-message" placeholder="ご依頼内容の概要や、その他ご相談などをご記入ください" required></textarea>
                        </dd>
                    </dl>
                    <div class="contact-form__submit">
                        <input id="submit-btn" type="submit" value="送信する">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /.contact -->
</div>
<?php get_footer(); ?>