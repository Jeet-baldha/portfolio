console.log('Hello World !')


//intialize new container
let source = "bbc-news";
let apiKey = "d6ca4bf72f13478095028d0d916f0680";


let newsAccordion = document.getElementById('newsAccordion');

//get aJax get request
const xhr = new XMLHttpRequest();
xhr.open('GET', `https://newsapi.org/v2/top-headlines?sources=${source}&apiKey=${apiKey}`, true);

//what to  do when response is ready 

xhr.onload = function () {
    if (this.status === 200) {
        let Json = JSON.parse(this.responseText)
        let articles = Json.articles;
        // console.log(articles)
        let newshtml = "";
        articles.forEach(function (element, index) {
            console.log(articles);
            let news = `
            <div class="card card-header my-2 mx-2" id="heading${index}">
            <h2 class="mb-0">
            <button class="btn btn collapsed text-start" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${index}" aria-expanded="false" aria-controls="#collapse${index}">
                <b>Breaking News ${index + 1}:</b> ${element["title"]}
            </button>
            </h2>
                <div>
                    <div class="collapse collapse-horizontal my-2" id="collapse${index}">
                        <div class="card card-body">
                            ${element["content"]}. <a href="${element['url']}" target="_blank" >Read more here</a>
                        </div>
                    </div>
                </div>
                </div>`;

            newshtml += news;

            newsAccordion.innerHTML = newshtml;
        })

    }
    else {
        console.log('some error found')
    }
}
xhr.send();

