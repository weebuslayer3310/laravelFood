<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendKeywordRequest;
use App\Models\Keyword;
use App\Models\Manufacturer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BackendManufacturerController extends Controller
{
    protected $folder = 'backend.manufacturer.';

    public function index()
    {
        $manufacturers = Manufacturer::orderByDesc('id')->get();

        $viewData = [
            'manufacturers' => $manufacturers
        ];

        return view($this->folder . 'index', $viewData);
    }

    public function store(Request $request)
    {
        $data               = $request->except('_token');
        $data['m_slug']     = Str::slug($request->m_name);
        $data['created_at'] = Carbon::now();
        $manufacturer       = Manufacturer::create($data);
        return redirect()->back();
    }

    public function edit($id)
    {
        $manufacturers = Manufacturer::orderByDesc('id')->get();
        $manufacturer   = Manufacturer::find($id);
        $viewData      = [
            'manufacturers' => $manufacturers,
            'manufacturer'   => $manufacturer
        ];

        return view($this->folder . 'update', $viewData);
    }

    public function update(Request $request, $id)
    {
        $data               = $request->except('_token');
        $data['m_slug']     = Str::slug($request->m_slug);
        $data['updated_at'] = Carbon::now();
        Manufacturer::find($id)->update($data);
        return redirect()->back();
    }

    public function delete($id)
    {
        \DB::table('manufacturers')->where('id', $id)->delete();
        return redirect()->route('get_backend.manufacturer.index');
    }
}
