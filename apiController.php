<?php 

class error
{

  public function error($code, $err=null, $msg=null)
  {       
      switch($code)     
      {     
          case '002':
              $status  = 'request login';
              $message = '再度ログインしてください。';
              break;
          case '003':
              $status  = 'invalid data parameter';
              $message = 'dataパラメータが不正です。';
              break;
          case '009':
              $status  = 'faild to regist data';
              $message = 'データの登録に失敗しました。';
              break;
          case '012':
              $status  = 'login ID or password is incorrect';
              $message = 'ログインIDまたはパスワードが正しくありません。';
              break;
          case '013':     
              $status  = 'data is not exist'; 
              $message = 'データが存在しません。';         
              break;       
          case '014': 
              $status  = 'faild to delete data';     
              $message = 'データの削除に失敗しました。'; 
              break;   
          case '015':  
              $status  = 'faild to edit data'; 
              $message = 'データの編集に失敗しました。';    
              break;      
          default:        
              $status  = 'othre error'; 
              $message = 'DBエラー等のその他のエラーです。messageを確認してください。';     
              break;     
      }       
      if ($err !== null )      
      {         
        $message .= "\n" . json_encode( $err, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT  );     
      }       
      if ($msg !== null) 
      {        
        $message = $msg; 
      }
      $data = [
        'code'    => $code,
        'status'  => $status,
        'message' => $message
      ];
      Log::debug('error response data -----------', 'api');
      return $this->response(json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUAT))
  }

}