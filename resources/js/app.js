import './bootstrap';

fetch('routes/api/quotes')
    .then(response => response.json())
    .then(data => {
        const quotes = data.quotes;

        const quoteContainer = document.getElementById('Quotes');

        quotes.forEach(quote => {
            const quoteElement = document.createElement('p');
            quoteElement.textContent = quote.quote;
            quoteContainer.appendChild(quoteElement);
        });
    })
    .catch(error => {
        console.error('Terjadi kesalahan:', error);
});
