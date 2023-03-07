  ////////////////////////////////////////////////////////////////////////////////
  ///////////////////////handling the connexon //////////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////
  // alert("connect");

  const connexionForm = document.getElementById("connexion");
const conMsg = document.getElementById("conMsg");

  connexionForm.addEventListener("submit" , (e)=>{
e.preventDefault();
//fetch the data from the form

const connexionData = new FormData(connexionForm);

for (const item of connexionData) {
  console.log(item[0], item[1]);
}
fetchConnexion(connexionData);
 })

 async function fetchConnexion(connexionData){

  const response = await fetch("./php/connexion.php",{

    method: 'POST',
    body: connexionData
  }); 
    
const data = await response.text();
console.log(data);
if(data == "connected"){
  window.location.reload();
  // conMsg.innerHTML = "connected";

}
if(data == "something went worng"){
  conMsg.innerHTML = "Login failed";
}

  }
 