document.getElementById('randomButton').addEventListener('click', function () {
    fetch('/kalimat/random')
        .then(response => response.text())
        .then(data => {
            // Tampilkan kalimat pada elemen dengan ID unik "quoteContainer"
            document.getElementById('quoteContainer').innerText = data;
        })
        .catch(error => {
            console.error('Terjadi kesalahan:', error);
        });
});
