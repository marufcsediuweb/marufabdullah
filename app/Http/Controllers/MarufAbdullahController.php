<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarufAbdullahController extends Controller
{
    public function homepage() {
        // Displaying Home Page View
        return view('FrontendView.homepage');
    }
    public function agencyPage() {
        // Displaying Agency Page View
        return view('FrontendView.agency');
    }
    public function portfolio() {
        // Displaying Agency Page View
        return view('FrontendView.portfolio');
    }
    public function linkNodes() {
        // Displaying  Navigate Page View
        return view('FrontendView.link_nodes');
    }
    public function contactPage() {
        // Displaying Contact Page View
        return view('FrontendView.contact');
    }
    public function privacyPage() {
        // Displaying Privacy Page View
        return view('FrontendView.privacypolicy');
    }
    public function refundPage() {
        // Displaying Refund Page View
        return view('FrontendView.refundpolicy');
    }

}
