<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | GN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="<?=$_SERVER['SELF']?>" method="post">
            <fieldset>
                <legend><b>Fòrmulario de Clientes<b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUse" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUse" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUse" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                </div>
                <br>
                <div class="inputbox">
                    <label for="date">Data de Nascimento:</label>
                    <input type="date" name="date" id="date" required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUse" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUse" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUse" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" value="Enviar" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>