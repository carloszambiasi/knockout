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
            <a class='nav filter pos'>Filtragem</a>
            <a class='nav filter last' href='../login/user/sair.php'>Sair</a>
        </nav>
    </header>

    <main>
        <section class='menu-inicial'>
            <h2 id='nome'>Plataforma Admissão</h2>
        </section>
        <section class='inputs panel-body display campo-filtro estruct'>
            <h2 id='Filtro'>Filtro</h2>
            <fieldset>
                <form id='form-filtrar' method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <div>
                        <div>
                            <label for="status">Status</label>
                            <select name="status" class="form-control campo-filter">
                                <option value="" selected="selected"></option>
                                <option value="SOLICITAÇÃO DE PROPOSTA">SOLICITAÇÃO DE PROPOSTA</option>
                                <option value="AGUARDANDO APROVAÇÃO">AGUARDANDO APROVAÇÃO</option>
                                <option value="APROVADO DIRETORIA">APROVADO DIRETORIA</option>
                                <option value="EM VALIDAÇÃO">EM VALIDAÇÃO</option>
                                <option value="NEGOCIAÇÃO">NEGOCIAÇÃO</option>
                                <option value="PROPOSTA ENVIADA">PROPOSTA ENVIADA</option>
                                <option value="PROPOSTA ACEITA">PROPOSTA ACEITA</option>
                                <option value="EM ANDAMENTO">EM ANDAMENTO</option>
                                <option value="PROPOSTA INVÁLIDA">PROPOSTA INVÁLIDA</option>
                                <option value="EM CONTRATO">EM CONTRATO</option>
                                <option value="RETORNO DOCS">RETORNO DOCS</option>
                                <option value="DESISTENCIA">DESISTENCIA</option>
                                <option value="RECUSADO">RECUSADO</option>
                                <option value="FINALIZADO">FINALIZADO</option>
                            </select>
                        </div>

                        <div>
                            <label for="sede">Sede</label>
                            <select id="sede" name="sede" class="form-control campo-filter">
                                <option value="" selected="selected"></option>
                                <?php foreach ($listar as $linha) : ?>
                                    <option value="<?= $linha['SEDE_ID'] ?>"><?= $linha['NOME_SEDE'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div>
                            <label for="tipo">Tipo</label>
                            <select id="tipo" name="tipo" class="form-control campo-filter">
                                <option value="" selected="selected"></option>
                                <option value="1">CLT</option>
                                <option value="2">CC</option>
                                <option value="3">HO</option>
                                <option value="4">TEMP</option>
                                <option value="5">APDZ</option>
                            </select>
                        </div>

                        <div>
                            <label for="captacao">Captação</label>
                            <select id="captacao" name="captacao" class="form-control campo-filter">
                                <option value="" selected="selected"></option>
                                <option value="1">Ex-Funcionário</option>
                                <option value="2">Ex-Bolsista</option>
                                <option value="3">Ex-Estágiario</option>
                                <option value="4">NOVO</option>
                            </select>
                        </div>

                        <div>
                            <label for="solicitante">Solicitante</label>
                            <input type="text" id='solicitante' name="solicitante" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Solicitante" />
                        </div>
                        <div>
                            <label for="cliente">Cliente</label>
                            <input type="text" id='cliente' name="cliente" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Cliente" />
                        </div>
                        <div>
                            <label for="PROJETO">Projeto</label>
                            <input type="text" id='projeto' name="projeto" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Projeto" />
                        </div>
                        <div>
                            <label for="data_admissao">Data de Admissão</label>
                            <input type="date" id="data_admissao" name="data_admissao" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Data Admissão" />
                        </div>                       

                        <h2>Tela 4 - Documentação</h2>
                        <div>
                            <label for="formularios_enviados">Formulários Enviados</label>
                            <input type="date" id='formularios_enviados' name="formularios_enviados" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Formulários Enviados" />
                            <input type="checkbox" name="formularios_enviados_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="formularios_recebidos">Formulários Recebidos</label>
                            <input type="date" id='formularios_recebidos' name="formularios_recebidos" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Formulários Recebidos" />
                            <input type="checkbox" name="formularios_recebidos_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="documentos_fisicos">Documentos Físicos</label>
                            <input type="date" id='documentos_fisicos' name="documentos_fisicos" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Documentos Físicos" />
                            <input type="checkbox" name="documentos_fisicos_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="ctps">CTPS</label>
                            <input type="date" id='r' name="ctps" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="CTPS" />
                            <input type="checkbox" name="ctps_check" value="NULL" />Vazio
                        </div>
                        <h2>Tela 5 - Admissão</h2>
                        <div>
                            <label for="qualific">Qualificação Cadastral e CEP</label>
                            <input type="date" id='qualific' name="qualific" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Qualificação Cadastral e CEP" />
                            <input type="checkbox" name="qualific_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="cad_adm">Cadastrada Admissão Plataforma Domínio</label>
                            <input type="date" id='cad_adm' name="cad_adm" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Cadastrada Admissão Plataforma Domínio" />
                            <input type="checkbox" name="cad_adm_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="doc_rec">Documentos Recebidos Plataforma Domínio + Validação CBO</label>
                            <input type="date" id='doc_rec' name="doc_rec" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Documentos Recebidos Plataforma Domínio + Validação  CBO" />
                            <input type="checkbox" name="doc_rec_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="termo_psi">Termo PSI</label>
                            <input type="date" id='termo_psi' name="termo_psi" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Termo PSI" />
                            <input type="checkbox" name="termo_psi_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="inclui_adm">Incluir Admissão na Provisória</label>
                            <input type="date" id='inclui_adm' name="inclui_adm" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Incluir Admissão na Provisória" />
                            <input type="checkbox" name="inclui_adm_check" value="NULL" />Vazio
                        </div>
                        <h2>Tela 6 - Exame</h2>
                        <div>
                            <label for="agendamento_exam">Agendamento</label>
                            <input type="date" id='agendamento_exam' name="agendamento_exam" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Agendamento" />
                            <input type="checkbox" name="agendamento_exam_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="envio_func">Envio para funcionário</label>
                            <input type="date" id='envio_func' name="envio_func" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Envio para funcionário" />
                            <input type="checkbox" name="envio_func_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="email_exame">Recebido por e-mail ASO assinado</label>
                            <input type="date" id='email_exame' name="email_exame" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Recebido por e-mail ASO assinado" />
                            <input type="checkbox" name="email_exame_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="anexar_aso">Anexar ASO assinado na Domínio </label>
                            <input type="date" id='anexar_aso' name="anexar_aso" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Anexar ASO assinado na Domínio" />
                            <input type="checkbox" name="anexar_aso_check" value="NULL" />Vazio
                        </div>
                        <h2>Tela 7 - Dados Bancários</h2>
                        <div>
                            <label for="envio">Envio</label>
                            <input type="date" id='envio' name="envio" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Envio" />
                            <input type="checkbox" name="envio_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="recebido">Recebido</label>
                            <input type="date" id='recebido' name="recebido" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Recebido" />
                            <input type="checkbox" name="recebido_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="anexar_recebido">Anexar comprovante na Domínio</label>
                            <input type="date" id='anexar_recebido' name="anexar_recebido" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Anexar comprovante na Domínio" />
                            <input type="checkbox" name="anexar_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="planilha_contas">Planilha de Contas</label>
                            <input type="date" id='planilha_contas' name="planilha_contas" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Planilha de Contas" />
                            <input type="checkbox" name="planilha_contas_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="form_compro">Formulário + Comprovante Bancário</label>
                            <input type="date" id='form_compro' name="form_compro" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Formulário + Comprovante Bancário" />
                            <input type="checkbox" name="form_compro_check" value="NULL" />Vazio
                        </div>
                        <h2>Tela 9 - Interno</h2>
                        <div>
                            <label for="intra_data">Intranet - Cadastro Usuário</label>
                            <input type="date" id='intra_data' name="intra_data" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Intranet - Cadastro Usuário" />
                            <input type="checkbox" name="intra_data_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="kairos_data">Kairos - Cadastro Usuário</label>
                            <input type="date" id='kairos_data' name="kairos_data" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Kairos - Cadastro Usuário" />
                            <input type="checkbox" name="kairos_data_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="email_gestor">E-mail Gestor + Apoio Sede</label>
                            <input type="date" id='email_gestor' name="email_gestor" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="E-mail Gestor + Apoio Sede" />
                            <input type="checkbox" name="email_gestor_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="email_inicio">E-mail Início das Atividades</label>
                            <input type="date" id='email_inicio' name="email_inicio" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="E-mail Início das Atividades" />
                            <input type="checkbox" name="email_inicio_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="email_boas">E-mail Boas Vindas </label>
                            <input type="date" id='email_boas' name="email_boas" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="E-mail Boas Vindas	" />
                            <input type="checkbox" name="email_boas_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="acessos">DATA</label>
                            <input type="date" id='acessos' name="acessos" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Acessos" />
                            <input type="checkbox" name="acessos_check" value="NULL" />Vazio
                        </div>
                        <h2>Tela 10 - Vias documentos</h2>
                        <div>
                            <label for="cracha_pedido">Data do pedido do crachá</label>
                            <input type="date" id='cracha_pedido' name="cracha_pedido" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Data do pedido do crachá" />
                            <input type="checkbox" name="cracha_pedido_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="cracha_controle">Controle crachá</label>
                            <input type="date" id='cracha_controle' name="cracha_controle" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Controle crachá" />
                            <input type="checkbox" name="cracha_controle_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="cracha_protocolo">Protocolo crachá</label>
                            <input type="date" id='cracha_protocolo' name="cracha_protocolo" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Protocolo crachá" />
                            <input type="checkbox" name="cracha_protocolo_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="email_caderno">Data E-mail solicitado</label>
                            <input type="date" id='email_caderno' name="email_caderno" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Data E-mail solicitado" />
                            <input type="checkbox" name="email_caderno_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="email_r">Data E-mail recebido</label>
                            <input type="date" id='email_r' name="email_r" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Data E-mail recebido" />
                            <input type="checkbox" name="email_r_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="malote">Malote (Caderno) + CTPS (Controle RH)</label>
                            <input type="date" id='malote' name="malote" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Malote (Caderno) + CTPS (Controle RH)" />
                            <input type="checkbox" name="malote_check" value="NULL" />Vazio
                        </div>
                        <div>
                            <label for="assinados">Recebido após assinatura Escanear Docs e Salvar na Pasta</label>
                            <input type="date" id='assinados' name="assinados" class="filtrosContrarios form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Recebido após assinatura Escanear Docs e Salvar na Pasta" />
                            <input type="checkbox" name="assinados_check" value="NULL" />Vazio
                        </div>
                        <h2>Tela 12 - Vencimentos Contratos</h2>
                        <div>
                            <label for="envio_solicitante45">Envio Solicitante 45 dias</label>
                            <input type="date" id='envio_solicitante45' name="envio_solicitante45" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Envio Solicitante" />
                        </div>                        
                        <div>
                            <label for="vencimento">Data Venc. Efetivação 45 dias</label>
                            <input type="date" id='vencimento' name="vencimento" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Data Vencimento" />
                        </div>
                        <div>
                            <label for="envio_solicitante90">Envio Solicitante 90 dias</label>
                            <input type="date" id='envio_solicitante90' name="envio_solicitante90" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Envio Solicitantes" />
                        </div>
                        <div>
                            <label for="vencimentos">Data Venc. Efetivação 90 dias</label>
                            <input type="date" id='vencimentos' name="vencimentos" class="form-control campo-filter" data-action="filter" data-filters="#dev-table" placeholder="Data Vencimentos" />
                        </div>
                        <input type="submit" name="botao" class="botao btn btn-default btn-xs btn-filter campo-filter" value="Filtrar">
                    </div>
                </form>
            </fieldset>
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

    <footer>
        
    </footer>
    </body>
</html>