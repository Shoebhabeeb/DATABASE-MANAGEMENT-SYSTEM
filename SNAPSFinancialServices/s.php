$('#loaderdiv').html('<img src="circular-water-fill-loading-animation.gif" />');

$.get('http://path.to/restart.php', function(data){
    if (data == "complete"){
       $('#loaderdiv').html('Reboot Complete');
    } else {
       $('#loaderdiv').html('An Error Has Occured');
    }

});
<div id="container">
    <button id="runscript">Run Script</button>
</div>


$(document).ready(function(){

  $('#runscript').click(function(e){
      e.preventDefault();

      $('#container').html('<img src="loader.gif" />');

      $.get('http://path.to/execute_sh_script.php', function(data){
            // Code here executes once ajax is complete
            $('#container').html('**strong text**');
      });

  });

});