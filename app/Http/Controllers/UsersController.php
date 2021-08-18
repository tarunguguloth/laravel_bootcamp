<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllUsers(): JsonResponse
    {
        $users = DB::table('users')->get();
        return response()->json([
            'users'=>$users,
        ]);
    }

    public function getUserByID(int $id): JsonResponse
    {
        //
        $user = DB::table('users')->find($id);
        return response()->json([
            'user'=>$user,
        ]);
    }

    public function createUserByID(Request $request): JsonResponse
    {
        $firstname = \request('first_name');
        $lastname = \request('last_name');

        $data = array('first_name'=>$firstname,'last_name'=>$lastname);
        $id = DB::table('users')->insertGetId($data);
        return response()->json([
            'id'=>$id,
            'first_name'=>$firstname,
            'last_name'=>$lastname]);
    }

    public function delete(int $id): JsonResponse
    {
        DB::table('users')->delete($id);
        return response()->json([
            'message'=>"User deleted successfully",
        ]);
    }

}
