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
            <h2 id='nome'>Documentação</h2>
        </section>

		   <section class='estruct'>
           <div style="width: 25%;" class="form-group">
                    <label style="color: black;" for="firstNameInput">Status</label>
                    <select style="margin: auto;" class="form-control" name="status" class="intable" value="" id="firstNameInput" data-bind="value: firstName"></select>
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Formulários Enviados</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Formulários Recebidos</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Cópia RG/CPF/PIS/Titulo Eleitor/ Declaração Oracle/Foto 3x4/ Comprovante endereço</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">CTPS Recebida</label>
                    <input type="date" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="Nome" data-bind="value: lastName">
                </div>
                <div style="width: 25%;"class="form-group">
                    <label style="color: Black;" for="lastNameInput">Comentários</label>
                    <input type="text" style="margin: auto;" class="form-control" id="lastNameInput" placeholder="" data-bind="value: lastName">
                </div>   
				</section>
    </main>


    </body>
</html>