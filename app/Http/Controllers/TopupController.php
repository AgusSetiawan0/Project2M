<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Topup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TopupController extends Controller
{
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
	  {
	  	$user = Auth::user();
	    return view('topups.create', compact('user'));
	  }
      
      public function index()
      {
      	$topups = Topup::all();
        return view('topups.approve', compact('topups'));
      }
      
      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function top_up($uname)
      {
          return view('topup.create');
      }

    
      

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
          $this->validate($request, [
              'nama' => 'required|min:1',
              'nominal' => 'required',
              'bukti_image' => 'required|mimes:jpeg,jpg,png|max:5000kb',
          ]);

          $fileName = time() . '.png';
          $request->file('bukti_image')->storeAs('public/gambar_bukti', $fileName);
    

        $topups = Topup::create([
            'nama' => $request['nama'],
            'nominal' => $request['nominal'],
            'bank' => $request['bank'],
            'user_id' => Auth::user()->id,
            'bukti_image' => $fileName,
        ]); 

        

        return redirect('home')->withInfo('msg', 'Selamat, top up saldo berhasil dilakukan!, Admin akan mengecek, Harap menunggu konfirmasi Admin.');
      }

    public function edit($id)
	  {
	      $topups = Topup::all()->where('id', $id)->first();
	      return view('topups.edit', compact('topups', 'id'));
	  }

	  public function update(Request $request, $id)
	   {
	       switch($request->get('approve'))
	       {
            case 0:
               Topup::topuppone($id);
	               break;
	           case 1:
	               Topup::approve($id);

	               break;
	           case 2:
	               Topup::reject($id);
	               break;
	           default:    
	               break;
	       }
	       return redirect('topups');
	   }

}
