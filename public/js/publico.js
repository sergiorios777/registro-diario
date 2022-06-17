document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var selects = document.querySelectorAll('select');

    const textos = document.querySelectorAll('textarea#notas');

    var instances = M.Sidenav.init(elems);
    var instances = M.FormSelect.init(selects);

    M.CharacterCounter.init(textos);
  });
