   /* Filtragem da tabela */

  document.addEventListener('DOMContentLoaded', function () {

    const input = document.getElementById('search-input');

    const tabela = document.querySelector('table');
    const linhas = tabela.getElementsByTagName('tr');

    const noResultRow = document.createElement('tr');
    const noResultCell = document.createElement('td');
    noResultCell.colSpan = 3;
    noResultCell.textContent = 'Nenhum resultado encontrado';
    noResultCell.classList.add('no-results');
    noResultRow.appendChild(noResultCell);
    tabela.appendChild(noResultRow);
  
    noResultRow.style.display = 'none';
  
    input.addEventListener('input', function () {

      const filtro = input.value.trim().toUpperCase();
      let encontrou = false;
  
      for (let i = 1; i < linhas.length - 1; i++) {
        const colunas = linhas[i].getElementsByTagName('td');
        let corresponde = false;
  
        for (let j = 0; j < 2; j++) {
          const texto = colunas[j].textContent.toUpperCase();
          if (texto.indexOf(filtro) > -1) {
            corresponde = true;
            break;
          }
        }
  
        if (corresponde) {
          linhas[i].style.display = '';
          encontrou = true;
        } else {
          linhas[i].style.display = 'none';
        }
      }
  
      if (encontrou) {
        noResultRow.style.display = 'none';
      } else {
        noResultRow.style.display = '';
      }
    });
  });
/* FIM da filtragem da tabela */