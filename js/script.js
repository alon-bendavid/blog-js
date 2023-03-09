






  

  ////////////////////////////////////////////////////////////////////////////////
  ///////////////////////handling the inscription form////////////////////////////
  ///////////////////////////////////////////////////////////////////////////////
    const form = document.getElementById("signUp");
    const signMsg = document.getElementById("signMsg");
    // console.log(form);
    
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const payLoad = new FormData(form);
     console.log("working"); 
      for (item of payLoad) {
        console.log(item[0], item[1]);    
      }  
      //start the async function to fetch the data
      postData(payLoad); 
    })
    // });
    async function postData(payLoad){
//fetching the data
      const response = await fetch('./php/inscription.php',{
          method: 'POST',
          body: payLoad
      });
//since i use echo i need to handle the response with text method
      const data = await response.text();
      if (data == "user created"){
        signMsg.innerHTML = "User successfully created";
      }
      else{
        signMsg.innerHTML = "User creation failed";

      }
      // print out the values i sent to the backend-side
      console.log(data);
  }



  
