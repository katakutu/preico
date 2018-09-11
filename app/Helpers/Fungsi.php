<?php

/**
 * @Author: Katakutu
 * @Date:   2017-10-28 14:42:54
 * @Last Modified by:   Kutu
 * @Last Modified time: 2018-04-30 20:41:39
 */
class Fungsi {
	public static function pengaturan($var)
	{
		$data = \App\Pengaturan::find(1);
		return $data->$var;
	}

    public static function mywallet()
    {
        $data = \App\WalletBTC::where('username', Auth::user()->username)->first();
        return $data->wallet;
    }

	public static function saldo_btc($id)
	{
		$data = \App\WalletBTC::where('username', $id)->first();
		return $data->saldo;
	}

	public static function saldo_coin($id)
	{
		$data = \App\WalletCoin::where('username', $id)->first();
		return $data->saldo;
	}

	public static function user_register()
	{
		$data = \App\User::where('id','!=',1)->count();
		return $data;
	}

	public static function user_unconfirm()
	{
		$data = \App\User::where('status','0')->count();
		return $data;
	}

	public static function status($var)
    {
        switch ($var) {
            case '0':
                $data = 'Upcoming';
                break;
            case '1':
                $data = 'Running';
                break;
            case '2':
                $data = 'Completed';
                break;
        }

        return $data;
    }

    public static function count_supply()
    {
    	$data = \App\ICO::sum('qty');
    	$data = explode('.', $data);
    	return $data[0];
    }

    public static function tanggal($var)
	{
		$var = explode('-', $var);

		switch ($var[1]) {
			case '01':
				$bulan = 'January';
				break;
			case '02':
				$bulan = 'February';
				break;
			case '03':
				$bulan = 'March';
				break;
			case '04':
				$bulan = 'April';
				break;
			case '05':
				$bulan = 'May';
				break;
			case '06':
				$bulan = 'June';
				break;
			case '07':
				$bulan = 'Jule';
				break;
			case '08':
				$bulan = 'August';
				break;
			case '09':
				$bulan = 'September';
				break;
			case '10':
				$bulan = 'October';
				break;
			case '11':
				$bulan = 'November';
				break;
			case '12':
				$bulan = 'December';
				break;
		}
		echo $var[2].' '.$bulan.' '.$var[0];
	}

	public static function sold_persen($id)
	{
		$data = \App\ICO::find($id);

		if ($data->sold == NULL) {
			echo 0;
		}else{
			$hitung = ($data->sold/$data->qty) * 100;
			return $hitung;
		}
	}

	
    public static function wallet_siapa($wallet)
    {
    	error_reporting(0);
    	$data = \App\WalletBTC::where('wallet', $wallet)->first();
    	return $data->username;
    }

    public static function stat_transaction($var)
	{
		switch ($var) {
			case '1':
				$data = 'Debit';
				break;
			
			case '2':
				$data = 'Credit';
				break;
		}
		return $data;
	}

	public static function verifikasi($id)
    {
        $data = \App\User::find($id);
        if ($data->confirmed == 1) {
            $ver = 'verified';
        }else{
            $ver = 'non verified';
        }

        return $ver;
    }

	public static function referral($uname)
    {
        $a = \App\User::where('reff',$uname)->get();

        for ($i=0; $i < count($a) ; $i++) { 
            echo '<tr>';
            echo '<td>Level 1</td>';
            echo '<td>'.$a[$i]->username.'</td>';
            echo '<td>0.00000000 BTX</td>';
            echo '<td>0.00000000 BTX</td>';
            echo '<td>'.Fungsi::saldo_btc($a[$i]->username).' BTC</td>';
            echo '<td>0.00 USD</td>';
            echo '<td>'.$a[$i]->reff.'</td>';
            echo '<td>'.$a[$i]->created_at.'</td>';
            echo '<td>'.Fungsi::verifikasi($a[$i]->id).'</td>';
            echo '</tr>';

            $b = \App\User::where('reff',$a[$i]->username)->get();
            for ($j=0; $j < count($b); $j++) { 
                echo '<tr>';
                echo '<td>level 2</td>';
                echo '<td>'.$b[$j]->username.'</td>';
                echo '<td>0.00000000 BTX</td>';
                echo '<td>0.00000000 BTX</td>';
                echo '<td>'.Fungsi::saldo_btc($b[$j]->username).' BTC</td>';
                echo '<td>0.00 USD</td>';
                echo '<td>'.$b[$j]->reff.'</td>';
                echo '<td>'.$b[$j]->created_at.'</td>';
                echo '<td>'.Fungsi::verifikasi($b[$j]->id).'</td>';
                echo '</tr>';

                $c = \App\User::where('reff',$b[$j]->username)->get();
                for ($k=0; $k < count($c); $k++) { 
                    echo '<tr>';
                    echo '<td>level 3</td>';
                    echo '<td>'.$c[$k]->username.'</td>';
                    echo '<td>0.00000000 BTX</td>';
                    echo '<td>0.00000000 BTX</td>';
                    echo '<td>'.Fungsi::saldo_btc($c[$k]->username).' BTC</td>';
                    echo '<td>0.00 USD</td>';
                    echo '<td>'.$c[$k]->reff.'</td>';
                    echo '<td>'.$c[$k]->created_at.'</td>';
                    echo '<td>'.Fungsi::verifikasi($c[$k]->id).'</td>';
                    echo '</tr>';

                    $d = \App\User::where('reff',$c[$k]->username)->get();
                    for ($l=0; $l < count($d); $l++) { 
                        echo '<tr>';
                        echo '<td>level 4</td>';
                        echo '<td>'.$d[$l]->username.'</td>';
                        echo '<td>0.00000000 BTX</td>';
                        echo '<td>0.00000000 BTX</td>';
                        echo '<td>'.Fungsi::saldo_btc($d[$l]->username).' BTC</td>';
                        echo '<td>0.00 USD</td>';
                        echo '<td>'.$d[$l]->reff.'</td>';
                        echo '<td>'.$d[$l]->created_at.'</td>';
                        echo '<td>'.Fungsi::verifikasi($d[$l]->id).'</td>';
                        echo '</tr>';

                        $e = \App\User::where('reff',$d[$l]->username)->get();
                        for ($m=0; $m < count($e); $m++) { 
                            echo '<tr>';
                            echo '<td>level 5</td>';
                            echo '<td>'.$e[$m]->username.'</td>';
                            echo '<td>0.00000000 BTX</td>';
                            echo '<td>0.00000000 BTX</td>';
                            echo '<td>'.Fungsi::saldo_btc($e[$m]->username).' BTC</td>';
                            echo '<td>0.00 USD</td>';
                            echo '<td>'.$e[$m]->reff.'</td>';
                            echo '<td>'.$e[$m]->created_at.'</td>';
                            echo '<td>'.Fungsi::verifikasi($e[$m]->id).'</td>';
                            echo '</tr>';

                            $f = \App\User::where('reff',$e[$m]->username)->get();
                            for ($n=0; $n < count($f); $n++) { 
                                echo '<tr>';
                                echo '<td>level 6</td>';
                                echo '<td>'.$f[$n]->username.'</td>';
                                echo '<td>0.00000000 BTX</td>';
                                echo '<td>0.00000000 BTX</td>';
                                echo '<td>'.Fungsi::saldo_btc($f[$n]->username).' BTC</td>';
                                echo '<td>0.00 USD</td>';
                                echo '<td>'.$f[$n]->reff.'</td>';
                                echo '<td>'.$f[$n]->created_at.'</td>';
                                echo '<td>'.Fungsi::verifikasi($f[$n]->id).'</td>';
                                echo '</tr>';

                                $g = \App\User::where('reff',$f[$n]->username)->get();
                                for ($o=0; $o < count($g); $o++) { 
                                    echo '<tr>';
                                    echo '<td>level 7</td>';
                                    echo '<td>'.$g[$o]->username.'</td>';
                                    echo '<td>0.00000000 BTX</td>';
                                    echo '<td>0.00000000 BTX</td>';
                                    echo '<td>'.Fungsi::saldo_btc($g[$o]->username).' BTC</td>';
                                    echo '<td>0.00 USD</td>';
                                    echo '<td>'.$g[$o]->reff.'</td>';
                                    echo '<td>'.$g[$o]->created_at.'</td>';
                                    echo '<td>'.Fungsi::verifikasi($g[$o]->id).'</td>';
                                    echo '</tr>';
                                }
                            }


                        }
                    }
                }
            }
        }
    }
}