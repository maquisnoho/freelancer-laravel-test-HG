<a href="{{ $competitor['url'] }}" title="{{ $competitor['name'] }} Coupons" class="store-competitor__linkbox">
    <div class="store-competitor__item">
        <img src="{{ $competitor['logo'] }}" alt="{{ $competitor['name'] }} Logo" class="store-competitor__logo">
        <div class="store-competitor__info">
            <strong>{{ $competitor['name'] }}</strong> {{ $competitor['coupons'] }} Coupons available
        </div>
    </div>
</a>
