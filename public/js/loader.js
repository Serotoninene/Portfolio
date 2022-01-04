const loader = document.querySelector('.loader');

/* Premier test pour le loader */
/*window.onload = function(){
    loader.classList.add('show');
}
    .then( () =>{
        loader.classList.remove('show')
        }
    )

window.onloadend = function(){
    loader.classList.remove('show');
}*/


/* Deuxième test pour le loader  */
window.addEventListener("load", () =>{
    loader.classList.add('hidden');
})

// console.log(window.XMLHttpRequest.LOADING)

window.addEventListener("progress", (e)=>{
    console.log(e);
})

let queue = new createjs.LoadQueue()

queue.on("progress", event => {
    let progress = Math.floor(event.progress * 100);
    let loaderPercentage = document.querySelector('.loader-percentage')
    loaderPercentage.innerText = `${progress}%`;
})


queue.loadFile({id:"rando", src:"assets/photos/photoRando.png"});
queue.loadFile({id:"toulouse", src:"assets/photos/photoToulouse.jpg"});
queue.loadFile({src: "assets/video/salut.mov"})
queue.loadFile({src: "assets/video/serotoninene.mp4"})

/*
xhr: function() {
    var xhr = new window.XMLHttpRequest();
    //Upload progress
    xhr.upload.addEventListener("progress", function(evt) {
        if (evt.lengthComputable) {
            var percentComplete = evt.loaded / evt.total;
            //Do something with upload progress
            console.log(percentComplete);
        }*/
