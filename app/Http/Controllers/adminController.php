<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $ico = \App\ICO::get();
    	return view('admin.index', compact(['ico']));
    }

    public function setting()
    {
    	$data = \App\Setting::find(1);
    	return view('admin.setting', compact('data'));
    }

    public function savesetting(Request $request)
    {
    	$data = $request->all();
    	\App\Setting::find(1)->update($data);
    	return redirect()->back();
    }

    public function ico()
    {
        $data = \App\ICO::all();
        return view('admin.ico', compact('data'));
    }

    public function saveico(Request $request)
    {
        $data               = $request->all();
        $data['str_start']  = strtotime($request->input('start_date'));
        $data['str_end']    = strtotime($request->input('end_date'));
        \App\ICO::create($data);
        return redirect()->back();
    }

    public function editAdminICO($id, Request $request)
    {
        $data = $request->all();
        \App\ICO::find($id)->update($data);
        return redirect()->back();

    }

    public function statusAdminICO($id, Request $request)
    {
        $data = $request->all();
        \App\ICO::find($id)->update($data);
        return redirect()->back();

    }

    public function delAdminICO($id, Request $request)
    {
        \App\ICO::find($id)->delete();
        return redirect()->back();
        
    }

    public function injectBTX()
    {
        $data = \App\TransaksiBTX::where('transaksi','Inject BTX saldo from admin')->paginate(10);
        return view('admin.inject', compact('data'));
    }

    public function saveinjectBTX(Request $request)
    {
        $user       = \App\WalletCoin::where('username',$request->input('username'))->first();
        $admin      = \App\WalletCoin::find(7);

        //cek tujuan
        if ($user != NULL) {
            //cek saldo
            if ($admin->saldo >= $request->input('amount') ) {
                //saldo admin dikurang
                $a['saldo'] = $admin->saldo - $request->input('amount');
                $admin->update($a);

                //saldo user nambah
                $b['saldo'] = $user->saldo + $request->input('amount');
                $user->update($b);

                //log transaksi
                $c['user']      = $request->input('username');
                $c['transaksi'] = 'Inject BTX saldo from admin';
                $c['jumlah']    = $request->input('amount');
                $c['status']    = '1';
                \App\TransaksiBTX::create($c);

                return redirect()->back()->with('success', 'Inject Coin Success!!!');
            }else{
                return redirect()->back()->with('error', 'Insufficient funds!!!');
            }
        }else{
            return redirect()->back()->with('error', 'Username Not Found!!!');
        }
    }

    public function user()
    {
        $data = \App\User::where('id','!=',1)->paginate(10);
        return view('admin.user', compact('data'));
    }

    public function btc()
    {
        $data   = \App\TransaksiBTC::where('status','0')->orderBy('id','DESC')->paginate(10);
        $block  = \App\TransaksiBlock::orderBy('id','DESC')->paginate(10);
        return view('admin.btc', compact(['data','block']));
    }

    public function confbtc(Request $request)
    {
        $data = \App\TransaksiBTC::find($request->input('id'));
        $a['status'] = '1';
        $data->update($a);

        $wallet = \App\WalletBTC::where('wallet', $request->input('wallet'))->first();
        $b['saldo'] = $wallet->saldo + $request->input('amount');
        $wallet->update($b);

        return redirect()->back()->with('success', 'Transaction Confirmed!!!');
    }
}
