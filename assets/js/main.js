$(document).ready(function () {
 var interval = 10000;
 var refresh = function() {
 $("#nodes").empty();
 $.getJSON("https://tankionline.com/s/status.js",function(data){
   console.log("Updating");
   // https://stackoverflow.com/questions/54974577/sum-all-numbers-javascript/
   var totalOnline = Object.values(data.nodes).reduce((total, obj) => (total + obj.online), 0);
   var totalInBattles = Object.values(data.nodes).reduce((total, obj) => (total + obj.inbattles), 0);
   $("#online").html(totalOnline);
   $("#inBattles").html(totalInBattles);
   $("#idle").html(totalOnline - totalInBattles);
   var nodes = Object.keys(data.nodes).length;
    for (var i = 0; i < nodes; i++) {
      var num = i + 1;
      var main = 'main.c' + num;
      $("#nodes").append(`
        <tr>
          <th scope="row">${num}</th>
          <td> ${data.nodes[main].online} </td>
          <td> ${data.nodes[main].inbattles} </td>
          <td> ${data.nodes[main].online - data.nodes[main].inbattles} </td>
        </tr>
        `)
     }
 });
 setTimeout(function() {
   refresh();
     },
   interval);
     }
   refresh();
});
