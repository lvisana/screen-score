import './bootstrap';

let url = 'http://screen-score.test/'
let posterPath = 'http://image.tmdb.org/t/p/w500'

if (document.querySelectorAll('#card')) {
    document.querySelectorAll('#card').forEach(el => {
        el.addEventListener('click', function() {
            let id = el.dataset.id

            fetch(url+'home/'+id)
            .then(function(response) {
                return response.json();
            })
            .then(function(json) {
              console.log(json);

                let name = json.user.name
                let date = json.date
                let movieTitle = json.movie.title
                let score = json.score
                let noteTitle = json.note.title
                let noteContent = json.note.content
                let moviePoster = json.movie.poster
                let textColor = ''
                let genreHtml = ''


                if (json.genres.length >= 1) {
                  document.querySelector('#movie-genres').setAttribute('style', 'display:block!important')
                    
                  json.genres.forEach(el => {
                    genreHtml += `<li class="list-inline-item">${el.name}</li>`
                  })

                } else {
                  document.querySelector('#movie-genres').setAttribute('style', 'display:none!important')
                }

                if (json.reviews.length >= 1) {
                  document.querySelector('#movie-rating').setAttribute('style', 'display:block!important')
                } else {
                  document.querySelector('#movie-rating').setAttribute('style', 'display:none!important')
                }


                if (json.user.surname) {
                    name += ' '+json.user.surname
                }


                if (score == 'Bad') {
                  textColor = '#dc3545'
                } else if (score == 'Good') {
                  textColor = '#ffc107'
                } else if (score == 'Very good') {
                  textColor = '#198754'
                }


                if (json.auth || json.admin) {
                  document.querySelector('#note-options').innerHTML = `
                      <a class="link-dark link-underline link-underline-opacity-0 dropdown-item d-flex align-items-center gap-2" href="${url}note/create/${json.note.id}">
                          <i class="fa-solid fa-pencil icon-xsm dropdown-icon"></i>
                          <p class="m-0">Edit</p>
                      </a>
                      <a class="link-danger link-underline link-underline-opacity-0 dropdown-item d-flex align-items-center gap-2" href="${url}note/delete/${json.note.id}">
                          <i class="fa-solid fa-trash icon-xsm dropdown-icon"></i>
                          <p class="m-0">Delete</p>
                      </a>
                  `
                }

                const sum = json.reviews.reduce((a, b) => a + b.rating, 0)
                const avg = Math.ceil(sum / json.reviews.length)


                document.querySelector('#modalLabel #user').textContent = name
                document.querySelector('#modalLabel #date').textContent = date
                document.querySelector('#movie-title').textContent = movieTitle
                document.querySelector('#note-score span').textContent = score
                document.querySelector('#note-score').setAttribute('style', 'color:'+textColor+'!important')
                document.querySelector('#note-title').textContent = noteTitle
                document.querySelector('#note-content').textContent = noteContent
                document.querySelector('#movie-poster').src = `${posterPath}${moviePoster}`
                document.querySelector('#movie-genres ul').innerHTML = genreHtml
                document.querySelector('#movie-rating #rating').textContent = avg
            })
            
        })
    })
}


