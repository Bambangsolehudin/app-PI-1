<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view('pages.admin.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto'=>'required|image|mimes:jpg,png|max:20048',
            'nama_barang'=>'required',
            'detail'=>'required',
        ]);
         

        // dd($request);

        $file = $request->file('foto');
        $filename = $file->getClientOriginalName();
        $request->file('foto')->move('static/dist/img/',$filename);
        $data = $request->all();
        $data['foto'] = 'static/dist/img/' .$filename;
        
        Barang::create($data);
        return redirect()->route('admin.index')->with('status','Data Barang berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('pages.admin.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'foto'=>'required|image|mimes:jpg,png|max:20048',
            
            'detail'=>'required'
        ]);

        if( $file = $request->file('foto'))
        {
            $request->validate([
                'foto'=>'required|image|mimes:jpg,png|max:20048',
            ]);

            $filename = $file->getClientOriginalName();
            $request->file('foto')->move('static/dist/img/',$filename);
            $img = 'static/dist/img/'.$filename;
        }else{
            // 
            $img = $request->tmp_image ;
        }


        $barang = Barang::find($id);

        if($request->input('nama_barang') == $barang->nama_barang){
            $request->validate([
                'nama_barang'=>'required',
            ]);
        }else{
            $request->validate([
                'nama_barang'=>'required|unique:barangs',
            ]);
        }

        $data = $request->all();
        $data['foto'] = $img;
        $barang->update($data);
        
        return redirect()->route('admin.index')->with('status','Data Barang berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('s')->with('status','Data Barang berhasil Dihapus');
    }


}
