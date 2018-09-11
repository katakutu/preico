<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaveTransaksi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transaksi:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save Transaksi Ke Database';

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
        $web    = 'https://block.io/api/v2/get_transactions/?api_key='.env('BLOCK_IO').'&type=received';
        $data   = file_get_contents($web);
        $data   = json_decode($data, true);

        for ($i=0; $i < count($data['data']['txs']); $i++) { 
            $cek[$i] = \App\TransaksiBlock::where('txid', $data['data']['txs'][$i]['txid'])->first();
            if ($cek[$i] == NULL) {
                $a[$i]['txid']          = $data['data']['txs'][$i]['txid'];
                $a[$i]['time']          = $data['data']['txs'][$i]['time'];
                $a[$i]['confirmations'] = $data['data']['txs'][$i]['confirmations'];
                $a[$i]['amount']        = $data['data']['txs'][$i]['amounts_received'][0]['amount'];
                $a[$i]['received_by']   = $data['data']['txs'][$i]['amounts_received'][0]['recipient'];
                $a[$i]['send_by']       = $data['data']['txs'][$i]['senders'][0];

                \App\TransaksiBlock::create($a[$i]);

                // dd($a[$i]);
             } 
        }
    }
}
