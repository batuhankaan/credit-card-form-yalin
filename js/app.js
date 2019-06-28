const Form = document.getElementById("ccForm").addEventListener("submit",info);
const fName = document.getElementById("name");
const fCc = document.getElementById("cc");
const fMmyy = document.getElementById("mmyy");
const fCvc = document.getElementById("cvc");

function info(e){
    console.log(" İsim: " + fName.value + " Kart Numarası: " + fCc.value + " SKT: " + fMmyy.value + " CVC: " + fCvc.value);
    e.preventDefault();
}
















function getCORS(url, success) {
    var xhr = new XMLHttpRequest();
    if (!('withCredentials' in xhr)) xhr = new XDomainRequest(); // fix IE8/9
    xhr.open('GET', url);
    xhr.onload = success;
    xhr.send();
    return xhr;
}


function cnumber(){
        const creditcard = document.getElementById("cc").value.substring(0,6);
        if(creditcard.length === 6){            
            var result = fetchJsonp(`https://bin.sanalpospro.com/?cc=${creditcard}&callback`,{jsonpCallback: 'callback',timeout: 10000})
            result.then(function(response) {
                return response.json()
            }).then(function(json) {
                JSON.stringify(json);
                
            
            getCORS('https://form.paythor.com/credit-yedek/js/test.php', function(){
            const taksit = JSON.parse(this.responseText);
            console.log(taksit);
            const tutar = document.getElementById('tutar').value;
            taksit.forEach(element => {
                if(element.family === json.family){
                    console.log(element.family);
                        const tutarlar = Math.floor(tutar / element.divisor / 100 * element.rate * element.divisor * 100) / 100;
                      const dtable = `
                       <td>${element.rate}</td>
                       <td>${
                           tutar / element.divisor + tutarlar
                           + 
                           " x " 
                           + element.divisor
                        
                        }</td>
                       <td>${tutar}</td>`;
                       document.getElementById("add").innerHTML += dtable;
                }
            });
            });

            })['catch'](function(ex) {
                document.body.innerHTML = 'failed:' + ex;
            });
        }
    }
    cnumber();
    // document.location.hostname site url
