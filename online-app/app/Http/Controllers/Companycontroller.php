<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

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
            'company_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Company::create([
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()
            ->route('company.index')
            ->with('success', 'Company added successfully.');
    }
    
    public function edit(string $id)
    {  
        $company = Company::findOrFail($id);

        return view('company.edit', compact('company'));
    }

    public function update(Request $request, string $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email|unique:companies,email,' . $company->id,
            'phone' => 'required',
            'address' => 'required',
        ]);

        $company->update($request->only([
    'company_name',
    'email',
    'phone',
    'address'
]));


        return redirect()
            ->route('company.index')
            ->with('success', 'Company updated successfully.');
    }

    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()
            ->route('company.index')
            ->with('success', 'Company deleted successfully.');
    }
}