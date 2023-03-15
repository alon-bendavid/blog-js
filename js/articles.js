// console.log("check");
const pageUp = document.getElementById("pageUp");
const pageDown = document.getElementById("pageDown");
let pageNumber = document.getElementById("pageN");
let page = 0;
pageUp.addEventListener("click" ,(e)=>{
    // await fetch("")
    e.preventDefault();
    page += 1;
    // console.log(page);
    pageNumber.value = page;
    console.log(pageNumber.value);
})
pageDown.addEventListener("click" , (e)=>{
    e.preventDefault();
    page -= 1;
    pageNumber.value = page;
    console.log(pageNumber.value);

})
let getJsonByKey = async (key) => {
    // create an empty array as result
    let result = [];
    // fetch the php data using the given 'key' as keyword
    let response = await fetch('/php/articles.php?pageNumber=' + key);

    // if the response is ok / no errors
    if (response.ok) {
      // update the result with the json data
      result = await response.json();
    }
    

    console.log('key = ', key);
    console.log('result = ', result);
    
    // return the result 
    // the result will be empty if no response was found
    return result;

  };