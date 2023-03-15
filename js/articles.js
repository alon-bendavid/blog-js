const pageUp = document.getElementById("pageUp");
const pageDown = document.getElementById("pageDown");
let page = getQueryParam("page") || 1; // read "page" value from URL or default to 1
pageUp.href = "articlesPage.php?page=" + (parseInt(page) + 1); // set initial href values
pageDown.href = "articlesPage.php?page=" + (parseInt(page) - 1);

pageUp.addEventListener("click" ,()=>{
  page = parseInt(page) + 1;
  pageUp.href = "articlesPage.php?page=" + page;
});

pageDown.addEventListener("click" , ()=>{
  page = parseInt(page) - 1;
  pageDown.href = "articlesPage.php?page=" + page;
});

function getQueryParam(name) { // helper function to read query parameters from URL
  const urlParams = new URLSearchParams(window.location.search);
  return urlParams.get(name);
}
