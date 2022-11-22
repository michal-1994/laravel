<?php

namespace App\Http\Controllers;

use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }

    // Show single listings
    public function show(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}
