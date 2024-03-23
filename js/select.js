function updateSelect2() {
    var select1 = document.getElementById('vehicule');
    var select2 = document.getElementById('cv');
    var selectedValue = select1.value;

    // Supprimer les options existantes
    select2.innerHTML = '';

    if (selectedValue === 'voiture') {
        select2.innerHTML += '<option value="3">3 CV et moins</option>';
        select2.innerHTML += '<option value="4">4 CV</option>';
        select2.innerHTML += '<option value="5">5 CV</option>';
        select2.innerHTML += '<option value="6">6 CV</option>';
        select2.innerHTML += '<option value="7">7 CV et plus</option>';
    } else if (selectedValue === 'motocyclettes') {
        select2.innerHTML += '<option value="1-2">1 ou 2C V</option>';
        select2.innerHTML += '<option value="3-4-5">3, 4 ou 5 CV</option>';
        select2.innerHTML += '<option value="6">Plus de 5 CV</option>';
    } else if (selectedValue === 'cyclomoteurs') {
        select2.innerHTML += '<option value="50">50cc et moins</option>';
    }

}

// Appel initial pour mettre à jour la deuxième sélection au chargement de la page
updateSelect2();