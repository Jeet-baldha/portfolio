console.log("Hello World")

//cunstrutor

function Book (name,author,type){
    this.name = name;
    this.author = author;
    this.type =type;

}

//display cuntrutor

function display (){

}

// addd methods to display prototype



//add submit event listener to library form

let libraryForm = document.getElementById('libraryForm');

libraryForm.addEventListener('submit',libraryFormSubmit)
function libraryFormSubmit(event){
    
    console.log('you have submit');

    let name = document.getElementById('bookname').value;
    let author = document.getElementById('author').value;
    let programing = document.getElementById('programing');
    let knowlage = document.getElementById('knowlage');
    let science = document.getElementById('science');

    let type 
    if (programing.checked) {
        type = programing.value;
    }
    else if (knowlage.checked) {
        type =knowlage.value;
    }
    else if (science.checked) {
        type = science.value;
    }

    let book = new Book(name,author,type);
    console.log(book);


    event.preventDefault();
}