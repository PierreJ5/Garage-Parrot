document.addEventListener('DOMContentLoaded', function () {

    const marque = document.getElementById('marque-select-list');
    const modele = document.getElementById('modele-select-list');
    const annee = document.getElementById('annee-select-list');
    const carburant = document.getElementById('carburant-select-list');
    const minPrix = document.getElementById('prix-select-min');
    const maxPrix = document.getElementById('prix-select-max');

    const button = document.getElementById('subButton');

    button.addEventListener('click', () => {


        var dataFiltres = {
            marque: marque.value,
            modele: modele.value,
            annee: annee.value,
            carburant: carburant.value,
            minPrix: minPrix.value,
            maxPrix: maxPrix.value
        };
        console.log(dataFiltres);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/data/filtres', true);
        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
        
        xhr.onload = function () {
            if (xhr.status === 200) {


                // Attente de Réponse

   
                console.log(xhr.responseText);
            }else {
                console.log('error')
            }
        };
        
        xhr.send(JSON.stringify(dataFiltres));
    });
});