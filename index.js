

let sideMenu = document.getElementById("sidemenu");

function openmenu(){
    sideMenu.style.right="0"
}

function closemenu(){
    sideMenu.style.right="-200px";
}

const scriptURL = 'https://script.google.com/macros/s/AKfycbzpRfEloZFJbj_gmOHM20nKVkVDj4JE3gEtvH07txe4clerJMo9q3rsvIT548hbBoJJJQ/exec'
			const form = document.forms['google-sheet']
		  
			form.addEventListener('submit', e => {
			  e.preventDefault()
			  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
				.then(response => alert("Thank you! your form is submitted successfully." ))
				.then(() => {  window.location.reload(); })
				.catch(error => console.error('Error!', error.message))
			})




