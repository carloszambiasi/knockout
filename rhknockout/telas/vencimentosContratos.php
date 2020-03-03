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
            <h2 id='nome'>Vencimentos Contratos</h2>
        </section>

		   <section class='estruct'>
                <div style="width: 25%;" class="form-group">
                    <label style="color: black;" for="firstNameInput">Status</label>
                    <select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
                </div>

                <label style="color: black;" for="firstNameInput">1°Alerta Vencimento 45 dias 10DD</label>

                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Envio Solicitante</label>
				    <input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Data do Vencimento</label>
			    	<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
                </div>
                <div style="width: 25%;" class="form-group">
                    <label style="color: black;" for="firstNameInput">Renovação S = Sim N = Não</label>
                    <select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
                </div>

                <label style="color: black;" for="firstNameInput">2°Alerta Vencimento 90 dias 20DD</label>
                
                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Envio Solicitante</label>
				    <input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Data do Vencimento</label>
			    	<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
                </div>
                <div style="width: 25%;" class="form-group">
                    <label style="color: black;" for="firstNameInput">Efetivção S = Sim N = Não</label>
                    <select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
                </div>
				</section>
    </main>


    </body>
</html>