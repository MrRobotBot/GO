<?php
	// # BEM-VINDO

	if (isset($mensagens['message']['new_chat_participant'])) {
		if ($redis->hget('bemvindo:' . $mensagens['message']['chat']['id'], 'ativo') === 'true') {
					$tipoMensagem = $redis->hget('bemvindo:' . $mensagens['message']['chat']['id'], 'tipo');
			$conteudoMensagem = $redis->hget('bemvindo:' . $mensagens['message']['chat']['id'], 'conteudo');

			if ($tipoMensagem == 'texto') {
				$conteudoMensagem = str_ireplace('$nome', $mensagens['message']['new_chat_participant']['first_name'], $conteudoMensagem);
				$conteudoMensagem = str_ireplace('$grupo', $mensagens['message']['chat']['title'], $conteudoMensagem);

				if (isset($mensagens['message']['new_chat_participant']['first_name'])) {
					$conteudoMensagem = str_ireplace('$usuario', '@' . $mensagens['message']['new_chat_participant']['username'], $conteudoMensagem);
				} else {
					$conteudoMensagem = str_ireplace('$usuario', $mensagens['message']['new_chat_participant']['first_name'], $conteudoMensagem);
				}

				sendMessage($mensagens['message']['chat']['id'], $conteudoMensagem, $mensagens['message']['message_id']);
			} else if ($tipoMensagem == 'documento') {
				sendDocument($mensagens['message']['chat']['id'], $conteudoMensagem, $mensagens['message']['message_id'], null, null);
			} else if ($tipoMensagem == 'foto') {
				sendPhoto($mensagens['message']['chat']['id'], $conteudoMensagem, $mensagens['message']['message_id'], null, null);
			}
		}
	}

	// # STATUS

	if ($mensagens['message']['chat']['type'] == 'private' or $mensagens['message']['chat']['type'] == 'group') {
		$redis->set('status_bot:privateorgroup', $mensagens['message']['message_id']);
	} else if ($mensagens['message']['chat']['type'] == 'supergroup') {
		$redis->set('status_bot:supergroup', $mensagens['message']['message_id']);
	}

	// # CANAIS

	if ($mensagens['channel_post']['chat']['type'] == 'channel') {
		$redis->set('canais:' . $mensagens['channel_post']['chat']['id'], '@' . $mensagens['channel_post']['chat']['username']);
	}

	// # RSS SERVICOS

	$link = '';

	switch (strtolower($texto[0])) {
		case '/futebolgeral':
			$link = 'https://esportes.yahoo.com/futebol/?format=rss';
			break;
		case '/brasileiroa':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-brasileiro/?format=rss';
			break;
		case '/brasileirob':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-brasileiro/s%C3%A9rie-b/?format=rss';
			break;
		case '/paulista':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-paulista/?format=rss';
			break;
		case '/carioca':
			$link = 'https://esportes.yahoo.com/futebol/estadual-do-rio/?format=rss';
			break;
		case '/mineiro':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-mineiro/?format=rss';
			break;
		case '/gaucho':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-ga%C3%BAcho/?format=rss';
			break;
		case '/copabrasil':
			$link = 'https://esportes.yahoo.com/futebol/copa-brasil/?format=rss';
			break;
		case '/libertadores':
			$link = 'https://esportes.yahoo.com/futebol/copa-libertadores/?format=rss';
			break;
		case '/sulamericana':
			$link = 'https://esportes.yahoo.com/futebol/copa-sul-americana/?format=rss';
			break;
		case '/champions':
			$link = 'https://esportes.yahoo.com/futebol/liga-campe%C3%B5es/?format=rss';
			break;
		case '/ingles':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-ingl%C3%AAs/?format=rss';
			break;
		case '/espanha':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-espanhol/?format=rss';
			break;
		case '/italia':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-italiano/?format=rss';
			break;
		case '/alemao':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-alem%C3%A3o/?format=rss';
			break;
		case '/portugal':
			$link = 'https://esportes.yahoo.com/futebol/campeonato-portugu%C3%AAs/?format=rss';
			break;
		case '/abc':
			$link = 'https://esportes.yahoo.com/futebol/abc/?format=rss';
			break;
		case '/americarn':
			$link = 'https://esportes.yahoo.com/futebol/am%C3%A9rica-rn/?format=rss';
			break;
		case '/atleticomg':
			$link = 'https://esportes.yahoo.com/futebol/atl%C3%A9tico-mineiro/?format=rss';
			break;
		case '/atleticopr':
			$link = 'https://esportes.yahoo.com/futebol/atl%C3%A9tico-paranaense/?format=rss';
			break;
		case '/bahia':
			$link = 'https://esportes.yahoo.com/futebol/bahia/?format=rss';
			break;
		case '/botafogo':
			$link = 'https://esportes.yahoo.com/futebol/botafogo/?format=rss';
			break;
		case '/ceara':
			$link = 'https://esportes.yahoo.com/futebol/cear%C3%A1/?format=rss';
			break;
		case '/corinthians':
			$link = 'https://esportes.yahoo.com/futebol/corinthians/?format=rss';
			break;
		case '/coritiba':
			$link = 'https://esportes.yahoo.com/futebol/coritiba/?format=rss';
			break;
		case '/criciuma':
			$link = 'https://esportes.yahoo.com/futebol/crici%C3%BAma/?format=rss';
			break;
		case '/cruzeiro':
			$link = 'https://esportes.yahoo.com/futebol/cruzeiro/?format=rss';
			break;
		case '/flamengo':
			$link = 'https://esportes.yahoo.com/futebol/flamengo/?format=rss';
			break;
		case '/fluminense':
			$link = 'https://esportes.yahoo.com/futebol/fluminense/?format=rss';
			break;
		case '/fortaleza':
			$link = 'https://esportes.yahoo.com/futebol/fortaleza/?format=rss';
			break;
		case '/goias':
			$link = 'https://esportes.yahoo.com/futebol/goi%C3%A1s/?format=rss';
			break;
		case '/gremio':
			$link = 'https://esportes.yahoo.com/futebol/gr%C3%AAmio/?format=rss';
			break;
		case '/internacional':
			$link = 'https://esportes.yahoo.com/futebol/internacional/?format=rss';
			break;
		case '/nautico':
			$link = 'https://esportes.yahoo.com/futebol/n%C3%A1utico/?format=rss';
			break;
		case '/palmeiras':
			$link = 'https://esportes.yahoo.com/futebol/palmeiras/?format=rss';
			break;
		case '/pontepreta':
			$link = 'https://esportes.yahoo.com/futebol/ponte-preta/?format=rss';
			break;
		case '/portuguesa':
			$link = 'https://esportes.yahoo.com/futebol/portuguesa/?format=rss';
			break;
		case '/santacruz':
			$link = 'https://esportes.yahoo.com/futebol/santa-cruz-fc/?format=rss';
			break;
		case '/santos':
			$link = 'https://esportes.yahoo.com/futebol/santos/?format=rss';
			break;
		case '/saopaulo':
			$link = 'https://esportes.yahoo.com/futebol/s%C3%A3o-paulo/?format=rss';
			break;
		case '/sport':
			$link = 'https://esportes.yahoo.com/futebol/sport/?format=rss';
			break;
		case '/vascodagama':
			$link = 'https://esportes.yahoo.com/futebol/vasco/?format=rss';
			break;
		case '/vitoria':
			$link = 'https://esportes.yahoo.com/futebol/vit%C3%B3ria/?format=rss';
			break;
		case '/arsenal':
			$link = 'https://esportes.yahoo.com/futebol/arsenal/?format=rss';
			break;
		case '/barcelona':
			$link = 'https://esportes.yahoo.com/futebol/barcelona/?format=rss';
			break;
		case '/bayerndemunique':
			$link = 'https://esportes.yahoo.com/futebol/bayern-munique/?format=rss';
			break;
		case '/borussiadortmund':
			$link = 'https://esportes.yahoo.com/futebol/borussia/?format=rss';
			break;
		case '/chelsea':
			$link = 'https://esportes.yahoo.com/futebol/chelsea/?format=rss';
			break;
		case '/interdemilao':
			$link = 'https://esportes.yahoo.com/futebol/inter-mil%C3%A3o/?format=rss';
			break;
		case '/juventus':
			$link = 'https://esportes.yahoo.com/futebol/juventus/?format=rss';
			break;
		case '/liverpool':
			$link = 'https://esportes.yahoo.com/futebol/liverpool/?format=rss';
			break;
		case '/manchestercity':
			$link = 'https://esportes.yahoo.com/futebol/manchester-city/?format=rss';
			break;
		case '/manchesterunited':
			$link = 'https://esportes.yahoo.com/futebol/manchester-united/?format=rss';
			break;
		case '/milan':
			$link = 'https://esportes.yahoo.com/futebol/milan/?format=rss';
			break;
		case '/parissaintgermain':
			$link = 'https://esportes.yahoo.com/futebol/psg/?format=rss';
			break;
		case '/realmadrid':
			$link = 'https://esportes.yahoo.com/futebol/real-madrid/?format=rss';
			break;
		case '/esportesgeral':
			$link = 'https://esportes.yahoo.com/?format=rss';
			break;
		case '/mma':
			$link = 'https://esportes.yahoo.com/mma/?format=rss';
			break;
		case '/tenis':
			$link = 'https://esportes.yahoo.com/t%C3%AAnis/?format=rss';
			break;
		case '/volei':
			$link = 'https://esportes.yahoo.com/v%C3%B4lei/?format=rss';
			break;
		case '/basquete':
			$link = 'https://esportes.yahoo.com/basquete/?format=rss';
			break;
	}

	if (!empty($link)) {
		$feed = file_get_contents($link, false, CONTEXTO);

		try{
			$rss = new SimpleXmlElement($feed);
		}
		catch(Exception $e){
			$mensagem = 'Ocorreu um erro! Tente mais tarde.';
		}

		if (isset($rss->channel->item)) {
			$mensagem = '〰〰〰〰〰〰〰' . "\n\n";

			foreach($rss->channel->item as $item){
				$item->title = html_entity_decode(strip_tags($item->title), ENT_QUOTES, 'UTF-8');
				$mensagem = $mensagem . '<b>' . $item->title . '</b>' . "\n\n";
				$item->description = html_entity_decode(strip_tags($item->description), ENT_QUOTES, 'UTF-8');
				$mensagem = $mensagem . $item->description . "\n\n" . '👉 <a href="' . $item->link . '">Continuar lendo</a>';

				break;
			}

			$mensagem = $mensagem . "\n\n" . '〰〰〰〰〰〰〰';

			$redis->hset('rss:feed:' . $mensagens['message']['chat']['id'], $link, md5($item->title));

			$mensagem = $mensagem . "\n\n" . 'O conteúdo do seu RSS aparecerá assim. Você será notificado à cada atualização.';
		}

		$teclado = [
								'inline_keyboard'	=>	[
																				[
																					['text' => '🔙', 'callback_data' => '/rss']
																				]
																			]
							];

		$replyMarkup = json_encode($teclado);

		sendMessage($mensagens['message']['chat']['id'], $mensagem, $mensagens['message']['message_id'], $replyMarkup, true, $mensagens['edit_message']);
	}
