var insertbtn = document.querySelector("#insertbtn");
var resultAxios = document.querySelector("#insertResult p");
insertbtn.addEventListener("click", function(){
var client = document.getElementById("client").value;
var type = document.getElementById("type").value;
var date = document.getElementById("date").value;
var time = document.getElementById("time").value;
var assign = document.getElementById("assign").value;
  axios.post("../components/insert.php",{
    client:client,
    type:type,
    date:date,
    time:time,
    assign:assign
  })
  .then(function(res){
    resultAxios.innerText = res.data.message;
    console.log(res);
  })
  .catch(function(){
    alert("error");
  })
})