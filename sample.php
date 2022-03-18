<?php
$this->getResponse()->withStringBody(json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE ));
 exec( 'ssh -p 10022 -i ' . SYNC_KEY . ' ' . SYNC_USER . '@' . SYNC_HOST2 . ' ' . ' mkdir -p ' . WWW_ROOT . $dir );            exec( 'scp -i ' . SYNC_KEY . ' -P 10022 '. WWW_ROOT . $file_name . ' ' . SYNC_USER . '@' . SYNC_HOST2 . ':' . WWW_ROOT . $file_name );
