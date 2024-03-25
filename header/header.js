

function Header() {
    ///// MENU....................................
    var Angle = document.getElementById('Angle_right');
    var Under_menu = document.getElementById('Under_menu');
    var Menu_toggle = document.getElementById('Menu_toggle');
    Menu_toggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
    var Angle_counter = 1;
    var Menu_toggle_counter = 1;
    var Header_menu = document.getElementById('Header_menu_box');

    if (window.innerWidth > 1024) {
        Under_menu.classList.remove('Under_menu_low_res_active');
        Under_menu.classList.remove('Under_menu_low_res');
        Under_menu.classList.add('Under_menu');

    }
    window.addEventListener('resize', () => {
        if (window.innerWidth > 1024) {
            Angle_counter = 1;
            Angle.style.transform = 'rotate(0)'
            Under_menu.classList.remove('Under_menu_low_res_active');
            Under_menu.classList.remove('Under_menu_low_res');
            Under_menu.classList.add('Under_menu');
            Header_menu.style.height = 'auto';
            Menu_toggle_counter = 1;
            Menu_toggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
        }
        if (window.innerWidth < 1024) {
            Menu_toggle_counter = 1;
            Menu_toggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
            Header_menu.style.height = '0';
        }
    })


    Menu_toggle.addEventListener('click', () => {
        Menu_toggle_counter++;
        if (Menu_toggle_counter % 2 == 0) {
            Menu_toggle.innerHTML = '<i class="fa-solid fa-xmark"></i>';
            Header_menu.style.height = '270px';

        }
        else {
            Menu_toggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
            Header_menu.style.height = '0';
            Angle.style.transform = 'rotate(0)';
            Angle_counter = 1;
           Under_menu.classList.remove('Under_menu_low_res_active');
        }
    })
  
    Angle.addEventListener('click', () => {
        Angle_counter++;
        if (Angle_counter % 2 == 0) {
            Angle.style.transform = 'rotate(90deg)';
            Header_menu.style.height = '340px';
            Under_menu.classList.add('Under_menu_low_res_active');
        }
        else {
            Header_menu.style.height = '270px';
            Under_menu.classList.remove('Under_menu_low_res_active');
            Under_menu.classList.add('Under_menu_low_res')
            Angle.style.transform = 'rotate(0deg)';

        }
    })
}
Header();
