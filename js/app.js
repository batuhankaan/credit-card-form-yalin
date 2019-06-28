const Form = document.getElementById("ccForm").addEventListener("submit",info);
const fName = document.getElementById("name");
const fCc = document.getElementById("cc");
const fMmyy = document.getElementById("mmyy");
const fCvc = document.getElementById("cvc");

function info(e){
    console.log(" İsim: " + fName.value + " Kart Numarası: " + fCc.value + " SKT: " + fMmyy.value + " CVC: " + fCvc.value);
    e.preventDefault();
}


function cnumber(){
        const creditcard = document.getElementById("cc").value.substring(0,6);
        if(creditcard.length === 6){            
            var result = fetchJsonp(`https://bin.sanalpospro.com/?cc=${creditcard}&callback`,{jsonpCallback: 'callback',timeout: 10000})
            result.then(function(response) {
                return response.json()
            }).then(function(json) {
                JSON.stringify(json);
                
              const dtable = `
               <td>${json.bank}</td>
               <td>${json.family}</td>
               <td>${json.installment}</td>`;
                document.getElementById("add").innerHTML = dtable;
            })['catch'](function(ex) {
                document.body.innerHTML = 'failed:' + ex;
            });
        }
    }
    cnumber();
    // console.log(document.location.hostname)
   
               
        // var result = fetchJsonp("http://form.paythor.com/credit-yedek/js/test.php",{jsonpCallback: 'callback',timeout: 3000})
        // console.log(result)
        // result.then(function(response) {
        //     return response.json()
        // }).then(function(json) {
        //     // JSON.stringify(json);
        //     console.log(json[0])
        // //    json.forEach(element => {
        // //         console.log(element);
        // //    });
            
        // })['catch'](function(ex) {
        //    console.log('failed:' + ex);
        // });

        // let xhr = new XMLHttpRequest();

        // function loadXMLDoc() {
        //     var xhttp = new XMLHttpRequest();
        //     xhttp.onreadystatechange = function() {
        //       if (this.readyState == 4 && this.status == 200) {
        //         console.log(this.responseText);
        //       }
        //     };
        //     xhttp.open("GET", "test.php", true);
        //     xhttp.send();
        //   }
    // document.location.hostname site url

    function getCORS(url, success) {
        var xhr = new XMLHttpRequest();
        if (!('withCredentials' in xhr)) xhr = new XDomainRequest(); // fix IE8/9
        xhr.open('GET', url);
        xhr.onload = success;
        xhr.send();
        return xhr;
    }
    
    getCORS('https://form.paythor.com/credit-yedek/js/test.php', function(){
        const response = JSON.parse(this.responseText);
        console.log(response[0]);
        response.forEach(element => {
            console.log(element.fee);
            document.body.innerHTML += element.fee+"<br>";
            
        });
    });