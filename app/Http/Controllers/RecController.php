<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecRequest;
use App\Models\Rec;
use App\Models\Post;

class RecController extends Controller
{
    public function Posts() {
        $posts = Post::orderBy("created_at","Desc")->paginate(3);
        return view('posts',['data'=> $posts]);
    }

    public function submit(RecRequest $req) {
        $rec = new Post();
        $rec->title = $req->input('title');
        $rec->preview = $req->input('preview');
        $rec->description = $req->input('description');
        $rec->thumbnail = $req->input('thumbnail');

        $rec->save();
        return redirect()->route('rec')->with('success','Запись успешно сохранена');
    }

    public function showOneRecord ($id) {
        /* $rec = new Rec;
        return view('one-record',['data'=>$rec->find($id)]); */
        $rec = Post::findOrFail($id);
        return view('one-record',['data'=> $rec]);
    }

    public function updateRecord ($id) {
        $rec = new Post;
        return view('update-record',['data'=>$rec->find($id)]);
    }

    public function updateRecordSubmit($id, RecRequest $req) {
        $rec = Post::find($id);
        $rec->title = $req->input('title');
        $rec->preview = $req->input('preview');
        $rec->description = $req->input('description');

        $rec->save();
        return redirect()->route('rec-data-one', $id)->with('success','Запись успешно обновлена');
    }

    public function deleteRecord($id) {
        Post::find($id)->delete();
        return redirect()->route('rec-data', $id)->with('success','Запись успешно удалена');
    }

}
