const stars = document.createElement("div");

stars.style.position="fixed";
stars.style.top="0";
stars.style.left="0";
stars.style.width="100%";
stars.style.height="100%";
stars.style.zIndex="-1";

document.body.appendChild(stars);

for(let i=0;i<120;i++){

let star=document.createElement("div");

star.style.position="absolute";
star.style.width="2px";
star.style.height="2px";
star.style.background="white";

star.style.left=Math.random()*100+"vw";
star.style.top=Math.random()*100+"vh";

stars.appendChild(star);

}