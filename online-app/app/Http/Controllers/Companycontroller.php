<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'industry' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        
        $data = $request->only(['name','email','phone','city','industry']);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/company', $filename);

            $data['logo'] = 'company/'.$filename;
        }

        Company::create($data);

        return redirect()->route('company.index')
            ->with('success', 'Company created successfully');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'city' => 'nullable|string',
            'industry' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['name','email','phone','city','industry']);

        if ($request->hasFile('logo')) {

            if ($company->logo && Storage::exists('public/'.$company->logo)) {
                Storage::delete('public/'.$company->logo);
            }

            $file = $request->file('logo');
            $filename = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/company', $filename);

            $data['logo'] = 'company/'.$filename;
        }

        $company->update($data);

        return redirect()->route('company.index')
            ->with('success', 'Company updated successfully');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);

        if ($company->logo && Storage::exists('public/'.$company->logo)) {
            Storage::delete('public/'.$company->logo);
        }

        $company->delete();

        return redirect()->route('company.index')
            ->with('success', 'Company deleted successfully');
    }

    public function logoView($id)
    {
        $company = Company::findOrFail($id);
        return view('company.logo', compact('company'));
    }
}