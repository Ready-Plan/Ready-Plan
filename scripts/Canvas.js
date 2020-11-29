(function() {
    var canvas = document.getElementById("whiteboard");
    var ctx = canvas.getContext("2d");
    ctx.fillStyle = 'blue';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    var current = {
        color: "black",
        lineWidth: 2,
    };
    let startX, startY, currentX, currentY, drawing

    // Starts the drawing process
    startTrackMouse = (e) => {
        if (e.button === 0 || e.type === "touchstart") {
            startX = this.currentX;
            startY = this.currentY;
            drawing = setInterval(this.handleDraw, 20);
        }
    };

    stopTrackMouse = () => {
        clearInterval(drawing);
    };

    // Track Mouse Movement
    trackMouse = (e) => {
        if (e.type === "touchmove") {
            currentX = e.touches[0].pageX - e.touches[0].target.offsetLeft;
            currentY = e.touches[0].pageY - e.touches[0].target.offsetTop;
        } else {
            currentX = e.offsetX;
            currentY = e.offsetY;
        }
    };

    handleDraw = () => {
        const ratio = {
            x1: startX,
            y1: startY,
            x2: currentX,
            y2: currentY,
            penColor: current.color,
            lineWidth: current.lineWidth,
        };
        startX = currentX;
        startY = currentY;
        drawLine(ratio);
    };

    // Draw Line
    drawLine = (ratio) => {
        const x1 = ratio.x1;
        const y1 = ratio.y1;
        const x2 = ratio.x2;
        const y2 = ratio.y2;

        ctx.beginPath();
        ctx.moveTo(x1, y1);
        ctx.lineTo(x2, y2);
        ctx.lineCap = "round";
        ctx.strokeStyle = ratio.penColor;
        ctx.lineWidth = ratio.lineWidth;
        ctx.stroke();
        ctx.closePath();
    };

    resizeCanvas = () => {
        var canvas = document.getElementById("whiteboard");

        d = document.getElementById("d");

        // Get size from parent div
        const cw = d.offsetWidth;
        const ch = d.offsetHeight;

        // Set canvas attribute size
        canvas.width = cw - 2;
        canvas.height = ch - 2;

        // Set canvas styles size
        canvas.style.width = cw + "px";
        canvas.style.height = ch + "px";
        var ctx = canvas.getContext("2d");
        ctx.fillStyle = 'white';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
    };

    canvas.addEventListener("mousedown", startTrackMouse, false);
    canvas.addEventListener("mouseup", stopTrackMouse, false);
    canvas.addEventListener("mouseout", stopTrackMouse, false);
    canvas.addEventListener("mousemove", trackMouse, false);

    //Touch support for mobile devices
    canvas.addEventListener('touchstart', startTrackMouse, false);
    canvas.addEventListener("touchend", stopTrackMouse, false);
    canvas.addEventListener("touchcancel", stopTrackMouse, false);
    canvas.addEventListener("touchmove", trackMouse, false);

    window.addEventListener("resize", resizeCanvas, false);
    resizeCanvas();

})();

function DownloadCanvasAsImage() {
    var canvas = document.getElementById("whiteboard");
    let downloadLink = document.createElement('a');
    downloadLink.setAttribute('download', 'screenshot.png');
    let dataURL = canvas.toDataURL('image/png');
    let url = dataURL.replace(/^data:image\/png/, 'data:application/octet-stream');
    downloadLink.setAttribute('href', url);
    downloadLink.click();
}