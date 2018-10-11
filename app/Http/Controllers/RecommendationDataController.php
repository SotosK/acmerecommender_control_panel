<?php
/**
 * Created by PhpStorm.
 * User: sotosk
 * Date: 13/10/2017
 * Time: 4:31 μμ
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\UserAccount;
use App\Models\TastePreference;
use Illuminate\Http\Request;

class RecommendationDataController extends Controller
{
    public function store(Request $request){
        $item_id = $request->input( 'item_id');
        $user_id = $request->input( 'user_id');
        $preference = $request->input('action');
        $api_key = $request->input('key');

        $user_account = UserAccount::where('api_key', $api_key)->firstOrFail();

        $tastePreference = TastePreference::firstOrNew([
            'item_id' => $item_id,
            'user_id' => $user_id,
            'user_account_id' => $user_account->id
        ]);

        $tastePreference->preference = ((int)$tastePreference->preference < $preference ? $preference : $tastePreference->preference);

        $user_account->tastePreferences()->save($tastePreference);
        return response()->json($request->all());
    }
}