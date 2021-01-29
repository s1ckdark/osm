var returnData = [{
      "company" : "삼성전자",
      "sales" : "장동혁",
      "service_start" : "20210101",
      "service_end" : "20221231",
      "dbtype" : "MySQL",
      "price" : 3000000,
      "support" : [
         {
            "s_day" : "20210105",
            "s_time" : 10,
            "s_eng" : "최명기"
         },
         {
            "s_day" : "20210210",
            "s_time" : 2,
            "s_eng" : "김태모"
         }
      ]
   },
   {
      "company" : "광주은행",
      "sales" : "장동혁",
      "service_start" : "20210101",
      "service_end" : "20211231",
      "dbtype" : "MySQL",
      "price" : 3000000,
      "support" : [
         {
            "s_day" : "20210128",
            "s_time" : 6,
            "s_eng" : "최명기"
         }
      ]
   }];


var searchtbtn = document.querySelector("#searchbtn");
var resultAxios = document.querySelector("#result");
// searchbtn.addEventListener("click", function(){
//   var keyword = document.getElementById("search").value;
//   axios.post("../components/search.php",{
//     keyword:keyword,
//     returnData:returnData
//   })
//   .then(function(res){
//     for (var key in res.data.message.returnData) 
//       { if (!res.data.message.returnData.hasOwnProperty(key))
//         { continue; } 
//         console.log(key + ' -> ' +  res.data.message.returnData[key]);
//       };
//     resultAxios.innerText = res.data.message.returnData;
//     console.log(res.data.message.returnData);
//   })
//   .catch(function(){
//     alert("error");
//   })
// })
var resultcode ="<div class='resultrow'>"
for(var i in returnData){ 
  for(var k in returnData[i].support) {
    resultcode +="<div class='row'>\
                <div class='client'>"+returnData[i].company+"</div>\
                <div class='type'>"+returnData[i].dbtype+"</div>\
                <div class='date'>"+returnData[i].support[k].s_day+"</div>\
                <div class='time'>"+returnData[i].support[k].s_time+"</div>\
                <div class='assign'>"+returnData[i].support[k].s_eng+"</div>\
                </div>";
  }
  console.log(resultcode);
}
resultcode +="</div>";
resultAxios.innerHTML= resultcode;