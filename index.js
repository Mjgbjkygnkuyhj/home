const phPluse=document.querySelector(".mac-book-air15-phplusfill");
const phPluse2=document.querySelector(".mac-book-air15-phplusfill2");
const phPluse3=document.querySelector(".mac-book-air15-phplusfill1");
const phPluse4=document.querySelector(".mac-book-air15-phplusfill3");
const monMid=document.querySelector(".mac-book-air15-component1");
const templateOne=document.querySelector("template.one");
const templateTwo=document.querySelector("template.two");
phPluse.addEventListener("click",appDiv);
phPluse2.addEventListener("click",appDiv);
phPluse3.addEventListener("click",appDiv);
phPluse4.addEventListener("click",appDiv2);
function appDiv(e) {
    const divChange = templateOne.content.children[0].cloneNode(true); 
    let place=e.target.parentElement.querySelector(".place");
    place.appendChild(divChange)
    divChange.querySelector("input").focus();
    divChange.querySelector(".min").addEventListener("click",removeParent)
}
function appDiv2(e) {
    const divChange = templateTwo.content.children[0].cloneNode(true); 
    let place=e.target.parentElement.querySelector(".place");
    place.appendChild(divChange);
        divChange.querySelector(".min").addEventListener("click",removeParent)
}
function removeParent(e){
    e.target.parentElement.remove();
}
// min mor
let monMidKids=Array.from(monMid.children)
console.log(monMidKids);
monMidKids.forEach(kid =>{
    kid.addEventListener("click",(e)=>{
        monMid.querySelector(".active").classList.remove("active")
        e.currentTarget.classList.add("active")
    })
})
    // min mor