<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div id="Slider_container2">
        <div id="Navigation_box">
            <div id="Angle_left2">

                <div><i class="fa-solid fa-angle-left"></i></div>
                <div><i class="fa-solid fa-angle-left"></i></div>

            </div>
            <div id="Aj2">
                <div><i class="fa-solid fa-angle-right"></i></div>
                <div><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </div>
        <div id="Slider_box2"></div>
        <div id="Pagination_box">
            <div id="Pag2" onclick="
            Slider_counter = 0;
            clearInterval(Time_out2);
            Slide2(0)
            "></div>
            <div id="Pag2" onclick="
            Slider_counter = 1;
            clearInterval(Time_out2);
            Slide2(1)
            "></div>
            <div id="Pag2" onclick="
            Slider_counter = 2;
            clearInterval(Time_out2);
            Slide2(2)
            "></div>
        </div>
    </div>


</body>

</html>