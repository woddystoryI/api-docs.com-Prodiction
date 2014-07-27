<?php
/* 
-----------------
Language: Portuguese
-----------------
*/


$lang = array();

$lang['PAGE_TITLE'] = 'Prodiction';

// Menu

$lang['MENU_HOME'] = 'Início';
$lang['MENU_INTRODUCTION'] = 'Introdução';
$lang['MENU_BUG_REPORT'] = 'Relatorio de Erros';
$lang['MENU_FAQ'] = 'FAQ';
$lang['MENU_DOWNLOAD_INSTALL'] = 'Baixar & Instalar';
$lang['MENU_STABLE_VERSION'] = 'Versão Estável';
$lang['MENU_NIGHTY_VERSION'] = 'Versão Nighty';
$lang['MENU_API_REFERENCE'] = 'Referência da API';
$lang['MENU_INFO'] = 'Informação';
$lang['MENU_SPELL'] = 'Spell';
$lang['MENU_TUTORIAL'] = 'Tutorial';
$lang['MENU_GETTING_STARTED'] = 'Começando';
$lang['MENU_VIDEOS'] = 'Videos';

// 1.Introduction

$lang['INTRO_INTRO'] = 'Esta é a documentação API para Prodiction escrito por klokje. Prodiction é uma biblioteca predição para o Bol. Permite aos teus scripts prever a posição dos Herois/Minions baseado na informação de spell/tempo. Este documento é composto por duas partes:';
$lang['INTRO_USERS'] = 'Utilizadores do BoL';
$lang['INTRO_DEVS'] = 'Desenvolvedores do BoL';
$lang['INTRO_PARAGRAPH1'] = 'A primeira parte consiste em informação básica para Prodiction. Quais as funções. Como baixar e instalar Prodiction. Quais as mudanças que ocorreram e quais as mudanças para a proxima atualização.';
$lang['INTRO_PARAGRAPH2'] = 'A segunda parte deste decomento consiste na referencia da API e exemplos. Isto é principalmente para os desenvolvedores aprenderem a API para a Prodiction';
$lang['INTRO_VERSION'] = 'Este é o documento Api para Prodiction 1.0 (nighty*) ou maior.';

// 2.Bugreport

$lang['BUG_ERROR'] = 'Erro';
$lang['BUG_ERROR_REPORT'] = 'Ainda não consegues reportar um erro, por favor reporta os erros no forum.';
$lang['BUG_BUG'] = 'Relatório de erro';
$lang['BUG_LOGIN'] = 'Bol nome de login:';
$lang['BUG_EMAIL'] = 'Email:';
$lang['BUG_VERSION'] = 'Versão Prodiction';
$lang['BUG_INFO'] = 'Informação:';
$lang['BUG_NAME'] = 'nome';
$lang['BUG_YOUR_EMAIL'] = 'teu@email.com';
$lang['BUG_PUT_HERE_YOUR_BUG_REPORT'] = 'Coloca aqui o teu relatório de erro';
$lang['BUG_SUBMIT_REPORT'] = 'Submeter relatório';

// 3.FAQ

$lang['FAQ_FAQ'] = 'FAQ';
$lang['FAQ_ERROR'] = 'Erro';
$lang['FAQ_UPDATE'] = 'Esta pagina será atualizada brevemente.';
$lang['FAQ_QUESTION_1'] = '1. O que é Prodiction?';
$lang['FAQ_ANSWER_1'] = 'Prodiction é uma biblioteca, que consegue prever a posição baseado na informação de magia/tempo. Os scripts que desejem implementar isto, irão precisar desta biblioteca.';
$lang['FAQ_QUESTION_2'] = '2. Encontra-se livre de erros ou já está pronta?';
$lang['FAQ_ANSWER_2'] = 'As funções basicas da API estão prontas, mas ainda há espaço para melhoria, continuo a adicionar mais coisas aqui e ali.';

// 4.Download

$lang['DOWNLOAD_DOWNLOAD'] = 'Baixar';
$lang['DOWNLOAD_CHANGELOG'] = 'Relatorio de Atualizações';
$lang['DOWNLOAD_KNOWN_ISSUES'] = 'Problemas conhecidos:';
$lang['DOWNLOAD_VERSION'] = 'Versão:';
$lang['DOWNLOAD_QUESTIONS1'] = 'Se tens alguma questão em relação a esta versão ou queres reportar um erro clica';
$lang['DOWNLOAD_QUESTIONS2'] = 'aqui';
$lang['DOWNLOAD_QUESTIONS3'] = 'para nos enviares uma mensagem.';

		// 4.1.Upcomming Updates
		$lang['DOWNLOAD_UPCOMMING_UPDATES'] = 'Proximas Atualizações';
		$lang['DOWNLOAD_FEATURES'] = 'Características proxima versão';
		$lang['DOWNLOAD_TO_DO'] = 'Lista de a fazeres';
		$lang['DOWNLOAD_U_LINE_1'] = 'Adicionar a Parede de Vento do Yasuo a Collision.';
		$lang['DOWNLOAD_U_LINE_2'] = 'Adicionar melhores calculos de imunidade, para que os skillshots sejam usados no momento certo em que o alvo deixa de estar imune.';
		$lang['DOWNLOAD_U_LINE_3'] = 'Pequena melhoria no algoritmo para os utilizadores não pagantes.';
		$lang['DOWNLOAD_U_LINE_4'] = 'Para os utilizadores - Adicionar um menu de delay para se poder aumentar ou diminuir consoante o gosto.';
		$lang['DOWNLOAD_U_TO_DO'] = 'Ainda não existe lista de a fazeres';
		$lang['DOWNLOAD_U_SUGESTION'] = 'Sugestão';
		
		// 4.2.Current Version
		$lang['DOWNLOAD_CURRENT_VERSION'] = 'Versão Atual';
		$lang['DOWNLOAD_C_LINE_1'] = 'Corrigido bugsplat em alguns scripts.';
		$lang['DOWNLOAD_C_LINE_2'] = 'Podes desactivar o menu e o autoupdater no topo do ficheiro.';
		$lang['DOWNLOAD_C_LINE_3'] = 'E uma pequena melhoria.';
		$lang['DOWNLOAD_C_DOWNLOAD'] = 'Baixar';
		$lang['DOWNLOAD_C_RELEASE_DATE'] = 'Data de lançamento: 09/07/2014';

		// 4.3.Old Versions
		$lang['DOWNLOAD_OLD_VERSIONS'] = 'Versões Antigas';
			
			// 4.3.1 Version 0.3
			$lang['DOWNLOAD_O_WARNING_0.3'] = 'Esta versão já não é suportada. Irá ter uma atualização em breve depois do lançamento da versão 1.0 para doadores. Esta versão ainda está estável.';
			
			// 4.3.2 Version 1.1
			$lang['DOWNLOAD_O_LINE1_1.1'] = 'Codigo todo re-escrito.';
			$lang['DOWNLOAD_O_LINE2_1.1'] = 'Adicionado nova Class "Prodiction". Deve fazer a usabilidade da Api mais fácil possível';
			$lang['DOWNLOAD_O_LINE3_1.1'] = 'Corrigido o erro para close range less casting, deve ser tão rapido como long range';
			$lang['DOWNLOAD_O_LINE4_1.1'] = 'Este algorítmo não é mais baseado no evento OnNewWaypoint. Em vez disso irá sempre calcular a posição. Deve ser muito mais rápido';
			$lang['DOWNLOAD_O_LINE5_1.1'] = 'Melhor Documentação.';
			$lang['DOWNLOAD_O_LINE6_1.1'] = 'Adicionado controle da parede(Wall).';
			$lang['DOWNLOAD_O_LINE7_1.1'] = 'Adicionado Colidão(Collision).';
			$lang['DOWNLOAD_O_LINE8_1.1'] = 'Melhor controle do Dash';
			$lang['DOWNLOAD_O_LINE9_1.1'] = 'Nova Api adicionada. Ve aqui';
			$lang['DOWNLOAD_RELEASE_1.1'] = 'Data de lançamento: 16/06/2014';
			
			// 4.3.3 Version 1.1a
			$lang['DOWNLOAD_O_LINE1_1.1a'] = 'Corrigido erro na prediction da parede.';
			$lang['DOWNLOAD_O_LINE2_1.1a'] = 'Corrigido o erro NaN.';
			$lang['DOWNLOAD_O_LINE3_1.1a'] = 'Modificado o Algoritmo 1 um bocadinho. Vai ser mais como a versão 1.0 novamente.';
			$lang['DOWNLOAD_O_LINE4_1.1a'] = 'Atualização automatica estava errado, agora activo para todas as versões.';
			$lang['DOWNLOAD_RELEASE_1.1a'] = 'Release date: 16/06/2014';
			
			// 4.3.4 Version 1.2	
			$lang['DOWNLOAD_O_LINE1_1.2'] = 'Atualizado para o novo patch.';
			$lang['DOWNLOAD_O_LINE2_1.2'] = 'Corrigido erro na função GetPrediction, retorna sempre pos.';
			$lang['DOWNLOAD_O_LINE3_1.2'] = 'Resolvido erro na Collision (Espero eu).';
			$lang['DOWNLOAD_O_LINE4_1.2'] = 'Mudança no código interno.';
			$lang['DOWNLOAD_O_LINE5_1.2'] = 'Modificador dinamico do cabeçalho dos pacotes.';
			$lang['DOWNLOAD_RELEASE_1.2'] = 'Data lançamento: 07/07/2014';
			
			// 4.3.1 Version 1.3
			$lang['DOWNLOAD_O_LINE1_1.3'] = 'Corrigido erro para os utilizadores não pagantes, não conseguiam usar.';
			$lang['DOWNLOAD_O_LINE2_1.3'] = 'Algumas melhorias no código.';
			$lang['DOWNLOAD_RELEASE_1.3'] = 'Data lançamento: 08/07/2014';
			
// 5.Download Nighty

$lang['DOWNLOADN_DOWNLOAD'] = 'Baixar';
$lang['DOWNLOADN_CHANGELOG'] = 'Relatorio de Atualizações';
$lang['DOWNLOADN_KNOWN_ISSUES'] = 'Problemas conhecidos:';
$lang['DOWNLOADN_VERSION'] = 'Versão:';
$lang['DOWNLOADN_REPORT_BUG'] = 'Reportar erro';
$lang['DOWNLOADN_QUESTIONS1'] = 'Se tens alguma questão em relação a esta versão ou queres reportar um erro clica';
$lang['DOWNLOADN_QUESTIONS2'] = 'aqui';
$lang['DOWNLOADN_QUESTIONS3'] = 'para nos enviares uma mensagem.';

		// 5.1.Upcomming Updates

		$lang['DOWNLOADN_UPCOMMING_UPDATES'] = 'Proximas Atualizações';
		$lang['DOWNLOADN_FEATURES'] = 'Características proxima versão';
		$lang['DOWNLOADN_TO_DO'] = 'Lista de a fazeres';
		$lang['DOWNLOADN_U_LINE_1'] = 'Adicionar a Parede de Vento do Yasuo a Collision.';
		$lang['DOWNLOADN_U_LINE_2'] = 'Adicionar melhores calculos de imunidade, para que os skillshots sejam usados no momento certo em que o alvo deixa de estar imune.';
		$lang['DOWNLOADN_U_LINE_3'] = 'Pequena melhoria no algoritmo para os utilizadores não pagantes.';
		$lang['DOWNLOADN_U_LINE_4'] = 'Para os utilizadores - Adicionar um menu de delay para se poder aumentar ou diminuir consoante o gosto.';
		$lang['DOWNLOADN_U_TO_DO'] = 'Ainda não existe lista de a fazeres';
		$lang['DOWNLOADN_U_SUGESTION'] = 'Sugestão';
		
		// 5.2.Current Version

		$lang['DOWNLOADN_CURRENT_VERSION'] = 'Versão Atual';
		$lang['DOWNLOADN_C_LINE_1'] = 'Corrigido bugsplat em alguns scripts.';
		$lang['DOWNLOADN_C_LINE_2'] = 'Podes desactivar o menu e o autoupdater no topo do ficheiro.';
		$lang['DOWNLOADN_C_LINE_3'] = 'E uma pequena melhoria.';
		$lang['DOWNLOADN_C_DOWNLOAD'] = 'Baixar';
		$lang['DOWNLOADN_C_RELEASE_DATE'] = 'Data de lançamento: 09/07/2014';
		
		// 5.3.Old Versions
		$lang['DOWNLOADN_OLD_VERSIONS'] = 'Versões Antigas';
		$lang['DOWNLOADN_O_NO_ISSUES'] = 'Nenhum erro conhecido até agora';
			
			// 5.3.1 Version 1.0
			$lang['DOWNLOADN_O_LINE1_1.0'] = 'Codigo reesctio.';
			$lang['DOWNLOADN_O_LINE2_1.0'] = 'Adicionado 2 algoritmos';
			$lang['DOWNLOADN_O_LINE3_1.0'] = 'Adicionada nova Class "Prodiction". Deverá tornar o uso da api o mais fácil possível.';
			$lang['DOWNLOADN_O_LINE4_1.0'] = 'Corrigido um erro para o close range less casting, que deverá ser tão rápido quanto o long range.';
			$lang['DOWNLOADN_O_LINE5_1.0'] = 'Este algoritmo já não é mais baseado no evento (event) OnNewWaypoint. Em vez disso irá calcular sempre a posição. Deverá ser muito mais rápido.';
			$lang['DOWNLOADN_O_LINE6_1.0'] = 'Melhor documentação.';
			$lang['DOWNLOADN_O_LINE7_1.0'] = 'Adicionado control da parede.';
			$lang['DOWNLOADN_O_LINE8_1.0'] = 'Adicionado Colisão(Collision).';
			$lang['DOWNLOADN_RELEASE_1.0'] = 'Data de lançamento : 01/06/2014';
				
			// 5.3.2 Version 1.1
			$lang['DOWNLOADN_O_LINE1_1.1'] = 'Mesmo lançamento que o da versão gratuita. Ver as versões estaveis para mais informação.';
			$lang['DOWNLOADN_O_LINE2_1.1'] = 'Extra Api para doadores';
			$lang['DOWNLOADN_O_LINE3_1.1'] = '3 Algoritmos.';
			$lang['DOWNLOADN_O_LINE4_1.1'] = 'Pequena melhoria no modo, para melhorar o overtime.';
			$lang['DOWNLOADN_RELEASE_1.1'] = 'Data de lançamento: 16/06/2014';
			
			// 5.3.3 Version 1.1a
			$lang['DOWNLOADN_O_LINE1_1.1a'] = 'Erro corrigido. Atualizado na versão gratuita também.';
			$lang['DOWNLOADN_O_LINE2_1.1a'] = 'Corrigido erro na prediction da parede.';
			$lang['DOWNLOADN_O_LINE3_1.1a'] = 'Corrigido o erro NaN.';
			$lang['DOWNLOADN_RELEASE_1.1a'] = 'Data Lançamento: 16/06/2014';
			
			// 5.3.4 Version 1.2	
			$lang['DOWNLOADN_O_LINE1_1.2'] = 'Atualizado para o novo patch.';
			$lang['DOWNLOADN_O_LINE2_1.2'] = 'Corrigido erro na função GetPrediction, retorna sempre pos.';
			$lang['DOWNLOADN_O_LINE3_1.2'] = 'Resolvido erro na Collision (Espero eu).';
			$lang['DOWNLOADN_O_LINE4_1.2'] = 'Mudança no código interno.';
			$lang['DOWNLOADN_O_LINE5_1.2'] = 'Modificador dinamico do cabeçalho dos pacotes.';
			$lang['DOWNLOADN_RELEASE_1.2'] = 'Data lançamento: 07/07/2014';
			
			// 5.3.1 Version 1.3
			$lang['DOWNLOADN_O_LINE1_1.3'] = 'Corrigido erro para os utilizadores não pagantes, não conseguiam usar.';
			$lang['DOWNLOADN_O_LINE2_1.3'] = 'Algumas melhorias no código.';
			$lang['DOWNLOADN_RELEASE_1.3'] = 'Data lançamento: 08/07/2014'			
			
			
//$lang[''] =
?>
