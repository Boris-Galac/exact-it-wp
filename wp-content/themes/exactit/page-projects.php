<?php get_header() ?>
<main class="main subpage">
    <figure class="subpage-banner">
        <h1 class="banner-headline">Projects</h1>
    </figure>
    <!-- 👉 section PROJECTS PAGE -->
    <section class="projects-page">
        <div class="container">
            <a class="back-to-home-btn" href="index.html"><img
                    src="/wp-content/themes/exactit/src/assets/icons/back-to-home-icon.svg" alt="arrow left" />
                Back to home</a>
            <div class="projects__wrapper">
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">
                        ERP (Enterprise Resource Planning)
                    </h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            We have experience building ERP systems that unify business
                            operations and improve overall organizational efficiency.
                            These solutions offer centralized control, streamlined
                            workflows, and better resource planning.
                        </p>
                    </div>
                </article>
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">
                        CRM (Customer Relationship Management)
                    </h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            Our team has worked on CRM platforms designed to manage
                            customer relationships, sales pipelines, and communication.
                            They help businesses boost customer satisfaction, retention,
                            and sales performance.
                        </p>
                    </div>
                </article>
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">Geolocation</h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            Experience in developing geolocation systems focused on
                            real-time tracking and spatial data visualization. These
                            solutions enable smarter field operations, route planning, and
                            asset management.
                        </p>
                    </div>
                </article>
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">
                        BIM (Building Information Modeling)
                    </h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            We’ve been involved in building BIM platforms that support
                            collaboration and digital project planning in construction.
                            The software improves coordination, minimizes errors, and
                            streamlines the entire building lifecycle.
                        </p>
                    </div>
                </article>
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">
                        BPM (Business Process Management)
                    </h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            Experience in creating BPM systems that automate and optimize
                            internal business workflows. These platforms support greater
                            transparency, efficiency, and agility across departments.
                        </p>
                    </div>
                </article>
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">Payroll</h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            Our work includes the development of payroll systems that
                            automate complex calculations and ensure regulatory
                            compliance. These tools provide timely, accurate payments and
                            reduce administrative overhead.
                        </p>
                    </div>
                </article>
                <article class="projects-page-card">
                    <h2 class="projects-page-heading">Measurement Software</h2>
                    <div class="projects-page-card__inner-wrapper">
                        <p>
                            Contributed as part of a team working on complex global
                            measurement software for tracking and analyzing website
                            visits. The solution supports data-driven decision-making by
                            providing detailed insights into user behavior and engagement.
                        </p>
                    </div>
                </article>
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