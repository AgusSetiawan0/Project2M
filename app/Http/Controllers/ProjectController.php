<?php

namespace App\Http\Controllers;

// add class
use Auth;
use App\Project;
use App\User;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //menampilkan project di halaman awal
    public function welcome()
    {
      $projects = Project::all();
      return view('welcome', compact('projects'));
    }
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi saat create project
        $this->validate($request, [
            'judul' => 'required|min:3',
            'dibuat' => 'required|date|before:ditutup',
            'ditutup' => 'required|date|after:dibuat',
            'deskripsi' => 'required|min:10',
            'slot' => 'required|min:1|max:100',
            'jumlah_uang' => 'required',
            'featured_image' => 'required|mimes:jpeg,jpg,png|max:5000kb',
        ]);

        // gambar
        $fileName = time() . '.png';
        $request->file('featured_image')->storeAs('public/gambar', $fileName);

        //slug
        $slug = str_slug($request->judul, '-');

        if(Project::where('slug',$slug)->first() !=null) {
            $slug = $slug . '-' .time();
        }

        $projects = Project::create([
            'judul' => $request['judul'],
            'slug' => $slug,
            'dibuat' => $request['dibuat'],
            'ditutup' => $request['ditutup'],
            'deskripsi' => $request['deskripsi'],
            'slot' => $request['slot'],
            'jumlah_uang' => $request['jumlah_uang'],
            'user_id' => Auth::user()->id,
            'featured_image' => $fileName,
            // 'uang_per_slot' => $request['jumlah_uang'] / $request['slot'],
        ]);

        return redirect('projects')->with('msg', 'project berhasil di submit!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug',$slug)->first();
        // menampilkan slot di single
        // $slots = Slot::all()->where('nama_project',$slug);
        if(empty($project)) abort (503);
        // , compact('slots') 
        return view('projects.single', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
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

        $project = Project::findOrFail($id);
        $fileName = time() . '.png';
        $request->file('featured_image')->storeAs('public/gambar', $fileName);
        if($project->isOwner()){
            $project->update([
                'judul' => $request['judul'],
                'dibuat' => $request['dibuat'],
                'ditutup' => $request['ditutup'],
                'deskripsi' => $request['deskripsi'],
                'slot' => $request['slot'],
                'jumlah_uang' => $request['jumlah_uang'],
                'featured_image' => $fileName,
                // 'uang_per_slot'=> $request['jumlah_uang'] / $request['slot'],
            ]);
        }else{
            abort('500');
        }

        return redirect()->route('projects.show',['project'=>$project->id])->with('msg', 'project berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if($project->isOwner())
            $project->delete();
        else abort('500');
        return redirect('projects')->with('msg', 'project berhasil di Hapus!');
    }
}
