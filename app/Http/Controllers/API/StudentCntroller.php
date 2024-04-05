<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentCntroller extends Controller

{
    protected $student;

    public function __construct(){
        $this->student =new Student();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return json_encode($this->student->all());
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return json_encode($this->student->create($request->all()));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return json_encode($this->student->find($id));

    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = $this->student->find($id);
        $student->update($request->all());

        return json_encode($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = $this->student->find($id);
        return $student->delete();
    }

}
