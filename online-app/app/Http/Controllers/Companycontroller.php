<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    // Show all companies
    public function index()
    {
        $companies = Company::latest()->paginate(4);
        return view('company.index', compact('companies'));
    }

    // Show create form
    public function create()
    {
        return view('company.create');
    }

    // Store company
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'industry' => 'required',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $logo = null;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('company', 'public');
        }

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'industry' => $request->industry,
            'logo' => $logo,
        ]);

        return redirect()->route('company.index')
                         ->with('success', 'Company Added Successfully');
    }

    // Show edit form
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('company.edit', compact('company'));
    }

    // Update company
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'industry' => 'required',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('logo')) {

            if ($company->logo && Storage::disk('public')->exists($company->logo)) {
                Storage::disk('public')->delete($company->logo);
            }

            $company->logo = $request->file('logo')->store('company', 'public');
        }

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->city = $request->city;
        $company->industry = $request->industry;

        $company->save();

        return redirect()->route('company.index')
                         ->with('success', 'Company Updated Successfully');
    }

    // Delete company
    public function destroy($id)
    {
        $company = Company::findOrFail($id);

        if ($company->logo && Storage::disk('public')->exists($company->logo)) {
            Storage::disk('public')->delete($company->logo);
        }

        $company->delete();

        return redirect()->route('company.index')
                         ->with('success', 'Company Deleted Successfully');
    }

    // Show single company
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('company.show', compact('company'));
    }
}