<?php

namespace App\Http\Controllers\Admin;

use App\Models\CmsPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Support\Facades\Session;

class LeadController extends Controller
{

    public function index()
    {
        $leads = Lead::get();
        return view('admin.leads.index', compact('leads'));
    }


    public function create()
    {

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


    public function destroy(string $id)
    {
        //
    }
}
