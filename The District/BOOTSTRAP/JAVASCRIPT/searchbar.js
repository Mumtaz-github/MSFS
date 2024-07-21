// searchbar.js

// Get the search form and input field
const searchForm = document.querySelector('.ongletrecherche form');
const searchInput = document.querySelector('.ongletrecherche input[type="search"]');

// Add an event listener to the form submission
// searchForm.addEventListener('submit', (e) => {
//   e.preventDefault();

//   console.log('Search form submitted');

//   // Send the search query to the backend endpoint
//   fetch('search.php', {
//     method: 'GET',
//     params: {
//       q: searchInput.value
//     }
//   })
//   .then(response => {
//     console.log('Response received:', response);
//     return response.json();
//   })
//   .then(data => {
//     console.log('Data parsed:', data);
//     const resultsContainer = document.getElementById('search-results');
//     resultsContainer.innerHTML = '';
//     data.forEach(result => {
//       const resultHTML = `<li>${result.column}</li>`;
//       resultsContainer.innerHTML += resultHTML;
//     });
//   })
//   .catch(error => console.error('Error:', error));
// });

searchForm.addEventListener('submit', (e) => {
  e.preventDefault();

  const searchQuery = searchInput.value.trim();
  if (searchQuery) {
    fetch(`search.php?q=${searchQuery}`)
     .then(response => response.json())
     .then(data => {
        const resultsContainer = document.getElementById('search-results');
        resultsContainer.innerHTML = '';
        data.plat.forEach(result => {
          const resultHTML = `
            <div class="col">
              <div class="card h-80">
                <a href="plats.php?id=${result.id}">
                  <img src="img/${result.image}" class="card-img-top" alt="${result.libelle}">
                </a>
                <div class="card-body">
                  <h5 class="card-title">${result.libelle}</h5>
                  <p class="card-text">${result.description}</p>
                  <p class="card-text">Prix: ${result.prix} €</p>
                  <a href="../PHP/Commande.php?id=${result.id}" class="btn btn-dark btn-lg rounded-pill" id="pla">Commander</a>
                </div>
              </div>
            </div>
          `;
          resultsContainer.innerHTML += resultHTML;
        });
      })
     .catch(error => console.error('Error:', error));
  }
});