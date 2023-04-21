import './bootstrap';

let url = 'http://screen-score.test/'

if (document.querySelectorAll('#card')) {
    document.querySelectorAll('#card').forEach(el => {
        el.addEventListener('click', function() {
            let modal = document.getElementById('modal')
            let id = el.dataset.id

            console.log(id)

            fetch(url+'home/'+id)
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
                console.log(json)
            })
            
        })
    })
}
