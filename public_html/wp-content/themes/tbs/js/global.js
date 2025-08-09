    const parseRem = (input) => {
        return (input / 10) * parseFloat($("html").css("font-size"));
    };
    const viewport = {
        w: window.innerWidth,
        h: window.innerHeight,
    };
