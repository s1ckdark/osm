var searchtbtn = document.querySelector("#searchbtn");
var resultAxios = document.querySelector("#result");
searchbtn.addEventListener("click", function(){
  var keyword = document.getElementById("search").value;
  axios.post("../components/search.php",{
    keyword:keyword
  })
  .then(function(res){
    resultAxios.innerText = res.data.message;
    console.log(res);
  })
  .catch(function(){
    alert("error");
  })
})