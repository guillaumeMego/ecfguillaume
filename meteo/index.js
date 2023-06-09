const urlAngouleme = 'https://www.prevision-meteo.ch/services/json/angouleme';
const urlCognac = 'https://www.prevision-meteo.ch/services/json/cognac';
const urlcalais = 'https://www.prevision-meteo.ch/services/json/calais';

const angoulemeElt = document.querySelector('#angouleme');
const cognacElt = document.querySelector('#cognac');
const calaisElt = document.querySelector('#calais');
const formElt = document.querySelector('form');
const h2Elt = document.querySelector('h2');

resultElt = document.querySelector('#result');

const selectElt = document.querySelector('#select');


if ('geolocation' in navigator) {
    navigator.geolocation.watchPosition((position) => {
        formElt.style.display = 'none';
        
        const url = 'https://www.prevision-meteo.ch/services/json/lat=' + position.coords.latitude + 'lng=' + position.coords.longitude;
        //console.log(position.coords.latitude, position.coords.longitude);
        fetch(url)
            .then((response) => {
                return response.json();
            }
            ).then((data) => {
                if (data.current_condition.tmp >= 20) {
                    // ajoute rune image
                    let img = document.createElement('img');
                    img.src = 'img/lunette.png';
                    resultElt.appendChild(img);
                    h2Elt.innerText = data.city_info.name;
                } else if (data.current_condition.tmp <= 17) {
                    // ajoute rune image
                    let img = document.createElement('img');
                    img.src = 'img/pull.png';
                    resultElt.appendChild(img);
                } else if (data.current_condition.tmp <= 10) {
                    // ajoute rune image
                    let img = document.createElement('img');
                    img.src = 'img/parapluie.png';
                    resultElt.appendChild(img);
                }
            }
            ).catch((error) => {
                console.log(error);
            }
            )
    })
} 

function getMeteo(data) {
    // reset de l'image
    resultElt.innerHTML = '';
    if (data.current_condition.tmp >= 20) {
        let img = document.createElement('img');
        img.src = 'img/lunette.png';
        resultElt.appendChild(img);
    } else if (data.current_condition.tmp < 20) {
        let img = document.createElement('img');
        img.src = 'img/pull.png';
        resultElt.appendChild(img);
    } else if (data.current_condition.tmp <= 10) {
        let img = document.createElement('img');
        img.src = 'img/parapluie.png';
        resultElt.appendChild(img);
    }
}

    selectElt.addEventListener('change', (e) => {
        if (e.target.value === 'angouleme') {
            fetch(urlAngouleme)
                .then((response) => {
                    return response.json();
                }
                ).then((data) => {
                    
                getMeteo(data);

                }
                ).catch((error) => {
                    console.log(error);
                }
                )
        } else if (e.target.value === 'cognac') {
            fetch(urlCognac)
                .then((response) => {
                    return response.json();
                }
                ).then((data) => {
                    
                    getMeteo(data);

                }
                ).catch((error) => {
                    console.log(error);
                }
                )
        } else if (e.target.value === 'calais') {
            fetch(urlcalais)
                .then((response) => {
                    return response.json();
                }
                ).then((data) => {
                    
                    getMeteo(data);

                }
                ).catch((error) => {
                    console.log(error);
                }
                )
        }

    });
