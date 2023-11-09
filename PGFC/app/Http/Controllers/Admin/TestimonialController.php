<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Http\Requests\Admin\TestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all(); // Mengambil semua testimonial dari database
        return view('pages.admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('pages.admin.testimonials.create');
    }

    public function store(TestimonialRequest $request)
    {
        $testimonial = new Testimonial;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/testimonials', $imageName);

            $testimonial->photo = 'storage/admin/testimonials/' . $imageName;
        }

        $testimonial->name = $request->input('name');
        $testimonial->position = $request->input('position');
        $testimonial->rate = $request->input('rate');
        $testimonial->description = $request->input('description');

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('pages.admin.testimonials.edit', compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/testimonials', $imageName);

            $testimonial->photo = 'storage/admin/testimonials/' . $imageName;
        }

        $testimonial->name = $request->input('name');
        $testimonial->position = $request->input('position');
        $testimonial->rate = $request->input('rate');
        $testimonial->description = $request->input('description');

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial berhasil dihapus.');
    }
}
