<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ConfirmTransaksi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transaksi:confirm';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Confirm Transaction';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data       = \App\TransaksiBlock::orderBy('id','DESC')->first();
        $wallet     = \App\WalletBTC::where('wallet', $data->received_by)->first();

        $a['user']      = $wallet->username;
        $a['wallet']    = $wallet->wallet;
        $a['jumlah']    = $data->amount;
        $a['status']    = '1';
        \App\TransaksiBTC::create($a);

        $b['saldo']     = $wallet->saldo +  $data->amount;
        $wallet->update($b);
        
        // $data = \App\TransaksiBTC::where('status','0')->get();

        // for ($i=0; $i < count($data); $i++) { 
        //     $cek[$i]    =   \App\TransaksiBlock::where('received_by',$data[$i]['wallet'])
        //         ->where('amount', $data[$i]['jumlah'])
        //         ->first();

        //     if ($cek[$i] != NULL) {
        //         //verifikasi transaksi
        //         $mine[$i] = \App\TransaksiBTC::find($data[$i]['id']);
        //         $a[$i]['status'] = '1';
        //         $mine[$i]->update($a[$i]);

        //         //mencatatkan transaksi
        //         $my[$i] = \App\WalletBTC::where('wallet', $data[$i]['wallet'])->first();
        //         $b['saldo'] = $my[$i]->saldo + $data[$i]['jumlah'];
        //         $my[$i]->update($b);

        //     }
        // }
    }
}
