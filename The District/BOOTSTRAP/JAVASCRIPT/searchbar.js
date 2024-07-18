// searchbar.js

// Get the search form and input field
const searchForm = document.querySelector('.ongletrecherche form');
const searchInput = document.querySelector('.ongletrecherche input[type="search"]');

// Add an event listener to the form submission
searchForm.addEventListener('submit', (e) => {
  e.preventDefault();

  console.log('Search form submitted');

  // Send the search query to the backend endpoint
  fetch('search.php', {
    method: 'GET',
    params: {
      q: searchInput.value
    }
  })
  .then(response => {
    console.log('Response received:', response);
    return response.json();
  })
  .then(data => {
    console.log('Data parsed:', data);
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';
    data.forEach(result => {
      const resultHTML = `<li>${result.column}</li>`;
      resultsContainer.innerHTML += resultHTML;
    });
  })
  .catch(error => console.error('Error:', error));
});






 /* pour la page de categorie */

 function precedent()                    
 {
     document.getElementById("carouselcatprec").click();
 }
 
 function suivant()
 {
     document.getElementById("carouselcatsuiv").click();
 }