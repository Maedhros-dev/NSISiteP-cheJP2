function show_hide(arg) {
    let ci = document.getElementById("i"+arg);
    let ct = document.getElementById("t"+arg);
    if (ct.style.display === "none" || !ct.style.display) {
        ct.style.display = "flex";
        ci.style.filter = "brightness(50%)";
        ci.style.transition = "all 0.5s ease-in-out";
    }
    else {
        ci.style.filter = "brightness(100%)";
        ci.style.transition = "all 0.5s ease-in-out";
        ct.style.display = "none";
    };
};

function Cform() {
    let fa = document.getElementById("fage").value;
    let fp = document.getElementById("fparc").value;
    let fs = document.getElementById("fsexe").value;
    let ft = document.getElementById("ftime").value;
    let res = "";
    let resl = "";
    
    if (ft === "1") {
        if (fa === "1") {
            res = "Carte découverte -12 ans";
            resl = "https://www.peche35.fr/uploads/Image/ec/36181_625_carte-de-12-ans-2023.png";
        }
        else if (fa === "2") {
           res = "Carte personne mineure";
            resl = "https://www.peche35.fr/uploads/Image/83/36180_568_carte-mineure-2023.png";
        }
        else if (fa === "3") {
            if (fp === "1") {
                if (fs === "1") {
                  res = "Carte personne majeure";
                  resl = "https://www.peche35.fr/uploads/Image/ed/36178_260_carte-majeure-2023.png";
                }
                else if (fs === "2") {
                  res = "Carte promotionnelle découverte femme";
                  resl = "https://www.peche35.fr/uploads/Image/bf/36179_507_carte-femme-2023.png";
                }
            }
            else if (fp === "2") {
                if (fs === "1") {
                  res = "Carte interfédérale personne majeure";
                  resl = "https://www.peche35.fr/uploads/Image/80/36177_179_carte-interfederale-2023.png";
                }
                else if (fs === "2") {
                    res = "Carte promotionnelle découverte femme";
                    resl = "https://www.peche35.fr/uploads/Image/bf/36179_507_carte-femme-2023.png";
                }
            }
        }
    }
    else if (ft === "2") {
        res = "Carte Hebdomadaire";
        resl = "https://www.peche35.fr/uploads/Image/a4/36182_681_carte-hebdo-2023.png";
    }
    else if (ft === "3") {
        res = "Carte Journalière";
        resl = "https://www.peche35.fr/uploads/Image/6b/36183_779_carte-journaliere-2023.png";
    }
    document.getElementById("tres").textContent = `Vous devez prendre une ${res}`;
    document.getElementById("ires").style.backgroundImage = `url(${resl})`;
    document.getElementById("ires").style.display = "block";
};


function zoomIn(arg) {
    let zinf = document.getElementById('zinf');
    let zinfc = document.getElementById("zinfcontent");
    zinf.style.display = "block";
    if ((arg.width)*2 >= window.screen.width || (arg.height)*2 >= window.screen.height) {
        zinfc.style.width = `${(arg.width)*0.75}`;
        zinfc.style.height = `${(arg.height)*0.75}`;
    }
    else {
        zinfc.style.width = `${(arg.width)*1.5}`;
        zinfc.style.height = `${(arg.height)*1.5}`;
    }
    zinfc.src = `${arg.src}`;
};

function zoomOut() {
    document.getElementById('zinf').style.display = "none";
}