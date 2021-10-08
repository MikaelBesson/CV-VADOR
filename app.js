
    /*Animation du titre h1*/

let title = document.querySelector("h1");
let x = -1000;

setInterval(()=>{

        title.style.transform = "translateX("+x+"px)";
        x+=4;
        if(x===1000){
            x=-1000;
        }
    },1)

    /*Animation des titres h2*/

let titles = document.getElementsByClassName("anim");
let x2 = -300;

setInterval(()=>{
    for(let i=0; i < titles.length; i++){
        titles[i].style.transform = "translateX("+x2+"px)";

        x2 +=3;
        if(x2>50){
            x2=50;
            titles[i].style.color = "blue";
        }
    }
},1)

    /*Cache des balises section*/

let sect = document.querySelectorAll("section");
let tog1 = document.querySelectorAll(".roll");

sect.forEach(function(e){
    e.style.display = "none";
});

tog1.forEach(function(e){
    e.addEventListener("click",function (){
        if(e.parentElement.nextElementSibling.style.display === "none"){
            e.parentElement.nextElementSibling.style.display = "block";
        }
        else{
            e.parentElement.nextElementSibling.style.display = "none";
        }
    })
})

    /*changement de couleur des balise "label" au survol de la souris*/

let labs = document.getElementsByTagName("label");

for(let label of labs){

    let letter = label.innerHTML.split("");
    label.innerHTML = "";

    for(let x=0; x<letter.length; x++){
        let span = document.createElement("span");
        span.innerHTML = letter[x];
        label.appendChild(span);
    }

    label.addEventListener('mouseover', function (){
        let letterTab = label.getElementsByTagName("span");
        let interval = (x) => {
            setTimeout(()=> {
                letterTab[x].style.color = 'red';
                letterTab[x].style.fontStyle ='italic';
                x++;
                if(x < letterTab.length){
                    interval(x);}
                },50);
            }
            interval(0);
    })
    label.addEventListener('mouseout', function (){
        let letterTab = label.getElementsByTagName("span");
        let interval = (x) => {
            setTimeout(()=> {
                letterTab[x].style.color = '';
                letterTab[x].style.fontStyle ='';
                x++;
                if(x < letterTab.length){
                    interval(x);}
            },50);
        }
        interval(0);
    })
}










































