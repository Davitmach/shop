<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <div id="Slider_container">
        <div id="Navigation_box">
            <div id="Angle_left">

                <div><i class="fa-solid fa-angle-left"></i></div>
                <div><i class="fa-solid fa-angle-left"></i></div>

            </div>
            <div id="Aj">
                <div><i class="fa-solid fa-angle-right"></i></div>
                <div><i class="fa-solid fa-angle-right"></i></div>
            </div>
        </div>
        <div id="Slider_box"></div>
        <div id="Pagination_box">
            <div id="Pag" onclick="
            Slider_counter = 0;
            clearInterval(Time_out);
            Slide(0)
            "></div>
            <div id="Pag" onclick="
            Slider_counter = 1;
            clearInterval(Time_out);
            Slide(1)
            "></div>
            <div id="Pag" onclick="
            Slider_counter = 2;
            clearInterval(Time_out);
            Slide(2)
            "></div>
        </div>
    </div>

   
</body>

</html>