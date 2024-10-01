<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use App\Services\GuestService;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    protected $guestService;

    public function __construct(
        GuestService $guestService,
    ) {
        // $this->middleware('permission:read guests');
        // $this->middleware('permission:create guests')->only(['create', 'store']);
        // $this->middleware('permission:update guests')->only(['edit', 'update']);
        // $this->middleware('permission:delete guests')->only(['destroy']);
        $this->guestService = $guestService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            return $this->guestService->dataTable();
        }

        return view('pages.admin.guest.index', [
            'title' => 'Guests'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guest = new Guest();

        return view('pages.admin.guest.form', compact('guest'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->all();
        $result = $this->guestService->store($data);

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        return view('pages.admin.guest.form', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only('name');

        $response = $this->guestService->update($id, $data);

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        $result = $this->guestService->destroy($guest);

        return response()->json($result);
    }
}
