
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
   $('#sendAll').click(function(){
    $.ajax({
      type: 'GET',
      url: 'request.php',
      data: {q: "&all=true" },
      success :function(data){
        $('#result').html("");
        $('#result').append("<ol></ol>");
        $(data).find('definition').each(function(){
          var word ='<h3>'+$(this).attr("word")+'</h3>'; 
          word += '<p>'+$(this).text()+'</p>';
          word += '<p>'+"-"+$(this).attr("author")+'</p>';
          $("#result ol").append('<li>'+ word +'</li>')
          });
      }
      
    });
  });
})