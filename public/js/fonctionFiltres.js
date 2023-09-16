document.addEventListener('DOMContentLoaded', function () {

    const marque = document.getElementById('marque-select-list');
    const modele = document.getElementById('modele-select-list');
    const annee = document.getElementById('annee-select-list');
    const carburant = document.getElementById('carburant-select-list');
    const minPrix = document.getElementById('prix-select-min');
    const maxPrix = document.getElementById('prix-select-max');

    const button = document.getElementById('subButton');

    const conteneur = document.getElementById('ctnr-js');

    // Click Button
    button.addEventListener('click', () => {
        if (marque.value !== 'null' || modele.value !== 'null' || carburant.value !== 'null') {

            // Préparation des variables à envoyer
            var dataFiltres = {
                marque: marque.value,
                modele: modele.value,
                annee: annee.value,
                carburant: carburant.value,
                minPrix: minPrix.value,
                maxPrix: maxPrix.value
            };

            
            // Requete
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/data/filtres', true);
            xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
            
            xhr.onload = function () {
                // Traitement de la Réponse
                if (xhr.status === 200) {
                    // Traitement Réponse Format JSON
                    var responseData = JSON.parse(xhr.responseText);
                    
                    var contenuHTML = '';
                    // Pour chaque Objet JSON en Réponse
                    responseData.forEach(function(v) {
                        //Construction carte HTML et Ajout au contenu
                        contenuHTML += `
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <div class="card">
                                    <img src="/images/Vehicules/defaut.jpg" class="card-img-top" alt="image">
                                    <div class="card-body">
                                        <h5 class="card-title">${v.marque} ${v.modele}</h5>
                                        <p>Année : ${v.annee}</p>
                                        <p>Chevaux : ${v.chevaux}</p>
                                        <div class="d-flex">
                                            <div class="col-6">
                                                <p>${v.typeCarburant}</p>
                                                <p>${v.kilometres} Km</p>
                                            </div>
                                            <div class="col-6">
                                                <a href="galerie/${v.id}" class="btn btn-primary float-end">Plus d'Info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    if (contenuHTML !== "") {
                        // Mise à jour de la page Avec le Contenu Généré
                        conteneur.innerHTML = contenuHTML;
                    } else {
                        conteneur.innerHTML = "<p class='text-center'>Aucun Véhicule trouvé...</p>";
                    }
                    
                }else {
                    console.log('error');
                }
            };
            //Envoi des variables
            xhr.send(JSON.stringify(dataFiltres));
        }
        
    });
});