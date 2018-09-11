<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Input;
use Auth;
use Hash;

class accountController extends Controller
{
    public function index()
    {
        $data = \App\TransaksiBTX::where('username', Auth::user()->username)->orderBy('id','DESC')->take(5);
    	return view('account.index', compact('data'));
    }

    public function register()
    {
    	return view('account.register');
    }

    public function saveregister(Request $request)
    {
    	$cek_email = \App\User::where('email', $request->input('email'))->first();
        $cek_username = \App\User::where('username', $request->input('username'))->first();

        if ($request->input('password') == $request->input('password_type')) {
        	if ($cek_email == null) {
        		if ($cek_username == null) {
        			if ($request->get('reff') == null) {
        				//create wallet
        				$wallet = file_get_contents('https://block.io/api/v2/get_new_address/?api_key='.env('BLOCK_IO').'&label='.$request->input('username').'');
        				$wallet = json_decode($wallet,true);
        				$my['username'] 	= $request->input('username');
        				$my['wallet']		= $wallet['data']['address'];
        				$my['saldo']		= 0.00000000;
        				\App\WalletBTC::create($my);

        				$coin['username'] 	= $request->input('username');
        				$coin['saldo']		= 0.00000000;
        				\App\WalletCoin::create($coin);

        				//create account
        				$data['username']   = $request->input('username');  
                        $data['email']      = $request->input('email'); 
                        $data['password']   = bcrypt($request->input('password'));
                        $data['country']    = $request->input('country');
                        $data['reff']       = 'bitxx';
                        $data['confirmation_code'] = str_random(30);
                        \App\User::create($data);

                        //create role
                        $get_id   = \App\User::where('username', $request->input('username'))->first();
						$get_id->roles()->attach(2);                        

        				Mail::send('email.verify', $data, function($message) {
                                $message->to(Input::get('email'), Input::get('username'))
                                    ->subject('Verify your account information');
                            });

        				return redirect('/account/register')->with('success', 'check your email to verify your account!');

        			}else{
        				//create wallet
        				$wallet = file_get_contents('https://block.io/api/v2/get_new_address/?api_key='.env('BLOCK_IO').'&label='.$request->input('username').'');
        				$wallet = json_decode($wallet,true);
        				$my['username'] 	= $request->input('username');
        				$my['wallet']		= $wallet['data']['address'];
        				$my['saldo']		= 0.00000000;
        				\App\WalletBTC::create($my);

        				$coin['username'] 	= $request->input('username');
        				$coin['saldo']		= 0.00000000;
        				\App\WalletCoin::create($coin);

        				//create account
        				$data['username']   = $request->input('username');  
                        $data['email']      = $request->input('email'); 
                        $data['password']   = bcrypt($request->input('password'));
                        $data['country']    = $request->input('country');
                        $data['reff']       = $request->get('reff');
                        $data['confirmation_code'] = str_random(30);
                        \App\User::create($data);

                        //create role
                        $get_id   = \App\User::where('username', $request->input('username'))->first();
						$get_id->roles()->attach(2);                        

        				Mail::send('email.verify', $data, function($message) {
                                $message->to(Input::get('email'), Input::get('username'))
                                    ->subject('Verify your account information');
                            });

        				return redirect('/account/register')->with('success', 'check your email to verify your account!');
        			}
        		}else{
        			return redirect('/account/register')->with('error', 'Account Already registered!');
        		}
        	}else{
        		return redirect('/account/register')->with('error', 'Email Already registered!');
        	}
        }else{
        	return redirect('/account/register')->with('error', 'Password Not Match!');
        }
    }

    public function verify($confirmation_code, Request $request)
    {

        $user = \App\User::where('confirmation_code', $confirmation_code)
            ->first();

        if ($user == null) {
            return redirect('/account/register')->with('error', 'Activation Failed!');
        }else{
            $data['confirmed'] = '1';
            $data['confirmation_code'] = null;
            $user->update($data);
            return redirect('/login')->with('success', 'Account Activated!');
        }

    }

    public function ico()
    {
        error_reporting(0);
        $cek_ico = \App\ICO::where('status','1')->orderBy('id','DESC')->first();
        $cek     = \App\ICO::where('status','0')->orderBy('id','ASC')->first();

        $persen  = ($cek_ico->sold/$cek_ico->qty) * 100;
        $sisa    = $cek_ico->qty - $cek_ico->sold;

        $price   = $cek_ico->price;
        $web     = 'https://blockchain.info/tobtc?currency=USD&value='.$price;
        $harga   = file_get_contents($web);

        return view('account.ico', compact(['cek_ico','cek', 'persen', 'sisa','harga']));
    }

    public function saveico(Request $request)
    {
        $saldo      = \App\WalletBTC::where('username', Auth::user()->username)->first();
        $cek_ico    = \App\ICO::where('status','1')->orderBy('id','DESC')->first();
        $stok       = $cek_ico->qty - $cek_ico->sold;
        $admin_btx  = \App\WalletCoin::find(7);
        $admin_btc  = \App\WalletBTC::find(7);
        $user_btx   = \App\WalletCoin::where('username', Auth::user()->username)->first();

        $btx_amount = $request->input('btx_amount') * ( $cek_ico->bonus / 100);

        //cek saldo user
        if ($saldo->saldo >= $request->input('btc_amount')) {
            //cek stok ico 
            if ($stok >= $btx_amount) {
                //mengurangi stok btx  admin
                $a['saldo'] = $admin_btx->saldo - $btx_amount;
                $admin_btx->update($a);

                $b['user']      = 'admin';
                $b['transaksi'] = 'Pembelian ICO dari user '.Auth::user()->username.'';
                $b['jumlah']    = $btx_amount;
                $b['status']    = '2';
                \App\TransaksiBTX::create($b);

                //menambahkan stok  btx user
                $c['saldo'] = $user_btx->saldo + $btx_amount;
                $user_btx->update($c);

                $d['user']      = 'admin';
                $d['transaksi'] = 'Pembelian ICO';
                $d['jumlah']    = $btx_amount;
                $d['status']    = '1';
                \App\TransaksiBTX::create($d);                

                //mengurangkan stok ico
                $e['sold']  = $cek_ico->sold + $btx_amount;
                $cek_ico->update($e);

                //mengurangkan stok btc user
                $f['saldo'] = $saldo->saldo - $request->input('btc_amount');
                $saldo->update($f);

                //menambahkan stok btc admin
                $g['saldo'] = $admin_btc->saldo + $request->input('btc_amount');
                $admin_btc->update($g);

                return redirect()->back()->with('success', 'Payment Success!!!');
            }else{
                return redirect()->back()->with('error', 'Insufficient BTX funds!!!');
            }
        }else{
            return redirect()->back()->with('error', 'Insufficient BTC funds!!!');
        }
    }

    public function deposit()
    {
        $data = \App\TransaksiBTC::where('user', Auth::user()->username)->orderBy('id','DESC')->paginate(10);
        return view('account.confirm', compact('data'));
    }

    public function savedeposit(Request $request)
    {
        $cek = \App\WalletBTC::where('username', Auth::user()->username)->first();

        $data['user']       = Auth::user()->username;
        $data['wallet']     = $cek->wallet;
        $data['jumlah']     = $request->input('amount');
        $data['status']     = '0';
        \App\TransaksiBTC::create($data);

        return view('account.confirm', compact('data'));
    }

    public function transfer()
    {
        return view('account.transfer');
    }

    public function savetransfer(Request $request)
    {
        $saldo      = \App\WalletCoin::where('username',Auth::user()->username)->first();
        $user       = \App\WalletCoin::where('username', $request->input('username'))->first();

        if (Hash::check($request->input('password'), Auth::user()->password)) {
            if ($request->input('amount') >= 1) {
                if ($saldo->saldo >= $request->input('amount')) {
                    if ($user != NULL) {
                        if ($request->input('username') != Auth::user()->username) {
                            // mengurangi saldo pengirim
                            $a['saldo'] = $saldo->saldo - $request->input('amount');
                            $saldo->update($a);

                            $b['user']      = Auth::user()->username;
                            $b['transaksi'] = 'Transfer to '.$request->input('username').'';
                            $b['jumlah']    = $request->input('amount');
                            $b['status']    = '2';
                            \App\TransaksiBTX::create($b);

                            //menambah saldo penerima
                            $c['saldo'] = $user->saldo + $request->input('amount');
                            $user->update($c);

                            $d['user']      = $request->input('username');
                            $d['transaksi'] = 'Transfer from '.Auth::user()->username.'';
                            $d['jumlah']    = $request->input('amount');
                            $d['status']    = '1';
                            \App\TransaksiBTX::create($d);

                            return redirect()->back()->with('success', 'Transfer success!!!');
                        }else{
                            return redirect()->back()->with('error', 'Can`t transfer to yourself!!!');
                        }
                        
                    }else{
                        return redirect()->back()->with('error', 'User not Found!!!');
                    }
                }else{
                    return redirect()->back()->with('error', 'Insufficient Funds !!!');
                }
            }else{
                return redirect()->back()->with('error', 'minimum 1 BTX to transfer!!!');
            }
        }else{
            return redirect()->back()->with('error', 'wrong password!!!');
        }   
    }

    public function withdraw()
    {
        return view('account.withdraw');
    }

    public function savewithdraw(Request $request)
    {
        $saldo      = \App\WalletBTC::where('username',Auth::user()->username)->first();

        if (Hash::check($request->input('password'), Auth::user()->password)) {
            if ($saldo->saldo >= $request->input('amount')) {
                return redirect()->back()->with('error', 'Cant`t withdraw at this time. Please try again later !!!');
            }else{
                return redirect()->back()->with('error', 'Insufficient Funds !!!');
            }
        }else{
            return redirect()->back()->with('error', 'wrong password!!!');
        }  
    }

    public function history()
    {
        $btx = \App\TransaksiBTX::where('user', Auth::user()->username)->get();
        $btc = \App\TransaksiBTC::where('user', Auth::user()->username)->get();
        return view('account.history', compact(['btx','btc']));
    }

    public function referral()
    {
        return view('account.referral');
    }

    public function security()
    {
        return view('account.security');
    }

    public function setting()
    {
        $data = \App\User::find(Auth::user()->id);
        return view('account.setting', compact(['data']));
    }

    public function savesetting(Request $request)
    {
        if ($request->input('new_password') == null || $request->input('retype_password') == null) {
            $data['email']      = $request->input('email');

            $update = \App\User::find(Auth::user()->id);
            $update->update($data);
            return redirect('/account/setting')->with('success', 'Account updated');
        }else{
            if ($request->input('new_password') == $request->input('retype_password')) {
                $data['email']      = $request->input('email');
                $data['password']   = bcrypt($request->input('password'));

                $update = \App\User::find(Auth::user()->id);
                $update->update($data);
                return redirect('/account/setting')->with('success', 'Account updated');
            }else{
                return redirect('/account/setting')->with('error', 'Password not Matched');
            }
        }
    }

    public function support()
    {
        return view('account.support');
    }
}
