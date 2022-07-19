<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class NewsController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.news.index');
    }

    public function create(Request $request){
        // $category = Category::where('status','1')->get();
        // return view('admin.sub-category.edit',compact('category'));
        return view('admin.news.edit');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
        ]);
        // $user_id = Auth::user()->id;
        $news = new News;
        $news->name = $request->name;
        $news->description = $request->description;
        $news->status = isset($request->status) ? '1' : '0';
        // dd($category);
        $news->save();
        return redirect()->route('admin.news')->with('success', 'News created successfully.');
    }

    public function view(Request $request){
        $news = News::find($request->id);
        // return view('admin.sub-category');
        return view('admin.news.view',compact('news'));
    }

    public function edit(Request $request){
        $news_data = News::find($request->id);
        // $category = Category::where('status','1')->get();
        return view('admin.news.edit',compact('news_data'));
    }

    public function update(Request $request){
        $news = News::find($request->id);
        $news->name = $request->name;
        $news->description = $request->description;
        $news->status = isset($request->status) ? '1' : '0';
        $news->save();
        return redirect()->route('admin.news')->with('success', 'News Updated successfully.');
        // return view('admin.news');
    }

    public function destroy(Request $request){
        try {
            News::where('id', $request->id)->delete();
            return response()->json(['message' => 'News Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function NewsAjax(Request $request)
    {
        $news = News::orderBy('id', 'DESC')->get();

        $table = DataTables::of($news)
            ->editColumn('id', function ($news) {
                $id = $news->id;
                return $id;
            })
            ->editColumn('name', function ($news) {
                $name = $news->name;
                return $name;
            })
            // ->editColumn('email', function ($news) {
            //     $email = $news->email;
            //     return $email;
            // })
            // ->editColumn('otp', function ($news) {
            //     $otp = $news->otp;
            //     return $otp;
            // })
            // ->editColumn('emergency_status', function ($news) {
            //     $checked = ($news->emergency_status == '1') ? 'checked' : '';

            //     return  '<div class="form-check form-check-primary form-switch">
            //                 <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches2" id="status_' . $news->new_id . '" data-id="' . $news->new_id . '"   data-status="' . $news->emergency_status . '" />
            //             </div>';
            // })
            ->editColumn('status', function ($news) {
                $checked = ($news->status == '1') ? 'checked' : '';

                return  '<div class="form-check form-check-primary form-switch">
                            <input type="checkbox" name="status" ' . $checked . ' class="form-check-input  customSwitches" id="status_' . $news->id . '" data-id="' . $news->id . '"   data-status="' . $news->status . '" />
                        </div>';
            })
            ->editColumn('action', function ($news) {
                $view_route = route('admin.news.view', $news->id);
                $edit_route = route('admin.news.edit', $news->id);
                $delete_route = route('admin.news.destroy', $news->id);
                $html = '<a href="' . $view_route . '">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="' . $edit_route . '">
                            <i class="fa fa-edit "></i>
                        </a>
                        <a href="javascript:void(0)" class="deletenews" data-href="' . $delete_route . '">
                            <i class="fa fa-trash"></i>
                        </a>';
                return $html;
            })
            ->rawColumns(['status', 'action', 'emergency_status'])
            ->make(true);
        return $table;
    }
    public function statusChange(Request $request)
    {
        try {
            $news= News::find($request->id);
            if ($request->status == '1') {
                $status = '0';
                $message = 'News Disable Successfully.';
            } else {
                $status = '1';
                $message = 'News Enable Successfully.';

            }

            News::where('id', $request->id)->update(['status' => $status]);
           
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
