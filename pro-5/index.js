console.log("Helloword ");

//array of ObJect
const data = [
    {
        name : 'Raju',
        age: 18,
        city:'Dubai',
        launguage:'python',
        framework:'Django',
        image:'https://randomuser.me/api/portraits/men/75.jpg'
    },

    {
        name : 'Bhim',
        age: 22,
        city:'Delhi',
        launguage:'Java',
        framework:'mongo',
        image:'https://randomuser.me/api/portraits/men/77.jpg'
    },

    {
        name : 'Chutkki',
        age: 19,
        city:'Mumbai',
        launguage:'JavaScript',
        framework:'reactJS',
        image:'https://randomuser.me/api/portraits/women/75.jpg'
    },

    {
        name : 'Kaliya',
        age: 20,
        city:'surat',
        launguage:'C++',
        framework:'C++ frameWork',
        image:'https://randomuser.me/api/portraits/men/79.jpg'
    },

    {
        name : 'Tuntun moshi',
        age: 44,
        city:'Chennai',
        launguage:'Ruby',
        framework:'dlask',
        image:'https://randomuser.me/api/portraits/women/77.jpg'
    },

    {
        name : 'Indumati',
        age: 18,
        city:'Rajkot',
        launguage:'CSS',
        framework:'taliwand',
        image:'https://randomuser.me/api/portraits/women/79.jpg'
    },

]


//CV iteratir

function cvItertor(profiles){
    let nextIndex=0;
    return{
        next:function(){
            return nextIndex<profiles.length ?
            {value:profiles[nextIndex++],done:false} :
            {done:true}
        }
    };
}

//button listner

const but = document.getElementById('btn');
but.addEventListener('click',nextCV);

const candidates = cvItertor(data);
nextCV();
function nextCV (){
    const currentCandi = candidates.next().value;

    let image = document.getElementById('image');
    let profile = document.getElementById('profile');

    if(currentCandi != undefined){
    image.innerHTML =`<img src="${currentCandi.image}">`;
    profile.innerHTML = `<ul class="list-group">
    <li class="list-group-item">Name: ${currentCandi.name}</li>
    <li class="list-group-item">${currentCandi.age} years old</li>
    <li class="list-group-item">lives in ${currentCandi.city}</li>
    <li class="list-group-item">primary works on ${currentCandi.launguage}</li>
    <li class="list-group-item"> uses ${currentCandi.framework} frame work</li>
  </ul>`
    }
    else{
        alert('End of candidates profile');
        window.location.reload()
    }
}