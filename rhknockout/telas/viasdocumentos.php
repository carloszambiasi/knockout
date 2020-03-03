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

                <label style="color: black;" for="firstNameInput">Crachá + Cordão + Roller</label>

                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Pedido do crachá</label>
				    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Controle</label>
			    	<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Protocolo</label>
			    	<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
               

                <label style="color: black;" for="firstNameInput">E-mail Adm Caderno Compasso</label>
                
                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">E-mail Solicitado</label>
				    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Recebido</label>
			    	<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Malote (Caderno) + CTPS (Controle RH)</label>
			    	<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Recebido após assinatura Escanear Docs</label>
				    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
			    	<label style="color: Black;" for="lastNameInput">Salvar na Pasta</label>
			    	<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
				    <label style="color: Black;" for="lastNameInput">Observações</label>
				    <input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			    </div>
				</section>
    </main>


    </body>
</html>