function validace() {
    var jmeno = document.forms['osoba']['jmeno'].value + " " + document.forms['osoba']['prijmeni'].value;
    var pozice = document.forms['osoba']['pozice'];
    var nadrizeny = document.forms['osoba']['nadrizeny'];
    var flag1 = false;
    var flag2 = false;
    var flag3 = false;

    console.log(jmeno);

    //Validace nadřízeného
    if (pozice.value === 'dělník' && nadrizeny.value === '') {
        nadrizeny.setCustomValidity('Dělník musí mít přiřazeného mistra.');
        flag1 = false;
    } else {
        flag1 = true;
    }

    if (pozice.value === 'mistr' && nadrizeny.value !== '') {
        nadrizeny.setCustomValidity('Mistr nesmí mít přiřazeného nadřízeného.');
        flag2 = false;
    } else {
        flag2 = true;
    }

    if (jmeno === nadrizeny.value) {
        nadrizeny.setCustomValidity('Zaměstnanec nemůže být mistrem sám sobě.');
        flag3 = false;
    } else {
        flag3 = true;
    }


    if (flag1 == flag2 == flag3 == true) {
        nadrizeny.setCustomValidity('');
        return true;
    }
    return false;
}
