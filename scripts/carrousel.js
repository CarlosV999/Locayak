var httpRequest;
const defilement = 3000;
//var imageId = document.getElementById("imageId").value;
var imageId;
/**
document.getElementById("ajaxImage").onclick = function() 
{ faireRequete('carrousel.php');};
**/
setInterval(faireRequete, defilement);

function faireRequete(){
    httpRequest = new XMLHttpRequest();
    imageId = document.getElementById("imageId").innerHTML;
    url = "carrousel.php"
    if(!httpRequest){
        alert('Abandon :( Impossible de créer une instance de XMLHTTP');
        return false;
    }
    httpRequest.onreadystatechange = afficherImage;
    httpRequest.open("GET", url+"?imageId="+imageId);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send();

}
function afficherImage(){
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){
           var data = httpRequest.responseText;
           
            try {
                var reponseJson = JSON.parse(data);
                document.getElementById("ajaxImage").src = "images/"+reponseJson.image;
                //imageId = reponseJson.id;
                document.getElementById("imageId").innerHTML = reponseJson.id;  
                document.getElementById("annonceImg").href = "Annonce.php?id="+reponseJson.id;
            } catch (error) {
                //alert("dans marde");
                document.getElementById("imageId").innerHTML = "1";
                faireRequete();
            }              
        }else{
            alert('Il a eu un problème avec la requête.');
        }
    }
}