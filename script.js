const form = document.querySelector('form');
  const buscarDadosBtn = document.querySelector('#buscarDados');
  const dadosPais = document.querySelector('#dadosPais');
  const totalMortes = document.querySelector('#totalMortes');

  buscarDadosBtn.addEventListener('click', function() {
    const selectedCountry = document.querySelector('input[name="pais"]:checked').value;
    const url = `https://dev.kidopilabs.com.br/exercicio/covid.php?pais=${selectedCountry}`;

    fetch(url)
      .then(response => response.json())
      .then(data => {
        // Mostra os dados correspondentes ao país selecionado
        let countryData = '';
        let totalDeaths = 0;
        for (const key in data) {
          if (Object.hasOwnProperty.call(data, key)) {
            const province = data[key].ProvinciaEstado;
            const confirmed = data[key].Confirmados;
            const deaths = data[key].Mortos;
            Totalconfirmed =+ confirmed;
            totalDeaths += deaths;
            countryData += `<p>${province}: Confirmados ${confirmed}, Mortos ${deaths}</p>`;
          }
        }
        dadosPais.innerHTML = countryData;
        totalMortes.textContent = `Total de Mortes: ${totalDeaths}`;
        totalConfirmados.textContent = `Total de Confirmados: ${Totalconfirmed}`;


        // Envia os dados para o backend em localhost:3000
        enviarDadosParaBackend({ pais: selectedCountry,totalConfirmados: Totalconfirmed, totalMortes: totalDeaths});
      })
      .catch(error => {
        console.error('Erro ao buscar dados:', error);
        dadosPais.innerHTML = 'Erro ao buscar dados. Por favor, tente novamente mais tarde.';
      });
  });

  function enviarDadosParaBackend(dados) {
    fetch('http://localhost:3000', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(dados)
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Erro ao enviar dados para o backend.');
      }
      console.log('Dados enviados com sucesso para o backend.');
    })
    .catch(error => {
      console.error('Erro ao enviar dados para o backend:', error);
    });
  }