$('#searchtext').keyup(function(){
var search_term = $(this).val();

$.post('searchdoc.php', {search_term:search_term}, function(data){
$('#search_result').html(data);
});

});