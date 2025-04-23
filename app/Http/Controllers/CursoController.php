<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Course;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('courses'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(StoreCurso $request)
    {
        $course = Course::create($request->all());

        return redirect()->route('cursos.show', $course);
    }

    public function show(Course $course)
    {
        return view('cursos.show', ['curso' => $course]);
    }

    public function edit(Course $course)
    {
        return view('cursos.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:cursos,slug,' . $course->id,
            'description' => 'required|string',
            'category' => 'required|string|max:255',
        ]);

        $course->update($request->all());

        return redirect()->route('cursos.show', $course);
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('cursos.index');
    }
}
