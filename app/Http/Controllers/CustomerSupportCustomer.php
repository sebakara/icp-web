<?php

namespace App\Http\Controllers;

use App\Models\Customer_Support;
use Illuminate\Http\Request;

class CustomerSupportCustomer extends Controller
{

    public function showMessageForm()
    {
        return view('admin.customer-support');
    }

    public function allMessages()
    {
        $messages = Customer_Support::all();
        return response()->json($messages);
    }

    public function createMessage(Request $request)
    {
        // Validation
        $request->validate([
            'Full_name' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255',
            'Subject' => 'required|string|max:255',
            'Message' => 'required|string|max:5000',
        ]);

        // Create Message
        $message = Customer_Support::create([
            'Full_name' => $request->input('Full_name'),
            'Email' => $request->input('Email'),
            'Subject' => $request->input('Subject'),
            'Message' => $request->input('Message'),
        ]);

        return response()->json($message);

       
    }

    public function findMessage($id)
    {
        $message = Customer_Support::findOrFail($id);
        return response()->json($message);
    }

    public function deleteMessage(Request $request)
    {
        $message = new Customer_Support();
        $message->destroy($request->input('id'));

        return redirect()->back()->with('success', 'Message Deleted successfully');
    }
}
