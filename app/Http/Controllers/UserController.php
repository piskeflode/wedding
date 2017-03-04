<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    public function getLogin($name = null) {



        if ($name == null){
            return view('nouser');

        }else {

            if (Auth::attempt(['name' => $name])) {

                $user = Auth::user();

                if ($user['couple'] == 1){
                    $couple = DB::table('couple')->where('couple_id', $user['id'])->first();

                    session()->put('couple', $couple);
                }
                return redirect()->route('main');
            }
            else
                {

                return view('nouser');

            }
        }

    }

    public function postRegister(Request $request){

        $value = $request->all();
        $user =auth()->user();
        $user->checked = 1;

        if($value['coming'] == 'coming'){

            $user->coming = 1;
            $user->save();

          //  return redirect()->back();
            return Redirect::to(URL::previous() . "#myModal");
        }else
            $user->save();
           // return redirect()->back();

        return Redirect::to(URL::previous() . "#myModal");


    }

    public function postQuestRegister (Request $request){

       if (Auth::user()['couple'] == 1){
           $this->validate($request, [
               'coming' => 'required',
               'staying' => 'required',
               'arrive' => 'required',
               'building' => 'required',
           ]);
       } else {
           $this->validate($request, [
               'staying' => 'required',
               'arrive' => 'required',
               'building' => 'required',
           ]);
       }
        $value = $request->all();
        $user = Auth::user();

        $user->quested = 1;
        $user->save();

        if (Auth::user()['couple'] == 1){

            $coming = $value['coming'] === 'coming' ? 1 : 0;

            DB::table('couple')
                ->where('couple_id', $user->id)
                ->update(['ccoming' => $coming]);
        }

        $arrive = $value['arrive'];
        $staying = $value['staying']=== 'staying' ? 1 : 0;
        $alergi = $value['alergi'];
        $share = $value['building'] === 'yes' ? 1 : 0;
        $message = $value['message'];

        DB::table('quest')->insert([
            ['quest_id' => $user->id, 'dateArrive' => $arrive, 'staying' => $staying, 'allergi' => $alergi, 'share' => $share, 'commens' => $message]
        ]);


        if (isset($value['alc'])){
            $alcho = (array)$value['alc'];

            foreach ($alcho as $drink){

                switch ($drink){
                    case 'Beer':
                        $count = DB::table('alcohol')->select('statistics')
                            ->where('alc_name', 'Beer')
                            ->first();

                        $count = $count->statistics;

                        $count += 1;

                        DB::table('alcohol')
                            ->where('alc_name', 'Beer')
                            ->update(['statistics' => $count]);

                        DB::table('alc_user')->insert([
                            ['alcohol' => 0, 'user' => $user->id]
                        ]);
                        break;
                    case 'Vodka':
                        $count = DB::table('alcohol')->select('statistics')
                            ->where('alc_name', 'Vodka')
                            ->first();
                        $count = $count->statistics;
                        $count += 1;

                        DB::table('alcohol')
                            ->where('alc_name', 'Vodka')
                            ->update(['statistics' => $count]);

                        DB::table('alc_user')->insert([
                            ['alcohol' => 1, 'user' => $user->id]
                        ]);
                        break;
                    case 'Wine':
                        $count = DB::table('alcohol')->select('statistics')
                            ->where('alc_name', 'Wine')
                            ->first();
                        $count = $count->statistics;
                        $count += 1;

                        DB::table('alcohol')
                            ->where('alc_name', 'Wine')
                            ->update(['statistics' => $count]);

                        DB::table('alc_user')->insert([
                            ['alcohol' => 2, 'user' => $user->id]
                        ]);
                        break;
                    case 'Cognac':
                        $count = DB::table('alcohol')->select('statistics')
                            ->where('alc_name', 'Cognac')
                            ->first();
                        $count = $count->statistics;
                        $count += 1;

                        DB::table('alcohol')
                            ->where('alc_name', 'Cognac')
                            ->update(['statistics' => $count]);

                        DB::table('alc_user')->insert([
                            ['alcohol' => 3, 'user' => $user->id]
                        ]);
                        break;
                }
            }
        }
       return redirect()->back();

    }
}
