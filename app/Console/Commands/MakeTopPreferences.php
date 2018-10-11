<?php

namespace App\Console\Commands;

use App\Models\UserAccount;
use Illuminate\Console\Command;

class MakeTopPreferences extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:top_preferences';

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
	    $userAccounts = UserAccount::all();
	    foreach($userAccounts as $userAccount){
		    $topPreferences = $userAccount->tastePreferences()
			    ->select(["item_id", \DB::raw("sum(preference) preference")])
			    ->groupBy("item_id")
			    ->orderBy("preference", "Desc")
			    ->take(10)
			    ->get();

		    $userAccount->topPreferences()->delete();
		    $userAccount->topPreferences()->createMany(
			    $topPreferences->toArray()
		    );
	    }
    }
}
