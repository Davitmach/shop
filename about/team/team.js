var Team_data = [
    {
        img: 'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/10/team-img1.jpg',
        profession: 'CEO/Founder',
        name:'Anna Cooper'
        
    },
    {
        img: 'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/10/team-img2.jpg',
        profession: 'Sales Manager',
        name:'Steve Curtis'
    },
    {
        img: 'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/10/team-img3.jpg',
        profession: 'General Manager',
        name:'Theresa Moore'
    },
    {
        img: 'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/10/team-img4.jpg',
        profession: 'Customer Service',
        name:'Chase Phelps'
    },
    {
        img: 'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/10/team-img5.jpg',
        profession: 'Sales Associate',
        name:'Mary Smith'
    },
    {
        img: 'https://bridge505.qodeinteractive.com/wp-content/uploads/2022/10/team-img6.jpg',
        profession: 'Team Leader',
        name:'Ingrid Vulk'

    }
];

var Team_cont = document.getElementById('Team_info');
Team_data.map((item)=> {
    var Person_box = document.createElement('div');
    Person_box.classList.add('Person_box');
    Team_cont.append(Person_box);
    var Img_box = document.createElement('div');
    Img_box.classList.add('Img_box');
    Person_box.append(Img_box);
    var Img = document.createElement('img');
    Img.src = item.img;
    Img_box.append(Img);
    var Info_box = document.createElement('div');
    Info_box.classList.add('Info_box');
    Person_box.append(Info_box);
    var Profession_box = document.createElement('div');
    Profession_box.classList.add('Profession_box');
    Info_box.append(Profession_box);
    var Profession = document.createElement('span');
    Profession.innerText = item.profession;
    Profession_box.append(Profession);
    var Name_box = document.createElement('div');
    Name_box.classList.add('Name_box');
    Info_box.append(Name_box);
    var Name = document.createElement('h1');
    Name.innerText = item.name;
    Name_box.append(Name);  
})