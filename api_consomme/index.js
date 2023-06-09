const url = 'http://localhost:8080/marques/api';

//fetch
fetch(url)
.then(response => response.json())
.then(data => {
    console.log(data);
    let liste = document.querySelector('#liste');
    data.forEach(element => {
        element.update = new Date(element.update).toLocaleDateString();
        date = element.update;
        let li = document.createElement('li');
        li.innerText = element.name + 
        ' / modifié le : '
        + element.update;
        liste.appendChild(li);
    });
}
);