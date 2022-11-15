<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class HelloController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => 'Dashboard',
        ]);
    }

    public function create()
    {
        return view('create', [
            'title' => 'Create',
        ]);
    }

    public function edit($id)
    {
        $datas = Activity::where('id', $id)->first();

        return view('edit', [
            'title' => 'Edit',
        ])->with('datas', $datas);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $filterResult = Activity::where('name_activity', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }

    public function storeActivity(Request $request)
    {
        $request->validate([
            'name_activity' => 'required',
        ]);

        Activity::create($request->all());

        return redirect('/')
            ->with('success','Create Activity Successfully!');
    }

    public function history()
    {
        $datas = Activity::get();

        return view('history', [
            'title' => 'History',
        ])
        ->with('datas', $datas);
    }

    public function update(Request $request, $id)
    {
        Activity::where('id', $id)->update([
            'name_activity' => $request->name_activity,
        ]);

        return redirect()->route('history')
                        ->with('update', 'Update Successfully!');
    }

    public function delete($id)
    {
        Activity::where('id', $id)->delete();

        return redirect()->route('history')
                        ->with('delete', 'Delete Successfully!');
    }



}
