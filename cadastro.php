<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cad.css">
    <title>formulario</title>
</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><br>Fórmulário de clientes</br></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">nome completo</label>

                </div>

                <br><br>
                <div class="inputbox">
                    <input type="text" name="Email" id="Email" class="inputUser" required>
                    <label for="Email" class="labelInput">Email</label>

                </div>

                <br><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">telefone</label>

                </div>

                <br><br>
                <div class="inputbox">
                    <input type="data de nascimento" name="data de nascimento" id="data de nascimento" class="inputUser" required>
                    <label for="data de nascimento"  class="labelInput">data de nascimento</label>

                </div>

                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade"  class="labelInput">cidade</label>

                </div>

                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereço" id="endereço" class="endereço" required>
                    <label for="endereço"  class="labelInput">endereço</label>

                    <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="satado" required>
                    <label for="estado"  class="labelInput">estado</label>

                </div>

                <br><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="senha" required>
                    <label for="senha"  class="labelInput">senha</label>

                </div>
                <br>
                <input type ="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
</html>
