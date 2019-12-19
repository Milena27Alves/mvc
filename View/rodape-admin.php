<footer class="container-fluid text-center" id = "rodape">
    <p>©Copyright 2019. All rights reversed</p>

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
       $("#options").change(function () {
           cod = $("#options").val();
           console.log(cod);
           if(cod ==1 ){
               $("#optionsUbs").addClass("d-none");
           }else{
               $("#optionsUbs").removeClass("d-none");

           }
           registro = $("#options option[value="+cod+"]").attr("data-registro");
           if(registro=="S"){
               $("#registro").removeClass("d-none");
               $("#registro input").val("");
           }else{
               $("#registro").addClass("d-none");

           }
       });
    });


</script>
</body>
</html>