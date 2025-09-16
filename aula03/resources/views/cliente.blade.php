<!DOCTYPE html>
<html>
<head>    
    <title>Cliente</title>    
</head>
<body>

    <nav>
        <div>

            <div>
            <a href="/cliente">Cliente</a>
            </div>
         <div>
    </nav>
    
<section>
<div>
    <div>
        <form action="/cliente" method="post">
            @csrf

            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>

                <div>
                    <input type="text" name="txNomeCliente" id="nome" required>
                    <label>Primeiro Nome</label>
                </div>
                <br>
                <br>

                <div>
                    <input type="text" name="txSobrenome" id="sobrenome" required >
                    <label>Sobrenome</label>
                </div>
                <br>
                <br>


                <button onclick id="submit">Salvar</button>

            </fieldset>
        </form>
    </div>
</div>
</section>
