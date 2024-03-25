var Slider = [
    {
        background: '//bridge505.qodeinteractive.com/wp-content/uploads/2022/10/main-home-rev-img-1.jpg',
        title: 'Computers up to – 15% off',
        description: 'The biggest risk is a missed opportunity.',
    },
    {
        background: '//bridge505.qodeinteractive.com/wp-content/uploads/2022/10/main-home-slider-photo-2.jpg',
        title: 'Laptops up to – 20% off',
        description: 'The biggest risk is a missed opportunity.',
    },
    {
        background: '//bridge505.qodeinteractive.com/wp-content/uploads/2022/10/main-home-slider-photo-3.jpg',
        title: 'Smartphones up to - 30% off',
        description: 'The biggest risk is a missed opportunity.',
    }
]
var Slider_container = document.getElementById('Slider_box');
var Slider_counter = 0;
var Paginations = document.querySelectorAll('#Pag');


function Slide(count) {
    for (var Pag of Paginations) {
        Pag.style.background = '';
    }
    Paginations[count].style.background = 'black';
    Slider_container.innerHTML = '';
    var Slide_page = document.createElement('div');
    Slide_page.classList.add('Slide_page');
    Slider_container.append(Slide_page);
    var Photo_box = document.createElement('div');
    Photo_box.classList.add('Photo_box');
    if (Slider_counter == 0) {
        Photo_box.classList.toggle('Photo1');
    }
    else if (Slider_counter == 1) {
        Photo_box.classList.toggle('Photo2');
    }
    else {
        Photo_box.classList.toggle('Photo3');
    }
    Slide_page.append(Photo_box);
    var Photo = document.createElement('img');
    Photo.src = Slider[count].background;
    Photo_box.append(Photo);
    var Info_box = document.createElement('div');
    Info_box.classList.add('Info_box');
    Slide_page.append(Info_box)
    var Title_box = document.createElement('div');
    Title_box.classList.add('Title_box');
    Info_box.append(Title_box);
    var Title = document.createElement('h1');
    Title.innerText = Slider[count].title;
    Title_box.append(Title);
    var Description_box = document.createElement('div');
    Description_box.classList.add('Description_box');
    Info_box.append(Description_box);
    var Description = document.createElement('p');
    Description.innerText = Slider[count].description;
    Description_box.append(Description);
    var Button = document.createElement('button');
    Button.classList.add('Button');
    Button.innerText = 'SHOP NOW';
    Info_box.append(Button);





}
Slide(Slider_counter);

var Time_out = setInterval(() => {
    if (Slider_counter < Slider.length - 1) {
        Slider_counter++;
        Slide(Slider_counter);
    }
    else if (Slider_counter == Slider.length - 1) {
        Slider_counter = 0;
        Slide(Slider_counter);
    }
}, 3000);

var Left_angle = document.getElementById('Angle_left');
var Right_angle = document.getElementById('Aj');

// Button left
Left_angle.addEventListener('click', () => {
    if (Slider_counter > 0) {
        clearInterval(Time_out);
        Slider_counter--;
        Slide(Slider_counter);
    }
 


})
// Button right
Right_angle.onclick = () => {
    if (Slider_counter < Slider.length - 1) {
        clearInterval(Time_out);
        Slider_counter++;
        Slide(Slider_counter);


    }
    else if (Slider_counter == Slider.length - 1) {
        clearInterval(Time_out);
        Slider_counter = 0;
        Slide(Slider_counter);

    }
}