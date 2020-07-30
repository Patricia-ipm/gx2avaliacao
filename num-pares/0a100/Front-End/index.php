<!DOCTYPE html>
<html>
<head>
	<title>FormularioWeb</title>
</head>
<body>
    <input type="text" placeholder="Digite seu cpf: " id='CampoCpf'>
    </input>

    <script>
        
    </script>
    <button onclick=ValidaCpf()>Validar Cpf</button>
    

</body>
</html>

<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    function ValidaCpf (){
        //var numerodocpf = document.getElementById('CampoCpf').value
        var numerodocpf = $('#CampoCpf').val()
        console.log("Valida Cpf", numerodocpf)

        if (numerodocpf.trim() == "") {
             alert('Campo Cpf não digitado!')
                
        } else if (numerodocpf.length != 11) {

            alert('Tamanho do campo ncorreto!')
                
        } else{
            //alert('CPf válidado com sucesso!')
            Enviadados(numerodocpf)
        }
    }
    
    function Enviadados(numerodocpf){
        $.ajax({
            "url":"../Back-End/validadordecpf.php",
            "type":"post",
            "data":{"cpf":numerodocpf}
        }).done(function(resposta){
            console.log(resposta)
        }).fail(function(Falha){
            console.log(Falha)
        })
        //alert('CPf válidado com sucesso!')

    }

</script>

