<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    // LIST
    public function index()
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    // CREATE FORM
    public function create()
    {
        return view('company.create');
    }

    // STORE (SAVE COMPANY + LOGO)
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'location' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // LOGO UPLOAD
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');

            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('public/company', $filename);

            $data['logo'] = 'company/' . $filename;
        }

        Company::create($data);

        return redirect()
            ->route('company.index')
            ->with('success', 'Company created successfully');
    }

    // EDIT FORM
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('company.edit', compact('company'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            'company_name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'location' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // UPDATE LOGO
        if ($request->hasFile('logo')) {

            // delete old logo
            if ($company->logo && Storage::exists('public/' . $company->logo)) {
                Storage::delete('public/' . $company->logo);
            }

            $file = $request->file('logo');
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            $file->storeAs('public/company', $filename);

            $data['logo'] = 'company/' . $filename;
        }

        $company->update($data);

        return redirect()
            ->route('company.index')
            ->with('success', 'Company updated successfully');
    }

    // DELETE
    public function destroy($id)
    {
        $company = Company::findOrFail($id);

        // delete logo
        if ($company->logo && Storage::exists('public/' . $company->logo)) {
            Storage::delete('public/' . $company->logo);
        }

        $company->delete();

        return redirect()
            ->route('company.index')
            ->with('success', 'Company deleted successfully');
    }
}