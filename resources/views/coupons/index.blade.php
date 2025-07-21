<x-guest-layout>
    <x-slot name="head">
        <script type="application/ld+json">{!! $offerJsonFeed !!}</script>
        <script type="application/ld+json">{!! $breadcrumbJsonFeed !!}</script>
        <script type="application/ld+json">{!! $organizationJsonFeed !!}</script>
    </x-slot>

    <div class="content">
        <div id="message" class="success"></div>
        <div class="store-page-wrapper">
            <section class="store-title-section">
                <div class="store-title-wrapper">
                    <div class="store-title-row">
                        <div class="store-title-logo-wrapper"><img src="./laravel-rebuild_files/1700657094_hi150 .png"
                                alt="Hiya" class="store-title-logo" width="150" height="150"></div>
                        <div class="store-title-text">
                            <h1 class="store-title">
                                Hiya Coupons and Promo Codes with 70% off
                                <p class="store-subtitle">
                                    {{ $store['subtitle'] }}
                                </p>
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container"><!-- UPPER: Two-column layout -->
            <div class="store-page-top">
                <div class="store-page-layout"><!-- Left Sidebar -->
                    <aside class="sidebar store-sidebar"><!-- 1. Store Info -->
                        <div class="sidebar-block store-info text-center"><a
                                href="https://track.flexlinkspro.com/g.ashx?foid=24.232813.6656830&amp;trid=1073516.232813&amp;foc=16&amp;fot=9999&amp;fos=5"
                                target="_blank" rel="nofollow" class="btn btn-primary">Shop Now</a>
                            <div class="store-meta">
                                <div class="store-name"><a href="https://test.herpromocodes.com/hiya-discount-code"
                                        alt="Hiya Coupons"> Hiya Coupons </a></div>
                                <div class="favorite-icon mt-xs"><a href="javascript:;" class="fav-add"
                                        data-store="1141" title="Login to add to favorites"></a></div>
                            </div>
                        </div>
                        <!-- 2. FAQ Quick Links --><!-- 3. Recommended Stores --><!-- 4. Newsletter Widget -->
                        <div class="sidebar-block newsletter-signup">
                            <div class="newsletter-box">
                                <h2>
                                    Get Exclusive Coupons<br><span class="tagline">Straight to Your Inbox!</span>
                                </h2>
                                <p class="subtext">
                                    Be the first to receive the latest deals and savings tips!
                                </p>
                                <form name="frmnewsletter" class="frmnewsletter" id="frmnewsletter" method="post"
                                    action="https://test.herpromocodes.com/site/subscribe"
                                    onsubmit="subscribe(this, s_success, s_error);return false;">
                                    <input type="hidden" id="is_store" name="is_store" value="1">
                                    <input type="email" name="txtemail" id="txtemail"
                                        placeholder="Your email address" required="">
                                    <p class="notice_newsletter" style="display:none;"></p><button type="submit"
                                        name="GetItNow">Subscribe</button>
                                </form>
                                <p class="small-text">By clicking "Subscribe" you are signing up to receive
                                    periodic emails. You can opt out any time. <a
                                        href="https://test.herpromocodes.com/p/privacy-policy"><u>Privacy
                                            Policy</u></a>.</p>
                                <div id="newsletter-overlay"></div>
                            </div>
                        </div>
                    </aside>

                    <!-- Main Coupon Content -->
                    <main class="store-main-content">
                        <section class="store-deals-section">
                            <h2 class="store-deals-heading"> Best Hiya Coupons </h2>
                            <div class="store-deals-listing" id="all">
                                <ul class="deal-list">
                                    <div id="yw0" class="list-view">
                                        <div class="summary"></div>
                                        <div class="deal-grid">
                                            @foreach ($coupons as $coupon)
                                                @include('coupons.partials.coupon-card')
                                            @endforeach
                                        </div>
                                        <div class="keys" style="display:none" title="/hiya-discount-code">
                                            <span>12480</span><span>12138</span><span>12449</span><span>12137</span>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="fineprint">
                                HerPromoCodes may earn a commission when you click the
                                coupons on this page.
                            </div>
                        </section>

                        <!-- Expired Coupons --><!-- Coupon Code Test History -->
                        <section class="store-coupon-history text-section">
                            <div class="store-coupon-history__header">
                                <h3 class="text-section__title">Hiya Coupon Code Test History</h3>
                                <span class="store-coupon-history__description"> View proof of manually tested and
                                    valid Hiya coupon codes.
                                </span>
                            </div>
                            <div class="store-coupon-history__card">
                                <div class="store-coupon-history__info">
                                    <span class="discount">70%<br>OFF</span>
                                    <span class="code"
                                        onclick="getCode(&#39;12480&#39;, &#39;https://track.flexlinkspro.com/g.ashx?foid=24.232813.6661961&amp;trid=1073516.232813&amp;foc=14&amp;fot=9999&amp;fos=2&#39;)">
                                        SPOTRHIYA20
                                        <img class="icon-copy" src="./laravel-rebuild_files/copy-icon.png">
                                    </span>
                                    <span class="tested-time">Tested 3 months ago</span>
                                </div>
                                <div class="store-coupon-history__image">
                                    <a href="./laravel-rebuild_files/1747421706_hiya-code-test.webp"
                                        target="_blank"><img alt="Coupon test screenshot" loading="lazy" height="300"
                                            decoding="async" data-nimg="1" class="screenshot"
                                            src="./laravel-rebuild_files/1747421706_hiya-code-test.webp"></a>
                                </div>
                            </div>
                        </section>

                        <!-- Store About -->
                        <section class="store-about text-section">
                            <img loading="lazy" height="30" decoding="async" data-nimg="1"
                                class="box-about__store-image" src="{{ $about['image'] }}"
                                style="color: transparent;">
                            <h3 class="text-section__title">About Hiya</h3>
                            <a class="store-about__link"
                                href="https://track.flexlinkspro.com/g.ashx?foid=24.232813.6656830&amp;trid=1073516.232813&amp;foc=16&amp;fot=9999&amp;fos=5"
                                target="_blank" rel="nofollow">hiyahealth.com</a>
                            <div class="text-section__body">
                                <p>{{ $about['text'] }}</p>
                            </div>
                        </section>

                        <section class="store-payment-options text-section">
                            <h3 class="text-section__title">Payment Options Available</h3>
                            <div class="store-payment-options__list">
                                @foreach ($paymentOptions as $paymentOption)
                                    @include('coupons.partials.payment-option')
                                @endforeach
                            </div>
                        </section>
                    </main>
                </div>
            </div><!-- LOWER: Full-width content -->
            <div class="store-page-bottom">
                <section class="store-competitor text-section">
                    <div class="store-competitor__header">
                        <h3 class="text-section__title"><i class="icon icon-coupon"></i> Hiya Competitor Coupon
                            Codes </h3><a href="https://test.herpromocodes.com/p/sitemap"
                            class="store-competitor__link">See All Stores</a>
                    </div>
                    <div class="store-competitor__grid">
                        @foreach ($competitors as $competitor)
                            @include('coupons.partials.competitor-card')
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-guest-layout>
