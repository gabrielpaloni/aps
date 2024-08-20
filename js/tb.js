   /* Filtragem da tabela */

  // Adiciona um evento que será disparado quando o DOM estiver totalmente carregado
  document.addEventListener('DOMContentLoaded', function () {
    // Seleciona o campo de entrada de pesquisa pelo ID
    const input = document.getElementById('search-input');
  
    // Seleciona a tabela e todas as linhas dentro dela
    const tabela = document.querySelector('table');
    const linhas = tabela.getElementsByTagName('tr');
  
    // Cria a linha "Nenhum resultado encontrado"
    const noResultRow = document.createElement('tr');
    const noResultCell = document.createElement('td');
    noResultCell.colSpan = 3; // Define que a célula abrange 3 colunas
    noResultCell.textContent = 'Nenhum resultado encontrado'; // Define o texto da célula
    noResultCell.classList.add('no-results'); // Adiciona uma classe CSS para estilização
    noResultRow.appendChild(noResultCell); // Anexa a célula à linha
    tabela.appendChild(noResultRow); // Anexa a linha à tabela
  
    // Inicialmente oculta a linha "Nenhum resultado encontrado"
    noResultRow.style.display = 'none';
  
    // Adiciona um ouvinte de evento ao campo de entrada que será disparado toda vez que o usuário digitar algo
    input.addEventListener('input', function () {
      // Obtém o valor do campo de entrada, remove espaços em branco nas extremidades e converte para maiúsculas
      const filtro = input.value.trim().toUpperCase();
      let encontrou = false; // Variável para rastrear se algum resultado foi encontrado
  
      // Itera pelas linhas da tabela, começando na linha 1 (ignorando o cabeçalho) e terminando na penúltima (ignorando "Nenhum resultado encontrado")
      for (let i = 1; i < linhas.length - 1; i++) {
        const colunas = linhas[i].getElementsByTagName('td'); // Obtém todas as células de uma linha específica
        let corresponde = false; // Variável para verificar se a linha corresponde ao filtro
  
        // Verifica apenas as colunas "Artistas" (0) e "Músicas" (1)
        for (let j = 0; j < 2; j++) {
          const texto = colunas[j].textContent.toUpperCase(); // Obtém o texto da célula e converte para maiúsculas
          if (texto.indexOf(filtro) > -1) { // Verifica se o texto da célula contém o texto do filtro
            corresponde = true; // Se encontrar uma correspondência, define como verdadeiro
            break; // Interrompe o loop das colunas, já que a linha corresponde ao filtro
          }
        }
  
        // Exibe ou oculta a linha da tabela com base no filtro
        if (corresponde) {
          linhas[i].style.display = ''; // Exibe a linha
          encontrou = true; // Marca que encontrou pelo menos um resultado
        } else {
          linhas[i].style.display = 'none'; // Oculta a linha
        }
      }
  
      // Exibe ou oculta a linha "Nenhum resultado encontrado"
      if (encontrou) {
        noResultRow.style.display = 'none'; // Oculta a linha "Nenhum resultado encontrado"
      } else {
        noResultRow.style.display = ''; // Exibe a linha "Nenhum resultado encontrado"
      }
    });
  });
  
      /* FIM da filtragem da tabela */
  