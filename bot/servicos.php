<?php
	// # MENSAGENS

	$mensagens['edit_message'] = false;

	if (isset($mensagens['callback_query'])) {
		$mensagens['callback_query']['message']['text'] = $mensagens['callback_query']['data'];
		$mensagens['message'] = $mensagens['callback_query']['message'];

		if (isset($mensagens['message']['reply_to_message']['from'])) {
			$mensagens['message']['from'] = $mensagens['message']['reply_to_message']['from'];
		}

		$mensagens['edit_message'] = TRUE;

		unset($mensagens['callback_query']);
	} else if (isset($mensagens['edited_message'])) {
		$mensagens['message'] = $mensagens['edited_message'];

		unset($mensagens['edited_message']);
	} else if (empty($mensagens['message']['text'])) {
		$mensagens['message']['text'] = '';
	}

	// # IDIOMA

	$exit = false;

	$texto = explode(' ', $mensagens['message']['text']);
	$texto[0] = str_ireplace('@' . DADOS_BOT['result']['username'], '', $texto[0]);

	switch (strtolower($texto[0])) {
		case '/portugues':
			$redis->set('idioma:' . $mensagens['message']['chat']['id'], 'PT');
			$texto[0] = '/start';
			break;
		case '/english':
			$redis->set('idioma:' . $mensagens['message']['chat']['id'], 'EN');
			$texto[0] = '/start';
			break;
		case '/espanol':
			$redis->set('idioma:' . $mensagens['message']['chat']['id'], 'ES');
			$texto[0] = '/start';
			break;
		case '/italiano':
			$redis->set('idioma:' . $mensagens['message']['chat']['id'], 'IT');
			$texto[0] = '/start';
			break;
		case '/idioma':
		case '/language':
		case '/lingua':
			$redis->del('idioma:' . $mensagens['message']['chat']['id']);
			break;
	}

	if ($redis->exists('idioma:' . $mensagens['message']['chat']['id'])) {
		$idioma = $redis->get('idioma:' . $mensagens['message']['chat']['id']);
	} else {
		$teclado =	[
									'inline_keyboard'	=>	[
																					[
																						['text' =>  '🇧🇷 Português', 'callback_data' => '/portugues'	],
																						['text' =>  '🇬🇧 English'	, 'callback_data' => '/english'		]
																					],
																					[
																						['text' =>  '🇪🇸 Español'	, 'callback_data' => '/espanol'		],
																						['text' =>  '🇮🇹 Italiano'	, 'callback_data' => '/italiano'	]
																					]
																				]
								];

		$replyMarkup = json_encode($teclado);

		$mensagem =
			'<b>PT:</b> ' . TECLADO['PT'] . "\n" . '----------' . "\n" .
			'<b>EN:</b> ' . TECLADO['EN'] . "\n" . '----------' . "\n" .
			'<b>ES:</b> ' . TECLADO['ES'] . "\n" . '----------' . "\n" .
			'<b>IT:</b> ' . TECLADO['IT'];

		sendMessage($mensagens['message']['chat']['id'], $mensagem, $mensagens['message']['message_id'], $replyMarkup, true, true, false, $mensagens['edit_message']);

		$exit = true;
	}

	if (strcasecmp($mensagens['message']['text'], '/start' . '@' . DADOS_BOT['result']['username'] . ' new') == 0) {
		$exit = true;
	} else if (isset($mensagens['message']['left_chat_participant']['id']) AND
									 $mensagens['message']['left_chat_participant']['id'] == DADOS_BOT['result']['id']) {
		$exit = true;
	}

	// # RANKING

	if ($mensagens['edit_message'] === false) {
		if (!$redis->exists('idioma:' . $mensagens['message']['from']['id'])) {
			$idioma = $redis->get('idioma:' . $mensagens['message']['from']['id']);
		}

		if ($mensagens['message']['chat']['type'] == 'group'			OR
				$mensagens['message']['chat']['type'] == 'supergroup'	OR
				$mensagens['message']['chat']['type'] == 'private'		) {

			 	$redis->hset('ranking:' . $mensagens['message']['chat']['id'] . ':' . $mensagens['message']['from']['id'] , 'primeiro_nome', $mensagens['message']['from']['first_name']);
				$redis->hincrby('ranking:' . $mensagens['message']['chat']['id'] . ':' . $mensagens['message']['from']['id'] , 'qntd_mensagem', 1);
		}
	}