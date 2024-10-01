<?php

namespace App\Services;

use App\Models\Guest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;
use Exception;

class GuestService
{
    public function dataTable()
    {
        $data = Guest::latest()->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s');
            })
            ->editColumn('updated_at', function ($row) {
                return Carbon::parse($row->updated_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s');
            })
            ->addColumn('link', function ($row) {
                $actionBtn = '';
                if (Gate::allows('read guests')) {
                    $actionBtn .= '<button type="button" name="edit" data-id="' . $row->id . '" data-url="' . route('invitation', ['to' => $row->slug]) . '" class="urlCopy btn btn-secondary btn-sm me-2"><i class="ti-clipboard"></i></button>';
                }

                return '<div class="d-flex">' . $actionBtn . '</div>';
            })
            ->addColumn('action', function ($row) {
                $actionBtn = '';
                if (Gate::allows('update guests')) {
                    $actionBtn .= '<button type="button" name="edit" data-id="' . $row->id . '" class="editGuest btn btn-warning btn-sm me-2"><i class="ti-pencil-alt"></i></button>';
                }
                if (Gate::allows('delete guests')) {
                    $actionBtn .= '<button type="button" name="delete" data-id="' . $row->id . '" class="deleteGuest btn btn-danger btn-sm"><i class="ti-trash"></i></button>';
                }
                return '<div class="d-flex">' . $actionBtn . '</div>';
            })
            ->rawColumns(['action', 'link'])
            ->make(true);
    }

    // store
    public function store(array $data)
    {
        try {

            // create Guest
            $guest = Guest::create($data);

            return [
                'success' => true,
                'message' => 'Data is saved successfully.',
                'Guest' => $guest
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to save data: ' . $e->getMessage()
            ];
        }
    }


    // update Guest
    public function update($id, $requestData)
    {
        try {
            // check Guest
            $guest = Guest::findOrFail($id);

            // update Guest
            $guest->update([
                'name' => $requestData['name'],
            ]);

            return [
                'success' => true,
                'message' => 'Data berhasil diperbarui.'
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function destroy(Guest $guest)
    {
        try {
            // delete Guest
            $guest->delete();

            return [
                'success' => true,
                'message' => 'The data was successfully deleted.'
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to delete data: ' . $e->getMessage()
            ];
        }
    }
}
