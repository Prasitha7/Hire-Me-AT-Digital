const canvas = document.querySelector(".at-main-sequence");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const context = canvas.getContext("2d");
const frameCount = 60;

const currentFrame = (index) => `../../assets/sequences/sequ2/${(index+1).toString()}.webp`;
const images = [];
let pj = {frame : 0}

for(let i = 0; i<frameCount; i++){
    const img = new Image();
    img.src = currentFrame(i);
    images.push(img)
}

gsap.to(pj,{
        frame:frameCount-1,
        snap:"frame",
        ease:"none",
        scrollTrigger:{
            scrub: true,
            pin:"canvas",
            end:"300%",
        },
        onUpdate: render,
    }
)

images[0].onload = render;

function render(){
    context.clearRect(0,0, canvas.width, canvas.height);
    context.drawImage(images[pj.frame], 0, 0);
}
