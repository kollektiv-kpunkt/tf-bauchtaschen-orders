@php
    use App\Models\Order;

    $orders = Order::all();
    $count = $orders->count();
    if ($count > env("NO_PRODUCED", 400)) {
        $count = env("NO_PRODUCED", 400);
    }
    $percentageLeft = (1 - ($count / env("NO_PRODUCED", 400))) * 100;
@endphp
<div class="tfb-order-barometer pt-8" data-percentage="{{ $percentageLeft }}">
    <div class="tfb-baro-bar bg-red rounded-full h-7 p-1">
        <div class="tfb-baro-bar--inner bg-red-20 rounded-full w-0 h-5">
        </div>
    </div>
    <div class="flex items-center justify-center mt-2">
        <span class="tfb-baro-bar--text text-3xs sm:text-2xs opacity-0 font-bold">{{ env("NO_PRODUCED", 400) - $count }} Bauchtaschen übrig</span>
    </div>
</div>
