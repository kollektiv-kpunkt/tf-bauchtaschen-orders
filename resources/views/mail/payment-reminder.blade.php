<div style="font-family: sans-serif">
    <p>Hoi {{$order->firstname}}!</p>
    <p>
        Du hast vor Kurzem eine Bauchtasche bei uns bestellt. Vielen Dank dafür!
    </p>
    <p>
        Leider haben wir noch keine Zahlung von dir erhalten. Damit wir unsere Kosten decken können, wären wir dir für einen Beitrag von 15 CHF dankbar. Du kannst den Betrag hier bezahlen: <a href="{{$order->orderUrl}}">Bestellung bezahlen</a>
    </p>
    <p>
        Danke nochmals für deine Unterstützung!
    </p>
    <p>
        Liebe Grüsse<br>
        Tamara
    </p>
</div>
