
  var caller = "";

function showCustomer(str, caller) {
    var xhr =  new XMLHttpRequest();
    this.responseType = 'text';
    xhr.onreadystatechange  =  function() {
        
        var ourData = xhr.response;
        if (this.readyState == 4 && this.status == 200) {//if result successful
            var ourData = xhr.responseText.split(":");
            update(ourData, str);
            // document.getElementById(str).innerHTML = xhr.responseText;
            // console.log(ourData+ " hell");
            // return ourData;
        }
        
    };

    switch (caller){
        case "infrastructure":
            xhr.open("GET", "getdata.php", true);
            break;
        case "home":
            xhr.open("GET", "url", true);//other php files here
            break;
        default:
            ;
    }
    // xhr.open("GET", "getdata.php", true);
    xhr.setRequestHeader("Content-type", "text/plain");
    xhr.send();

    // document.getElementById(str).innerHTML ="<th class=head-item mbr-fonts-style display-7>Name of Indl. Plot</th><th class=head-item mbr-fonts-style display-7>Total extent of land (cent)</th><th class=head-item mbr-fonts-style display-7>Total allottable land (cent)</th><th class=head-item mbr-fonts-style display-7>Total allotted land (cent)</th><th class=head-item mbr-fonts-style display-7>Ashish is best</th></tr>";

  }
  function sendMail(){
    console.log("in sendMail\n");
    var form = new FormData(document.getElementById("form1"));
    var xhr =  new XMLHttpRequest();
    xhr.open("post", "sendmail.php", true);
    xhr.setRequestHeader("Content-type", "text/plain");
    xhr.send("data:"+ "ashish");

    if (this.readyState == 4 && this.status == 200) {//if result successful
        update(ourData, str);
        // document.getElementById(str).innerHTML = xhr.responseText;
        // console.log(ourData+ " hell");
        // return ourData;
    }
    return false;
   
  }
//   object = document.getElementById("form1");
//   object.addEventListener("submit", sendMail());

  function update(ourData, str){
    var newstr = str.split(":");
    document.getElementById(newstr[0]).innerHTML = ourData[0];
    document.getElementById(newstr[1]).innerHTML = ourData[1];
    document.getElementById(newstr[2]).innerHTML = ourData[2];
    document.getElementById(newstr[3]).innerHTML = ourData[3];
    // document.getElementById(newstr[i]).innerHTML =  ourData[2].toUpperCase()+" ";
    // document.getElementById(newstr[i]).innerHTML =  ourData[3];

    
  };
