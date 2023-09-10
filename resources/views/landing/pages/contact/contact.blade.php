@extends('landing.layouts.app') @section('content')
<div
    class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white"
    style="background-image: url(assets/imgs/news/news-17.jpg)"
>
    <div class="container entry-header-content">
        <h1 class="entry-title mb-50 font-weight-900">Get in Touch</h1>
    </div>
</div>
<div class="container single-content">
    <div class="entry-wraper mt-50">
        <p class="font-large">
            We are AliThemes , a creative and dedicated group of individuals who
            love web development almost as much as we love our customers. We are
            passionate team with the mission for achieving the perfection in web
            design. All designs are made by love with pixel perfect design and
            excellent coding quality. Speed, security and SEO friendly alway in
            our mind.
        </p>
        <hr class="wp-block-separator is-style-wide" />
        <p>
            <span class="mr-5">
                <ion-icon
                    name="location-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="location outline"
                ></ion-icon> </span
            ><strong>Address</strong>: Lorem 142 Str., 2352, Ipsum, State, USA
        </p>
        <p>
            <span class="mr-5">
                <ion-icon
                    name="home-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="home outline"
                ></ion-icon> </span
            ><strong>Our website</strong>:
            <a href="https://alithemes.com/">https://alithemes.com</a>
        </p>
        <p>
            <span class="mr-5">
                <ion-icon
                    name="planet-outline"
                    role="img"
                    class="md hydrated"
                    aria-label="planet outline"
                ></ion-icon> </span
            ><strong>Support center</strong>:
            <a href="https://alithemes.ticksy.com/"
                >https://alithemes.ticksy.com</a
            >
        </p>
        <h3 class="mt-30">Advertise</h3>
        <hr class="wp-block-separator is-style-wide" />
        <p>
            Please contact us directly at
            <a
                href="https://demos.alithemes.com/cdn-cgi/l/email-protection"
                class="__cf_email__"
                data-cfemail="b7d6d3c4f7c2dbc3c5d6d9d2c0c499d4d8da"
                >[email&#160;protected]</a
            >. For large or unique campaigns please email
            <a
                href="https://demos.alithemes.com/cdn-cgi/l/email-protection"
                class="__cf_email__"
                data-cfemail="8af9ebe6efcaffe6fef8ebe4effdf9a4e9e5e7"
                >[email&#160;protected]</a
            >
            for requests-for-proposal and additional pricing information.
        </p>
        <h1 class="mt-30">Get in touch</h1>
        <hr class="wp-block-separator is-style-wide" />
        <form class="form-contact comment_form" action="#" id="commentForm">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input
                            class="form-control"
                            name="name"
                            id="name"
                            type="text"
                            placeholder="Name"
                        />
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input
                            class="form-control"
                            name="email"
                            id="email"
                            type="email"
                            placeholder="Email"
                        />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input
                            class="form-control"
                            name="website"
                            id="website"
                            type="text"
                            placeholder="Phone"
                        />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea
                            class="form-control w-100"
                            name="comment"
                            id="comment"
                            cols="30"
                            rows="9"
                            placeholder="Message"
                        ></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="button button-contactForm">
                    Send message
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
