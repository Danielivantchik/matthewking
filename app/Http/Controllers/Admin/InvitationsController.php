<?php

namespace App\Http\Controllers\Admin;

use App\Invite;
use App\Http\Controllers\Controller;

class InvitationsController extends Controller
{
    public function index()
    {
        $invitations = Invite::latest()->paginate();

        return view('admin.invitations.index', compact('invitations'));
    }

    public function destroy($id)
    {
        $invitation = Invite::findOrFail($id);

        $invitation->delete();

        return redirect()->back();
    }
}
