<?php
	define('AJUDA', array(
		'PT' => array(
			'GRUPO' => 'Funções pra grupos',
			'TCD_AVALR' => 'Avaliar',
			'TCD_GRUPO' => 'Adicionar ao grupo'
		),
		'EN' => array(
			'GRUPO' => 'Functions for groups',
			'TCD_AVALR' => 'Rate',
			'TCD_GRUPO' => 'Add to group'
		),
		'ES' => array(
			'GRUPO' => 'Funciones para grupos',
			'TCD_AVALR' => 'Tasa',
			'TCD_GRUPO' => 'Añadir a grupo'
		),
		'IT' => array(
			'GRUPO' => 'Funzioni per i gruppi',
			'TCD_AVALR' => 'Tasso',
			'TCD_GRUPO' => 'Aggiungere al gruppo'
		)
	));

	define('BEMVINDO', array(
		'PT' => array(
			'ATIVO' => 'Mensagem de <b>"Bem-Vindo"</b> ativada!',
			'DESATIVO' => 'Mensagem de <b>"Bem-Vindo"</b> desativada!',
			'CRIADA' => 'Mensagem de <b>"Bem-Vindo"</b> criada com sucesso!',
			'NAO_DEFINIDA' => 'Use /bemvindo para definir uma mensagem primeiro!',
			'AJUDA' => '<pre>📚 BEM-VINDO</pre>' . "\n\n".
									'/bemvindo - Define "Bem-Vindo" por resposta de mensagem' . "\n\n" .
									'/bemvindo on - Ativa as mensagens de boas-vindas' . "\n" .
									'/bemvindo off - Desativa as mensagens de boas-vindas' . "\n\n" .
									'Use <b>$nome</b>, <b>$usuario</b> e <b>$grupo</b> para personalizar mensagens'
		),
		'EN' => array(
			'ATIVO' => 'Message <b>"Welcome"</b> enabled!',
			'DESATIVO' => 'Message <b>"Welcome"</b> disabled!',
			'CRIADA' => 'Message <b>"Welcome"</b> created successfully!',
			'NAO_DEFINIDA' => 'Use /welcome to define a message first!',
			'AJUDA' => '<pre>📚 WELCOME</pre>' . "\n\n".
									'/welcome - Define "Welcome" for message response' . "\n\n" .
									'/welcome on - Activate the welcome messages' . "\n" .
									'/welcome off - Disables the welcome messages' . "\n\n" .
									'Use <b>$nome</b>, <b>$usuario</b> and <b>$grupo</b> to customize messages'
		),
		'ES' => array(
			'ATIVO' => '¡Mensaje de <b>"Bienvenida"</b> habilitado!',
			'DESATIVO' => 'Mensaje de <b>"Bienvenida"</b> desactivado!',
			'CRIADA' => '¡Mensaje de <b>"Bienvenida"</b> creado con éxito!',
			'NAO_DEFINIDA' => 'Uso /bienvenida para definir un mensaje primero!',
			'AJUDA' => '<pre>📚 BIENVENIDA</pre>' . "\n\n".
									'/bienvenida - Definir "Bienvenida" para la respuesta del mensaje' . "\n\n" .
									'/bienvenida on - Activar los mensajes de bienvenida' . "\n" .
									'/bienvenida off - Desactiva los mensajes de bienvenida' . "\n\n" .
									'Use <b>$nome</b>, <b>$usuario</b> y <b>$grupo</b> para personalizar los mensajes'
		),
		'IT' => array(
			'ATIVO' => 'Messaggio di <b>"Benvenuto"</b> attivato!',
			'DESATIVO' => 'Messaggio di <b>"Benvenuto"</b> disabilitato!',
			'CRIADA' => 'Messaggio di <b>"Benvenuto"</b> creato con successo!',
			'NAO_DEFINIDA' => 'Uso /benvenuto per definire un messaggio prima!',
			'AJUDA' => '<pre>📚 BENVENUTO</pre>' . "\n\n".
									'/benvenuto - Definire "Benvenuto" per il messaggio di risposta' . "\n\n" .
									'/benvenuto on - Attivare i messaggi di benvenuto' . "\n" .
									'/benvenuto off - Disattiva i messaggi di benvenuto' . "\n\n" .
									'Utilizzare <b>$nome</b>, <b>$usuario</b> e <b>$grupo</b> per personalizzare i messaggi'
		)
	));

	define('ERROS', array(
		'PT' => array(
			'SMT_GRUPO' => 'Somente em grupos!',
			'SMT_ADMS' => 'Somente /adms!',
			'SEM_RSULT' => 'Eu não encontrei resultados sobre isso :['
		),
		'EN' => array(
			'SMT_GRUPO' => 'Only groups!',
			'SMT_ADMS' => 'Only /adms!',
			'SEM_RSULT' => 'I have not found results about it :['
		),
		'ES' => array(
			'SMT_GRUPO' => 'Sólo losgrupos!',
			'SMT_ADMS' => 'Sólo /adms!',
			'SEM_RSULT' => 'No he encontrado resultados al respecto :['
		),
		'IT' => array(
			'SMT_GRUPO' => 'Solo i gruppi!',
			'SMT_ADMS' => 'Solo i /adms!',
			'SEM_RSULT' => 'Non ho trovato i risultati su di esso :['
		)
	));

	define('ID', array(
		'PT' => array(
			'NOME' => 'Nome',
			'MSGS' => 'Mensagens',
			'PRVD' => 'Você está no privado!'
		),
		'EN' => array(
			'NOME' => 'Name',
			'MSGS' => 'Messages',
			'PRVD' => 'You are in private!'
		),
		'ES' => array(
			'NOME' => 'Nombre',
			'MSGS' => 'Mensajes',
			'PRVD' => 'Estás en privado!'
		),
		'IT' => array(
			'NOME' => 'Nome',
			'MSGS' => 'Messaggi',
			'PRVD' => 'Sei in privato!'
		)
	));

	define('INFO', array(
		'PT' => array(
			'VERSAO' => 'Versão',
			'CANAL' => 'Canal'
		),
		'EN' => array(
			'VERSAO' => 'Version',
			'CANAL' => 'Channel'
		),
		'ES' => array(
			'VERSAO' => 'Versión',
			'CANAL' => 'Canal'
		),
		'IT' => array(
			'VERSAO' => 'Versione',
			'CANAL' => 'Canale'
		)
	));

	define('GERAR', array(
		'PT' => 'gerar',
		'EN' => 'generate',
		'ES' => 'generar',
		'IT' => 'generare'
	));

	define('LIVROS', array(
		'PT' => 'livros',
		'EN' => 'books',
		'ES' => 'libros',
		'IT' => 'libri'
	));

	define('RANKING', array(
		'PT' => array(
			'TITULO' => 'Ranking de Mensagens',
			'TOTAL' => 'Total do grupo: ',
			'SMT_CRIADOR' => 'Apenas o criador do grupo pode excluir o ranking!'
		),
		'EN' => array(
			'TITULO' => 'Ranking of Messages',
			'TOTAL' => 'Group total: ',
			'SMT_CRIADOR' => 'Only the creator of the group can delete the ranking!'
		),
		'ES' => array(
			'TITULO' => 'Ranking del Mensajes',
			'TOTAL' => 'Total de grupo: ',
			'SMT_CRIADOR' => 'Sólo el creador del grupo puede eliminar el ranking!'
		),
		'IT' => array(
			'TITULO' => 'Ranking del Messaggio',
			'TOTAL' => 'Totale gruppo: ',
			'SMT_CRIADOR' => 'Solo il creatore del gruppo può eliminare la ranking!'
		)
	));

	define('REGRAS', array(
		'PT' => array(
			'ATIVO' => 'Mensagem de <b>"Regras"</b> ativada!',
			'DESATIVO' => 'Mensagem de <b>"Regras"</b> desativada!',
			'CRIADA' => 'Mensagem de <b>"Regras"</b> criada com sucesso!',
			'NAO_DEFINIDA' => 'Use "/regras set" para definir uma mensagem primeiro!',
			'AJUDA' => '<pre>📚 REGRAS</pre>' . "\n\n".
									'/regras - Exibir as regras do grupo' . "\n\n" .
									'/regras set - Define as regras por resposta de mensagem' . "\n" .
									'/regras on - Ativa as mensagens de regras' . "\n" .
									'/regras off - Desativa as mensagens de regras'
		),
		'EN' => array(
			'ATIVO' => 'Message <b>"Rules"</b> enabled!',
			'DESATIVO' => 'Message <b>"Rules"</b> disabled!',
			'CRIADA' => 'Message <b>"Rules"</b> created successfully!',
			'NAO_DEFINIDA' => 'Use "/rules set" to define a message first!',
			'AJUDA' => '<pre>📚 RULES</pre>' . "\n\n".
									'/rules - View the rules of the group' . "\n\n" .
									'/rules set - Define the rules for message response' . "\n" .
									'/rules on - Activate the rules messages' . "\n" .
									'/rules off - Disables the rules messages'
		),
		'ES' => array(
			'ATIVO' => '¡Mensaje de <b>"Reglas"</b> habilitado!',
			'DESATIVO' => 'Mensaje de <b>"Reglas"</b> desactivado!',
			'CRIADA' => '¡Mensaje de <b>"Reglas"</b> creado con éxito!',
			'NAO_DEFINIDA' => 'Uso "/reglas set" para definir un mensaje primero!',
			'AJUDA' => '<pre>📚 REGLAS</pre>' . "\n\n".
									'/reglas - Ver las reglas del grupo' . "\n\n" .
									'/reglas set - Definir las reglas para la respuesta del mensaje' . "\n" .
									'/reglas on - Activar los mensajes de reglas' . "\n" .
									'/reglas off - Desactiva los mensajes de reglas'
		),
		'IT' => array(
			'ATIVO' => 'Messaggio di <b>"Regole"</b> attivato!',
			'DESATIVO' => 'Messaggio di <b>"Regole"</b> disabilitato!',
			'CRIADA' => 'Messaggio di <b>"Regole"</b> creato con successo!',
			'NAO_DEFINIDA' => 'Uso "/regole set" per definire un messaggio prima!',
			'AJUDA' => '<pre>📚 REGOLE</pre>' . "\n\n".
									'/regole - Visualizzare le regole del gruppo' . "\n\n" .
									'/regole set - Definire le regole per il messaggio di risposta' . "\n" .
									'/regole on - Attivare i messaggi di regole' . "\n" .
									'/regole off - Disattiva i messaggi di regole'
		)
	));

	define('RSS', array(
		'PT' => '<pre>📚 RSS</pre>' . "\n\n".
								'/rss https://seu.rss.aqui - Adicionar RSS para sua lista' . "\n" .
								'/rss del - Apagar sua lista de RSS' . "\n\n" .
								'Você pode escolher também no menu abaixo:',
		'EN' => '<pre>📚 RSS</pre>' . "\n\n".
								'/rss https://you.rss.here - Add RSS to your list' . "\n" .
								'/rss del - Delete your list of RSS',
		'ES' => '<pre>📚 RSS</pre>' . "\n\n".
								'/rss https://su.rss.aqui - Añadir RSS a la lista' . "\n" .
								'/rss del - Borrar la lista de RSS',
		'IT' => '<pre>📚 RSS</pre>' . "\n\n".
								'/rss https://tuo.rss.qui - Aggiungi RSS alla tua lista' . "\n" .
								'/rss del - Elimina il tuo lista di RSS'
	));


	define('SUPORTE', array(
		'PT' => 'suporte Onde posso melhorar?',
		'EN' => 'support Where can I improve?',
		'ES' => 'apoyo ¿Dónde puedo mejorar?',
		'IT' => 'supporto Dove posso migliorare?'
	));

	define('TECLADO', array(
		'PT' => 'Escolha entre as opções do <b>teclado</b>',
		'EN' => 'Choose between <b>keyboard</b> options',
		'ES' => 'Elija entre opciones de <b>teclado</b>',
		'IT' => 'Scegliere tra le opzioni della <b>tastiera</b>'
	));
