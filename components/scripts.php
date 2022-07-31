<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" 
integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>


<!-- Bootstrap and jpopper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- Datatables -->
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    function removeMensagem(){
        setTimeout(function(){ 
            document.getElementById('msg-result').remove(); 
        }, 5000);
    }

    document.onload = () => {
        if (document.readyState === 'complete') {
        // toda vez que a página carregar, vai limpar a mensagem (se houver) 
        // após 5 segundos
            removeMensagem(); 
        }
    };
</script>


<script>

    function accessPost(id){
        href = "index.php?i=article&id="+id;
        window.location.assign(href);
    }

</script>


<script>
    $(document).ready(function() {
      $('#table_posts').DataTable();
      $('#table_suggestions').DataTable();
    } );
</script>