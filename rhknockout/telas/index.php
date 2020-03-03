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
            <h2 id='nome'>Plataforma Admissão</h2>
        </section>

		   <section class='estruct'>
	    	<div style="width: 25%;" class="form-group">
				<label style="color: black;" for="firstNameInput">Status</label>
				<select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Nome</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Data Admissão</label>
				<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
			</div>
			<div style="width: 25%;" class="form-group">
				<label style="color: black;" for="firstNameInput">Sede</label>
				<select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
			</div>
			<div style="width: 25%;" class="form-group">
				<label style="color: black;" for="firstNameInput">Tipo</label>
				<select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
			</div>
			<div style="width: 25%;" class="form-group">
				<label style="color: black;" for="firstNameInput">Captação</label>
				<select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Carga Horária(em horas)</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Horário </label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Horário" data-bind="value: lastName">
			</div>
			<div style="width: 25%;" class="form-group">
				<label style="color: black;" for="firstNameInput">Sexo</label>
				<select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Fone</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Telefone" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Cargo</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Cargo" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Log Registro Dia Rh envia DP</label>
				<input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Remuneração</label>
				<input type="number" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName" step=".01" name="remuneracao_base" id="add_remuneracao" min="0" value="0">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Gratificação</label>
				<input type="number" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Remuneração Total</label>
				<input type="number" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName" disabled>
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Solicitante</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Solicitante" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Cliente</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Cliente" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Projeto</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Projeto" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">E-mail</label>
				<input type="email" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="E-mail" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Posição(Comentários)</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Administrativo + FLyback - Hotel</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			</div>
			<div style="width: 25%;"class="form-group">
				<label style="color: Black;" for="lastNameInput">Comentários</label>
				<input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
			</div>
				</section>
    </main>


    </body>
</html>