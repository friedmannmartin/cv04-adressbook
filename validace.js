function validace() {
    var pozice = document.forms['osoba']['pozice'];
    var nadrizeny = document.forms['osoba']['nadrizeny'];

    //Validace nadřízeného
    if (pozice.value === 'dělník' && nadrizeny.value === '') {
        nadrizeny.setCustomValidity('Dělník musí mít přiřazeného mistra.');
        return false;
    } else {
        nadrizeny.setCustomValidity('');
        return true;
    }
}
