
$(document).ready(function(){
  $('#searchButton').click(function(){
    $.ajax({
      type: 'GET',
      url: 'request.php',
      data: {q: $('#query').val()},
      success :function(data){
        $('#result').html(data);
      }
      
    });
  });
})