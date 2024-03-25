
    var Slider2 = [
        {
            background: '//bridge505.qodeinteractive.com/wp-content/uploads/2022/10/main-home-rev-img-2.jpg',
            title: 'Xiaomi Book Air',
            description: 'WITH 2K OLED DISPLAY',
            price: 950
        },
        {
            background: '//bridge505.qodeinteractive.com/wp-content/uploads/2022/10/main-home-banner-slider-photo-2.jpg',
            title: 'Headphones',
            description: 'FOR MUSIC AND GAMING',
            price: 150
        },
        {
            background: '//bridge505.qodeinteractive.com/wp-content/uploads/2022/10/main-home-banner-slider-photo-3.jpg',
            title: 'Drone Mini',
            description: 'WITH 1 HOUR FLIGHT TIME',
            price: 1750
        }
    ]
    var Slider_container2 = document.getElementById('Slider_box2');
    var Slider_counter2 = 0;
    var Paginations2 = document.querySelectorAll('#Pag2');


    function Slide2(count) {
        for (var Pag of Paginations2) {
            Pag.style.background = '';
        }
        Paginations2[count].style.background = 'black';
        Slider_container2.innerHTML = '';
        var Slide_page = document.createElement('div');
        Slide_page.classList.add('Slide_page');
        Slider_container2.append(Slide_page);
        var Photo_box = document.createElement('div');
        Photo_box.classList.add('Photo_box');
        if (Slider_counter2 == 0) {
            Photo_box.classList.toggle('Photo1');
        }
        else if (Slider_counter2 == 1) {
            Photo_box.classList.toggle('Photo2');
        }
        else {
            Photo_box.classList.toggle('Photo3');
        }
        Slide_page.append(Photo_box);
        var Photo = document.createElement('img');
        Photo.src = Slider2[count].background;
        Photo_box.append(Photo);
        var Info_box = document.createElement('div');
        Info_box.classList.add('Info_box');
        Slide_page.append(Info_box)
        var Title_box = document.createElement('div');
        Title_box.classList.add('Title_box');
        Info_box.append(Title_box);
        var Title = document.createElement('h1');
        Title.innerText = Slider2[count].title;
        Title_box.append(Title);
        var Description_box = document.createElement('div');
        Description_box.classList.add('Description_box');
        Info_box.append(Description_box);
        var Description = document.createElement('p');
        Description.innerText = Slider2[count].description;
        Description_box.append(Description);
        var Price_box = document.createElement('div');
        Price_box.classList.add('Price_box');
        Info_box.append(Price_box);
        var Price = document.createElement('h1');
        Price.innerText = `$${Slider2[count].price}`;
        Price_box.append(Price);
        var Button = document.createElement('button');
        Button.classList.add('Button');
        Button.innerText = 'SHOP NOW';
        Info_box.append(Button);
    
    



    }
    Slide2(Slider_counter2);

    var Time_out2 = setInterval(() => {
        if (Slider_counter2 < Slider2.length - 1) {
            Slider_counter2++;
            Slide2(Slider_counter2);
        }
        else if (Slider_counter2 == Slider2.length - 1) {
            Slider_counter2 = 0;
            Slide2(Slider_counter2);
        }
    }, 3000);

    var Left_angle = document.getElementById('Angle_left2');
    var Right_angle = document.getElementById('Aj2');

    // Button left
    Left_angle.addEventListener('click', () => {
        if (Slider_counter2 > 0) {
            clearInterval(Time_out2);
            Slider_counter2--;
            Slide2(Slider_counter2);
        }



    })
    // Button right
    Right_angle.onclick = () => {
        if (Slider_counter2 < Slider2.length - 1) {
            clearInterval(Time_out2);
            Slider_counter2++;
            Slide2(Slider_counter2);


        }
        else if (Slider_counter2 == Slider2.length - 1) {
            clearInterval(Time_out2);
            Slider_counter2 = 0;
            Slide2(Slider_counter2);

        }
    }
