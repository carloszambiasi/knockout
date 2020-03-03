<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>RH Contratações</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/arquivo.css">
    <link rel="stylesheet" href="../css/menuPrincipal.css">
</head>

<body>
    
    <header class="site-header">
		<nav>
            <a class='nav inicio' href='index.php'>Início</a>
            <a class='nav filter pos' href='../login/user/sair.php'>Sair</a>
        </nav>
    </header>

    <main>
        <section class='menu-inicial'>
            <h2 id='nome'>Dados bancários</h2>
        </section>

		   <section class='estruct'>
           <div style="width: 25%;" class="form-group">
                    <label style="color: black;" for="firstNameInput">Status</label>
                    <select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Envio</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Recebido</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Cadastro Intranet</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Formulário + Comprovante Bancário</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Agência (Bancária)</label>
                    <input type="number" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Agência (Bancária)" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Número da Conta</label>
                    <input type="number" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Número da Conta" data-bind="value: lastName">
                </div>
                <div style="width: 25%;" class="form-group">
                    <label style="color: black;" for="firstNameInput">Tipo de Conta</label>
                    <select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
			    </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Observações</label>
                    <input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
                </div>   
				</section>
    </main>


    </body>
</html>