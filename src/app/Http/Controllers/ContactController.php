<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'category_id', 'detail']);
        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];
        $category = Category::find($contact['category_id']);
        $contact['category_name'] = $category ? $category->name : '未選択';

        return view('confirm', compact('contact'));
    }


    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'category_id', 'detail']);
        $contact['tel'] = $contact['tel1'] . $contact['tel2'] . $contact['tel3'];
        Contact::create($contact);

        return view('thanks');
    }

}
