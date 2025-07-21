<li class="deal-card">
    <a href="https://track.flexlinkspro.com/g.ashx?foid=24.232813.6656830&amp;trid=1073516.232813&amp;foc=16&amp;fot=9999&amp;fos=5"
        class="deal-card__overlay" aria-label="Go to deal"></a>
    <div class="deal-card__main">
        <div class="deal-card__left">
            <h5 class="discount-box">
                <span>{{ $coupon['discount'] }}</span>Off
            </h5>
        </div>
        <div class="deal-card__middle">
            <h3 class="deal-title">{{ $coupon['title'] }}</h3>
            <div class="deal-meta">
                @if ($coupon['verified'])
                    <span class="meta-verified">Verified </span>
                @endif
                <span id="vote_div_12138">
                    <span class="like"></span>
                    <span class="unlike"></span>
                </span>
                <span id="clicked_vote_div_12138" style="display: none;">
                    <span class="like"></span>
                    <span class="unlike"></span>
                </span>
                <span class="meta-success">
                    {{ $coupon['success'] }} success
                </span>
                <span class="meta-comments">
                    <i class="icon-comment"></i>
                    <a rel="nofollow" href="javascript:void(0);" class="label-comments">
                        <label id="countcom_12480" class="totalcom">{{ count($coupon['comments']) }}</label> Comments
                    </a>
                </span>
            </div>
        </div>
        <div class="deal-card__right">
            <button class="coupon-btn">
                Show Code <span class="corner"><span>{{ $coupon['code'] }}</span></span>
            </button>
        </div>
    </div>
</li>
