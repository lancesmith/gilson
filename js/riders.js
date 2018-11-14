//$(document).ready(function(){
//    $(".bio").hide();
//$(".bio-button").click(function() {
//    var num = this.id.match(/\d+/)[0];
//    $(".bio").hide();
//    $("#bio_" + num).toggleShow();
//});
//});

$(document).ready(function(){
 var $container = $('#container');
 $container.on('show.bs.collapse','.collapse', function() {
 $container.find('.collapse.show').collapse('hide');
 });
 });
