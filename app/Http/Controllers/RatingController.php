<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating; // Assuming you have a Rating model
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function submitRating(Request $request)
    {
        // Validate the submitted data
        $validatedData = $request->validate([
            'booking_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:200',
        ]);

        // Create a new Rating instance and save it to the database
        $rating = new Rating();
        $rating->booking_id = $validatedData['booking_id'];
        $rating->rating = $validatedData['rating'];
        $rating->comment = $validatedData['comment'];
        $rating->save();

        // Calculate the average rating for the item
        $averageRating = Rating::where('booking_id', $validatedData['booking_id'])
            ->avg('rating');

        // Return the average rating as a response (you can customize the response as needed)
        return response()->json(['average_rating' => $averageRating]);
    }







    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:200',
            // Add validation rules for other form fields
        ]);


        // To enforce user authentication
        // $this->middleware('auth');

        // To access the authenticated user's email
        $email = $request->user()->email;

        // Process the form data and store it in the database
        // You can access the form data using $request->input('field_name')

         // Create a new Rating instance and save it to the database
        $rating = new Rating();
        $rating->email = $validatedData['email'];
        $rating->rating = $validatedData['rating'];
        $rating->comment = $validatedData['comment'];
        $rating->save();

        $Ratings=Rating::all();

        // Return a response (optional)
        return response()->json(['message' => 'Rating submitted successfully']);
    }

    public function fetchData()
    {
        // Fetch the rating data from the database
        $ratings = Rating::all();

        // Return the rating data as a JSON response
        return response()->json($ratings);
    }



    public function paginate(Request $request)
    {   
        $page = $request->input('page');
        $ratingObj = new Rating();
        $ratings = Rating::join('users', 'users.email', '=', 'ratings.email')
        ->select('ratings.*', 'users.name as user_name','users.photo as user_photo')
        ->orderBy('ratings.id', 'desc')
        ->paginate(3, ['*'], 'page', $page);

        $averageRatings = Rating::select(
            DB::raw('CASE WHEN rating = 5 THEN "5" WHEN rating = 4 THEN "4" WHEN rating = 3 THEN "3" WHEN rating = 2 THEN "2" ELSE "1" END as rating_value'),
            DB::raw('avg(rating) as average')
            )
            ->groupBy('rating_value')
            ->get();


            $starRatingCounts = Rating::select('rating', DB::raw('count(*) as count'))
                ->groupBy('rating')
                ->orderBy('rating')
                ->get();

       
        
        return view('ratings.paginate', compact('ratings','averageRatings','starRatingCounts'));
    }



}
