let title = document.querySelector("h1");
let x = -1000;

setInterval(()=>{
    title.style.transform = "translateX("+x+"px)";
    x+=4;
    if(x===1000){
        x=-1000;
    }
},1)

let titles = document.getElementsByClassName("anim");
let x2 = -300;

setInterval(()=>{
    for(let i=0; i < titles.length; i++){
        titles[i].style.transform = "translateX("+x2+"px)";

        x2 +=1.5;
        if(x2>50){
            x2=50;
            titles[i].style.color = "blue";
        }
    }
},1)

let colorChange = document.getElementsByTagName("label");
let change = colorChange.innerHTML;

    for(let i=0; i>colorChange.length; i++){
        change = document.createElement("span");
        colorChange.document.appendChild(change);

    }











