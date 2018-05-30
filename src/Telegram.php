<?php

namespace Aljawad\Telegramlogs;

/**
* 
*/
class Telegram
{
	
	public function send($note){
		$token = '572466768:AAFMxFhjdaYpZj5jGjzkTt6qbcfgofeylRM';
        $chat_id = '486231942';

        $message = '<i>Message:</i>' . PHP_EOL
            . '<code>' . $note . '</code>';

        try {
            $ids = explode(',', $chat_id);

            foreach ($ids as $id) {
                file_get_contents(
                    'https://api.telegram.org/bot' . $token . '/sendMessage?'
                    . http_build_query([
                        'text' => $message,
                        'chat_id' => $id,
                        'parse_mode' => 'html'
                    ])
                );
            }
        } catch (\Exception $e) {
            Log::error('TelegramLog bad token/chat_id.');
        }
	}
}