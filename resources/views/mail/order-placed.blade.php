<div style="font-family: sans-serif">
    <p>Hoi {{$order->firstname}}!</p>
    <p>
        Danke, dass du eine unserer Bauchtaschen bestellt hast. Wir werden deine Bestellung so schnell wie möglich bearbeiten.
    </p>
    <p>
        Damit wir unsere Kosten decken können, kostet eine Bauchtasche CHF 15. Falls du uns diesen Betrag noch nicht bezahlt hast, kannst du das hier tun: <a href="{{$order->orderUrl}}">Bestellung bezahlen</a>
    </p>
    <p>
        Danke nochmals für deine Unterstützung!
    </p>
    <p>
        Liebe Grüsse<br>
        Tamara
    </p>
</div>
