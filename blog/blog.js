function search() {
    var searchTerm = document.getElementById("search").value.trim();

    // Отправляем запрос на сервер
    fetch("search.php?searchTerm=" + searchTerm)
        .then(response => response.json())
        .then(data => {
            displayResults(data);
        })
        .catch(error => {
            console.error(`Ошибка: `);
        });
}

function displayResults(results) {
    var searchResultsDiv = document.getElementById("Posts");
    searchResultsDiv.innerHTML = "";

    if (results.length === 0) {
        searchResultsDiv.innerHTML = "Ничего не найдено";
    } else {
        results.forEach(result => {
            var Blog_box = document.createElement("div");
            Blog_box.classList.add('Blog_box');
            searchResultsDiv.append(Blog_box);
            var Img_box = document.createElement('div');
            Img_box.classList.add('Img_box');
            Blog_box.append(Img_box);
            var Img = document.createElement('img');
            Img.src = result.img;
            Img_box.append(Img);
            var Info_box = document.createElement('div');
            Info_box.classList.add('Info_box');
            Blog_box.append(Info_box);
            var Date_box = document.createElement('div');
            Date_box.classList.add('Date');
            Info_box.append(Date_box);
            var Date = document.createElement('span');
            Date.innerText = result.date;
            Date_box.append(Date);
            var Title_box = document.createElement('div');
            Title_box.classList.add('Title');
            Info_box.append(Title_box);
            var Title = document.createElement('h1');
            Title.innerText = result.title;
            Title_box.append(Title);
            var Description_box = document.createElement('div');
            Description_box.classList.add('Description');
            Info_box.append(Description_box);
            var Description = document.createElement('p');
            Description.innerText = `Lorem ipsum dolor sit amet, consectetur adipiscing elit. In augue ligula, feugiat ut nulla case elitr. Est lacus, molestie in no, icula mea ipsum. Nunc faucibus, nisl id dapibus finibus, enim diam interdum nulla, sed laoreet risus lectus. Vivamus viverra tem pus. Proin inan tincidunt sem...`;
            Description_box.append(Description);
            var Form = document.createElement('form');
            Form.method = 'post';
            Form.action = `../blog_page/blog_page.php?id=${result.id}`;
            Info_box.append(Form);
            var Btn = document.createElement('button');
            Btn.type = 'submit';
            Btn.innerText = 'READ MORE';
            Form.append(Btn);
        });
    }
}
