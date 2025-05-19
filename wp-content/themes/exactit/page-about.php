<?php get_header() ?>
<main class="main subpage">
    <figure class="subpage-banner">
        <h1 class="banner-headline">About us</h1>
    </figure>
    <!-- 👉 section ABOUT-USE-PAGE -->
    <section class="about-us-page">
        <div class="container">
            <div class="about-us-page__wrapper">
                <img src="/wp-content/themes/exactit/src/assets/images/exact-it-logo 1.png" alt="exactIT logo"
                    class="about-us-logo" />
                <div class="about-us__row-wrapper">
                    <h2 class="about-us-h2-heading hidden-left">our story</h2>
                    <p class="hidden-left" style="animation-delay: 0.4s">
                        The company was founded in 2016 and has completed many
                        successful projects since then. Our partners and clients
                        recognize our ability to develop and deliver all types of
                        software. Our R&D team is committed to constant improvement and
                        exploring cutting-edge technologies.
                    </p>
                </div>
                <div class="about-us__row-wrapper">
                    <h2 class="about-us-h2-heading hidden-left" style="animation-delay: 0.5s">
                        our vision
                    </h2>
                    <p class="hidden-left" style="animation-delay: 0.85s">
                        To be the company most admired for its people, long-term
                        partnerships and high-quality performance.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- 👉 section CONTACT -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact__wrapper">
                <div class="section-heading-wrapper">
                    <div class="heading-line"></div>
                    <h2 class="h2-heading">CONTACT US</h2>
                </div>
                <div class="contact__inner-wrapper">
                    <div class="contact__text-box">
                        <h3 class="contact-h3-heading">Ready to take the next step?</h3>
                        <p>
                            Whether you're looking for tailored IT solutions or
                            result-driven business consulting, our team is here to listen.
                            Send us your inquiry and we’ll get back to you shortly.
                        </p>
                    </div>
                    <?php get_template_part('template-parts/content', 'contact-form') ?>

                </div>
            </div>
        </div>
    </section>
    <img src="/wp-content/themes/exactit/src/assets/images/blur-1.png" class="blur-1" aria-hidden="true" />
</main>
<?php get_footer() ?>