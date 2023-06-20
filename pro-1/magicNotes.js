

//if user add a note, add it to local storage

let addBtn = document.getElementById('addBtn');
addBtn.addEventListener("click", function (_e) {

    let addTxt = document.getElementById('addTxt');
    let addTitle = document.getElementById('title');
   
    let notes = localStorage.getItem('notes');
    if (notes == null) {
        notesObJ = [];
    }
    else {
        notesObJ = JSON.parse(notes);
    }
    
   
   let myObJ = {
    title :addTitle.value,
    text :addTxt.value
   }
   notesObJ.push(myObJ)
    localStorage.setItem('notes', JSON.stringify(notesObJ));
    addTxt.value = ''; 
    addTitle.value = '';
    // console.log(titleObJ);
    showNote();
})
function showNote() {

    let notes = localStorage.getItem("notes");

    if (notes == null) {
        notesObJ = [];
    }
    else {
        notesObJ = JSON.parse(notes);
    }

    
    let html = '';
    notesObJ.forEach(function (element,index) {
        html += `
        <div class="noteCard my-2 mx-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" id="addTitle">${element.title}</h5>
                <p class="card-text">${element.text}</p>
                <button id="${index}" onClick="deleteNote(this.id)" class="btn btn-primary">Delete Note</button>
            </div>
        </div>
        `
    });

    let notesElm = document.getElementById("note");
    if (notesObJ.length != 0) {
        notesElm.innerHTML = html;
    } 
    else {
        notesElm.innerHTML = `Nothing to show! Use "Add a Note" section above to add notes.`;
    }

}


//function to delete a note

function deleteNote(index) {
   // console.log('i am deleting', index);
    let notes = localStorage.getItem('notes');
    if (notes == null) {
        notesObJ = [];
    }
    else {
        notesObJ = JSON.parse(notes);
    }
    notesObJ.splice(index,1);
    localStorage.setItem('notes', JSON.stringify(notesObJ));
    showNote();

}
let search = document.getElementById('searchTxt');
search.addEventListener("input",function(){

    let inputVal = search.value;
    //console.log('typing...',inputVal);
    let noteCard = document.getElementsByClassName('noteCard')
    Array.from(noteCard).forEach(function(element){
        let cardTxt = element.getElementsByTagName('p')[0].innerText;
        if(cardTxt.includes(inputVal)){
            element.style.display = "block";
        }
        else{
            element.style.display = "none"
        }

        //console.log(cardTxt);
    });
    
})