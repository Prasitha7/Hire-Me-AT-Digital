const canvas = document.querySelector(".at-sub-sequence");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const context = canvas.getContext("2d");
const frameCount = 30;

const currentFrame = (index) => `../../assets/sequences/sequ1/${(index+1).toString()}.webp`;
const images = [];
let pj = {frame : 0}

for(let i = 0; i<frameCount; i++){
    const img = new Image();
    img.src = currentFrame(i);
    images.push(img)
}


document.addEventListener("mousemove", (event) => {
    // Update the frame based on the horizontal cursor position
    const xPercentage = event.clientX / window.innerWidth;
    pj.frame = Math.floor(xPercentage * frameCount);
    render();
});

images[0].onload = render;

function render(){
    context.clearRect(0,0, canvas.width, canvas.height);
    context.drawImage(images[pj.frame], 0, 0);
}
