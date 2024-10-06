let profile_pic = document.getElementById("kep")
profile_pic.onmouseover = () => {
    profile_pic.src = "kepek/profil_hover.jpg"
}
profile_pic.onmouseout = () => {
    profile_pic.src = "kepek/profil.jpg"
}

let eye = document.querySelector(".eye")
eye.onclick = () => {
    if (eye.style.backgroundImage == 'url("kepek/visible.png")') {
        eye.style.backgroundImage = 'url("kepek/hidden.png")'
        eye.type = "password"
    }
    else {
        eye.style.backgroundImage = 'url("kepek/visible.png")'
        eye.type = "text"
    }
}