<!DOCTYPE html>
<html>

<head>
    <title> My NoteBook</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">


</head>

<body>

      
<input type="text"  value="{{route('home')}}" id="indexLink"   hidden   >


    @include("layout.navbar")

    <br>

    @yield("content")







    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>

   <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  


    
    <script type="text/javascript">
        $.material.init()
    </script>

    
    <script>



$(document).on('click', "#level-edit-item", function() { 

var id=$(this).data('item-id');

var dateClass= '.date'+id;
var date= $(dateClass).text().trim();


var nameClass='.name'+id;
var name= $(nameClass).text().trim();

var noteClass='.note'+id;
var note= $(noteClass).text().trim();


$("#modal-input-id").val(id);
$("#modal-input-name").val(name);
$("#modal-input-date").val(date);
$("#modal-input-note").val(note);




$('#level-edit-modal').modal();

}) ;
</script> 






</body>

</html>