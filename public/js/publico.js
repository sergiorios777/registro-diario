document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var selects = document.querySelectorAll('select');

    const textos = document.querySelectorAll('textarea#notas');
    var ayudas = document.querySelectorAll('.tooltipped');

    var instances = M.Sidenav.init(elems);
    var instances = M.FormSelect.init(selects);
    var instances = M.Tooltip.init(ayudas);

    M.CharacterCounter.init(textos);

  });
