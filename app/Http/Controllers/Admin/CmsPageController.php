<?php

namespace App\Http\Controllers\Admin;

use App\Models\CmsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Support\Facades\Session;

class CmsPageController extends Controller
{

    public function index()
    {
        Session::put('page', 'cms-pages');
        $cmsPageData = CmsPage::get();
        return view('admin.cms-page.index', compact('cmsPageData'));
    }

    public function leads()
    {
        $leads = Lead::get();
        return view('admin.leads.index', compact('leads'));
    }


    public function create()
    {
        return view('admin.cms-page.create');
    }


    public function store(Request $request)
    {
       return $request->all();
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }



    public function update(Request $request, string $id)
    {
        //
    }
    public function updateCmsPagesStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            CmsPage::where('id', $data['page_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'page_id' => $data['page_id']]);
        }
    }


    public function destroy(string $id)
    {
        //
    }
}
