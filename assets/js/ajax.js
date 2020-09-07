
let url = 'https://api.themoviedb.org/3/movie/top_rated?api_key=90553f2e22401f3500190ca7e9db0fe1&language=en-US&page=1';
/*let myFetch = fetch(url).then((result) => {
    console.log(result.json());
    document.getElementById("output").innerHTML = result;
})*/

let apiKey = '90553f2e22401f3500190ca7e9db0fe1';
let baseUrl = 'https://api.themoviedb.org/3/';
let baseImgUrl = 'https://image.tmdb.org/t/p/w185';

let imageURLData = null;
let configData = null;

let getConfig = function() {
    //let url = ''.concat(baseUrl, 'configuration?api_key=', apiKey); baseUrl + 'configuration?api_key=' + apiKey;
    fetch(url)
    .then((result) => {
        return result.json();
    })
    .then((data) => {
        //creating elements
        for (let i=0; i<data.results.length; i++) {

            let new_img = document.createElement('img');
            let my_big_container = document.getElementById("big_container");
            let my_title_paragraph = document.createElement('p');
            let my_popular_paragraph = document.createElement('p');
            let my_vote_paragraph = document.createElement('p');
            let posterPath = data.results[i].poster_path;
    
            new_img.src = baseImgUrl + posterPath;
    
            //adding id
            my_title_paragraph.id = 'title_paragraph' + [i];
            my_popular_paragraph.id = 'popular_paragraph' + [i];
            my_vote_paragraph.id = 'vote_paragraph' + [i];
    
            //adding textContent
            my_title_paragraph.textContent = 'title: ' + data.results[i].title;
            my_popular_paragraph.textContent = 'popularity: ' + data.results[i].popularity;
            my_vote_paragraph.textContent = 'vote average: ' + data.results[i].vote_average;

            //Adding margin on the last
            my_vote_paragraph.style = 'margin-bottom: 100px';
    
            //Appending
            my_big_container.appendChild(new_img);
            my_big_container.appendChild(my_title_paragraph);
            my_big_container.appendChild(my_popular_paragraph);
            my_big_container.appendChild(my_vote_paragraph);

        }
        

        console.log('config: ', data); //data.results[0].id
        console.log('config fetched');
        //runSearch('jaws');
    })
    .catch(function(err) {
        alert(err);
    });
}

let runSearch = function(keyword) {
    let url = baseUrl + 'search/movie?api_key=' + apiKey + '&query=' + keyword;
    fetch(url)
    .then(result => result.json())
    .then((data) => {
        document.getElementById('output').innerHTML = JSON.stringify(data, null, 4);
    })
}

document.addEventListener('DOMContentLoaded' , getConfig);


/*let p1 = new Promise((resolve, reject) => {
    let x = 5;
    setTimeout(() => {reject(x);}, 1500)
})
p1.then((ex) => {
    console.log(ex);
    return ex;
}).then((x) => {
    console.log(x);
}).catch((exx) => {
    console.log('caught', exx);
})*/ 

/*fetch(uri).then( function(response) {
    if (response.status == 200) {
        return response.json();
    } else {
        throw new Error('invalid user ID');
    }
}).then((data) => {
    console.log(data);
}).catch((err) => {
    console.log('Error:', err.message);
})*/


/*for (let i=0; i<data.results.length; i++) {
            document.createElement('')
        }*/
