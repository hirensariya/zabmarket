$(document).ready(function(){



var $grid= $(".grid").isotope({
itemSelector:'.grid-item',

});

$(".btn-group").on("click","button",function(){
var filterValue = $(this).attr('data-filter');
$grid.isotope({filter:filterValue});  

});


});
 