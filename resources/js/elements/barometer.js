if (document.querySelector(".tfb-order-barometer")) {
    let barometer = document.querySelector(".tfb-order-barometer");
    let inner = barometer.querySelector(".tfb-baro-bar--inner");
    let text = barometer.querySelector(".tfb-baro-bar--text");
    let percent = barometer.dataset.percentage;

    setTimeout(() => {
        inner.animate(
            [
                { width: "0%" },
                { width: percent + "%" },
            ],
            {
                duration: 1000,
                fill: "forwards",
                easing: "ease-in-out",
            }
        );
        setTimeout(() => {
            text.animate(
                [
                    { opacity: 0 },
                    { opacity: 1 },
                ],
                {
                    duration: 500,
                    fill: "forwards",
                    easing: "ease-in-out",
                }
            );
        }, 500);
    }, 500);
}
