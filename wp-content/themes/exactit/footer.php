        <button class="back-to-top-btn" data-visible="false">
            <img src="/wp-content/themes/exactit/src/assets/icons/back-to-top-icon.svg" alt="arrow up" />
        </button>
        <footer class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <a href="index.html" class="footer__logo">
                        <img src="/wp-content/themes/exactit/src/assets/images/logo.svg" alt="logo" />
                    </a>
                    <nav class="footer__nav">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a class="footer__link" href="<?php echo site_url() ?>">Home</a>
                            </li>
                            <li class="footer__item">
                                <a class="footer__link" href="<?php echo site_url('services') ?>">Services</a>
                            </li>
                            <li class="footer__item">
                                <a class="footer__link" href="<?php echo site_url('projects') ?>">Projects</a>
                            </li>
                            <li class="footer__item">
                                <a class="footer__link" href="<?php echo site_url('about') ?>">About</a>
                            </li>
                            <li class="footer__item">
                                <a class="footer__link" href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="footer__copyright">
                        <p>Copyright © 2025 Exact IT | Powered by Exact IT</p>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
        </body>

        </html>