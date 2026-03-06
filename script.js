/* FUNDO ESTRELADO */

const starsContainer = document.createElement("div");
starsContainer.classList.add("stars");
document.body.appendChild(starsContainer);

for(let i=0;i<120;i++){

const star=document.createElement("div");
star.classList.add("star");

star.style.left=Math.random()*100+"vw";
star.style.top=Math.random()*100+"vh";

star.style.animationDuration=(Math.random()*3+2)+"s";

starsContainer.appendChild(star);
}

/* EFEITO MÁGICO NOS BOTÕES */

const buttons=document.querySelectorAll("button");

buttons.forEach(btn=>{
btn.addEventListener("click",function(e){

const sparkle=document.createElement("span");

sparkle.style.position="absolute";
sparkle.style.width="10px";
sparkle.style.height="10px";
sparkle.style.background="white";
sparkle.style.borderRadius="50%";
sparkle.style.left=e.offsetX+"px";
sparkle.style.top=e.offsetY+"px";
sparkle.style.pointerEvents="none";

sparkle.animate([
{transform:"scale(0)",opacity:1},
{transform:"scale(6)",opacity:0}
],{
duration:600,
easing:"ease-out"
});

btn.appendChild(sparkle);

setTimeout(()=>{
sparkle.remove();
},600);

});
});

