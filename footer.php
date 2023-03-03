<footer class="footer">
        <div class="inner footer-inner">
            <div class="footer-upper">
                <div class="footer-upper__left">
                    <a href="<?php echo esc_url(home_url( '/' )); ?>" class="footer-logoArea">
                        <img src="<?php echo get_template_directory_uri() ?>/images/Logo-main.png" alt="会社ロゴ" class="footer-logoArea__img">
                    </a>
                    <ul class="footer-ul">
                        <li class="footer-list">
                            <a href="https://0xmixer.notion.site/mixer-2a94929ffde1446fa6248d5a185ce590" class="footer-list__item">運営会社</a>
                        </li>
                        <li class="footer-list">
                            <a href="https://0xmixer.notion.site/e61d0bcdb1d94f8096fb611805855678" class="footer-list__item">プライバシーポリシー</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-upper__right">
                    <ul class="footer-sns">
                        <li class="footer-sns__list">
                            <a href="https://twitter.com/0x_mixer" target="_blank" rel="noopener" class="footer-sns__listItem footer-sns__listItem01"><img src="<?php echo get_template_directory_uri() ?>/images/icon-twiter.png" alt="ツイッターアイコン" class="footer-sns__listIcon"></a>
                        </li>
                        <li class="footer-sns__list">
                            <a href="https://www.linkedin.com/company/mixerdesignstudios/" target="_blank" rel="noopener" class="footer-sns__listItem footer-sns__listItem02"><img src="<?php echo get_template_directory_uri() ?>/images/icon-linkdin.png" alt="LinkedInアイコン" class="footer-sns__listIcon"></a>
                        </li>
                    </ul>
                    <!-- ここに日本語/英語が入る -->
                </div>
            </div>
            <p class="footer-copyright">&copy; 2023 mixer Inc.</p>
        </div>
    </footer>
    <!-- /.footer -->

    <div class="cta">
        <div class="cta-inner">
            <a href="<?php echo esc_url(home_url( '/' )); ?>" class="cta-logo">
                <img src="<?php echo get_template_directory_uri() ?>/images/Logo-white.png" alt="会社ロゴ" class="cta-logo__img">
            </a>
            <a href="#" class="btn whiteBtn cta-btn">
                <span class="whiteBtn-text cta-btn__text">問い合わせてみる</span>
            </a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>