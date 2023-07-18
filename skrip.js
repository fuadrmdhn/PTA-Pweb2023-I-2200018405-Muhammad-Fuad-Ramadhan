document.getElementById('formTransaksi').addEventListener('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);

    fetch('proses.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('tabelTransaksi').innerHTML = data;
        document.getElementById('formTransaksi').reset();
    })
    .catch(error => console.error(error));
});