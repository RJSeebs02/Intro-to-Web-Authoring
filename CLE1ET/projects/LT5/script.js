window.onload = () => {
    const transition_el = document.querySelector('.transition');

    setTimeout(() => {
        transition_el.classList.remove('is-active');
    }, 500);
}
document.getElementById("display").onclick = function (){
    document.getElementById("specs").innerHTML = "<b><span class='highlight'>DISPLAY</span></b><br>6.7\" FHD+ 120Hz<br>AMOLED display";
}
document.getElementById("processor").onclick = function (){
    document.getElementById("specs").innerHTML = "<b><span class='highlight'>PROCESSOR</span></b><br>Qualcomm Snapdragon 870 5G<br>7nm up to 3.2GHz";
}
document.getElementById("camera").onclick = function (){
    document.getElementById("specs").innerHTML = "<b><span class='highlight'>CAMERA</span></b><br>48MP triple camera with<br>innovative three-microphone system";
}
document.getElementById("battery").onclick = function (){
    document.getElementById("specs").innerHTML = "<b><span class='highlight'>BATTERY</span></b><br>4520mAh Battery<br>(33W fast-charging)";
}