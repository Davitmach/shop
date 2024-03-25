var Brand_data = [
    'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/09/client-1.png',
    'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/09/client-2.png',
    'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/09/client-3.png',
    'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/09/client-4.png',
    'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/09/client-5.png',
    'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/09/client-6.png'
]
var Row1 = document.getElementById('row1');
var Row2 = document.getElementById('row2');
var Row3 = document.getElementById('row3');
var min = 0;
var max = 4;
Brand_data.map(() => {
    var Brand_img = document.createElement('div');
    Brand_img.classList.add('Brand_img');
    Row1.append(Brand_img);
    
    var Img = document.createElement('img');
    Img.src = Brand_data[Math.round(Math.random() * (max - min + 1) + min)];
    Brand_img.append(Img);
    var Brand_img = document.createElement('div');
    Brand_img.classList.add('Brand_img');
    Row2.append(Brand_img);

    var Img = document.createElement('img');
    Img.src = Brand_data[Math.round(Math.random() * (max - min + 1) + min)];
    Brand_img.append(Img);

    var Brand_img = document.createElement('div');
    Brand_img.classList.add('Brand_img');
    Row3.append(Brand_img);
    
    var Img = document.createElement('img');
    Img.src = Brand_data[Math.round(Math.random() * (max - min + 1) + min)];
    Brand_img.append(Img);
})