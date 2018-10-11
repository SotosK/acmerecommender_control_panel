<?php

namespace App\Console\Commands;

use App\VirtuemartProduct;
use Illuminate\Console\Command;
use GuzzleHttp\Client;

class FeedRecommendetions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:recommendation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $this->client = new Client();
        $count = 100000;
        $ratings = [5,7,10];
        for($i =0 ;$i < $count; $i++) {
            $products = VirtuemartProduct::where('virtuemart_product_id','!=',9)->orderBy(\DB::raw('RAND()'))->take(10)->get();
            foreach ($products as $product) {
                $user_id = rand(1,100000);
                shuffle($ratings);
                $rating = $ratings[0];
                $product_id = (!in_array($product->product_parent_id,[0,9]) ? $product->product_parent_id : $product->virtuemart_product_id );
                $this->sendPreference($product->virtuemart_product_id,$rating,$user_id);
            }

        }

    }

    private function sendPreference($product_id,$rating, $user){

        $data = [
            "item_id"=>$product_id,
            "user_id"=>$user,
            "action"=>$rating,
            "key"=>"5a38073e6c51d9.35893732"
        ];
        $response = $this->client->post('http://localhost:8000/api/recommendation_data', [
            'headers' => [
                'Accept' => 'application/json',

            ],
                'json' => $data
        ]);

//        $this->comment($response->getBody()->getContents());

    }


}
