<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Services;
use App\Models\post;
use Illuminate\Http\Request;
use App\Models\PostComment;
use App\Models\Question;
use App\Models\QuestionAnswer;
use Mail;

// use App\Models\QuestionAnswerLike;
// use App\Models\QuestionAnswerDislike;

use App\Models\QuestionAnswerLike;
use App\Models\QuestionAnswerDislike;

use App\Models\Rating;

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
// use App\Models\User;


class UserController extends Controller
{
    public function index(){

        // $postObj = new Post();
        // $posts = $postObj->join('categories','categories.id', '=', 'posts.category_id')
        // ->select('posts.*', 'categories.name as category_name')
        // ->where('posts.status', 1)
        // ->orderby('posts.id','desc')
        // ->get();
        
        $serviceObj = new Services();
        $services = $serviceObj->join('categories', 'categories.id', '=', 'services.category')
        ->join('users','users.id', '=', 'services.user_id')
        ->select('services.*', 'categories.name as category_name','users.name as user_name','users.photo as user_photo')
        ->orderBy('services.id', 'desc')
        ->get();

 
        
        

       


        
        $categories = Category::all();


        $ratingObj = new Rating();
        $ratings = Rating::join('users', 'users.email', '=', 'ratings.email')
        ->select('ratings.*', 'users.name as user_name','users.photo as user_photo')
        ->orderBy('ratings.id', 'desc')
        ->paginate(3);

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

               
        
        
        return view('user.index', compact('services','categories','ratings','averageRatings','starRatingCounts'));
    }

    public function why_halaljobs(){
        $categories = Category::all();
        return view('user.why_halaljobs',compact('categories'));
    }

    public function contact(){
        
        $categories = Category::all();
        return view('user.contact',compact('categories'));
    }


    public function sendSms(Request $request)
{
    $to_email = $request->input('recipient');
    $subject = $request->input('subject'); // Customize the subject as needed
    $body = $request->input('sms');
    $headers = ['From' => 'smimm432@gmail.com'];

    try {
        // Use Laravel's built-in mail functionality
        Mail::raw($body, function($message) use ($to_email, $subject, $headers) {
            
            $message->to($to_email)
                    ->subject($subject)
                    ->from($headers['From']);
        });

        return redirect()->back()->with('success', 'SMS successfully sent to ' . $to_email);
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to send SMS: ' . $e->getMessage());
    }
}



    public function single_post_view($id){

        // $postObj = new Post();

        // $post = $postObj->join('categories','categories.id', '=', 'posts.category_id')
        // ->select('posts.*', 'categories.name as category_name')
        // ->where('posts.id', $id)
        // ->first();

        $serviceObj = new Services();
        $services = $serviceObj->join('categories', 'categories.id', '=', 'services.category')
        ->select('services.*', 'categories.name as category_name')
        ->where('services.id', $id)
        ->first();



        $postOwner = $serviceObj->join('users','users.id', '=', 'services.user_id')
        ->select('services.*', 'users.name as user_name','users.photo as user_photo')
        ->where('services.id', $id)
        ->first();

        $commentObj = new PostComment();
        $categories = Category::all();

        $comments = $commentObj->join('users','users.id', '=', 'post_comments.user_id')
        ->select('post_comments.*', 'users.name as user_name','users.photo as user_photo')
        ->where('post_comments.post_id', $id)
        ->paginate(2);

        // $posts = Post::all()->where('status', 1)->sortByDesc('created_at');
        
        return view('user.single_post_view', compact('services','postOwner','comments','categories'));
    }

    public function filter_by_category($id){

        $postObj = new Post();
        $posts = $postObj->join('categories','categories.id', '=', 'posts.category_id')
        ->select('posts.*', 'categories.name as category_name')
        ->where('posts.status', 1)
        ->where('posts.category_id', $id)
        ->orderby('posts.id','desc')
        ->get();

        // $posts = Post::all()->where('status', 1)->sortByDesc('created_at');

        $categories = Category::all();

       
        return view('user.filter_by_category', compact('posts','categories'));

    }

    public function filter_by_project($id){

        $postObj = new Post();
        $posts = $postObj->join('categories','categories.id', '=', 'posts.category_id')
        ->select('posts.*', 'categories.name as category_name')
        ->where('posts.status', 1)
        ->where('posts.category_id', $id)
        ->orderby('posts.id','desc')
        ->get();

        // $posts = Post::all()->where('status', 1)->sortByDesc('created_at');

        $categories = Category::all();

       
        return view('user.filter_by_project', compact('posts','categories'));

    }

    public function comment_store(Request $request, $id){
        
        $data = [
            'post_id' => $id,
            'user_id' => auth()->user()->id,
            'comment' => $request->comment,
        ];



        PostComment::create($data);

        $notify = ['message' => 'Comment Added Successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
    }


    public function service_create(Request $request){


        $request->validate([
            'title'=>'required',
            'category_id' => 'required',
            'description' => 'required',
            'Location'    => 'required',
            'payment'     => 'required',
    
           ]);
           $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'category' => $request->category_id,
            'description' => $request->description,
            'Location'    => $request->Location,
            'payment'    => $request->payment,
            'status' => $request->status,
           ];
           if($request->hasfile('thumbnail')){
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $file ->move(public_path('post_thumbnails'),$filename);
            // Resize image
            $thumbnail = Image::make($file);
            $thumbnail->resize(600,360)->save(public_path('post_thumbnails/'.$filename));
            
            $data['thumbnail'] = $filename;
           }

           Services::create($data);
           return redirect()->back()->with('success','Post create successfully!');
        
        
        return view('service_create.create_service');
    }





    public function questions(){

        $questionObj = new Question();

        $questions = $questionObj->join('categories','categories.id', '=', 'questions.category_id')
        ->join('users','users.id', '=', 'questions.user_id')
        ->select('questions.*', 'categories.name as category_name', 'users.name as user_name', 'users.photo as user_photo')
        ->orderby('questions.id','desc')
        ->paginate(5);

        $categories = Category::all();
        return view('user.questions', compact('questions','categories'));
    }

    public function question_store(Request $request){

        $request->validate([
            'category_id' => 'required',
            'question' => 'required',
        ]);

        $data = [
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'question' => $request->question,
        ];

        Question::create($data);

        $notify = ['message'=>'Question Added Successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
    }


    public function question_delete($id){

        Question::find($id)->delete();

        $notify = ['message'=>'Question Deleted Successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);

    }

    public function question_answers($id){

        $questionObj = new Question();
        $answersObj = new QuestionAnswer();

        $question = $questionObj->join('categories','categories.id', '=', 'questions.category_id')
        ->join('users','users.id', '=', 'questions.user_id')
        ->select('questions.*', 'categories.name as category_name', 'users.name as user_name', 'users.photo as user_photo')
        ->where('questions.id', $id)
        ->first();

        $answers = $answersObj->join('users','users.id', '=', 'question_answers.user_id')
        ->select('question_answers.*', 'users.name as user_name', 'users.photo as user_photo')
        ->where('question_answers.question_id', $id)
        ->orderby('question_answers.id','desc')
        ->get();

       

        return view('user.question_answers',compact('question','answers'));
    }
    public function question_answer_store(Request $request, $id){


        $data = [
            'question_id' => $id,
            'user_id' => auth()->user()->id,
            'answer' => $request->answer, 
        ];
        QuestionAnswer::create($data);

        $notify = ['message'=>'Question Added Successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);

        
    }



    // public function question_answer_delete($id){

    //     QuestionAnswer::find($id)->delete();

    //     $notify = ['message'=>'Question Answer Deleted Successfully', 'alert-type' => 'success'];
    //     return redirect()->back()->with($notify);

    // }

    public function question_answer_delete($id)
    {
        $questionAnswer = QuestionAnswer::find($id);

        if ($questionAnswer) {
            $questionAnswer->delete();
            $notify = ['message' => 'Question Answer Deleted Successfully', 'alert-type' => 'success'];
        } else {
            $notify = ['message' => 'Question Answer not found', 'alert-type' => 'error'];
        }

        return redirect()->back()->with($notify);
    }


    // public function question_answer_like($id){

    //     $data = [
    //         'answer_id' => $id,
    //         'user_id' => auth()->user()->id
    //     ];

    //     QuestionAnswerLike::create($data);

    //     return redirect()->back();
    // }

    // public function question_answer_unlike($id){

    //     QuestionAnswerLike::where('answer_id', $id)->where('user_id', auth()->user()->id)->delete();

    //     return redirect()->back();
    // }


    public function checkEmailAvailability(Request $request)
    {
        $email = $request->input('email');

        // Check if the email exists in the database
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['available' => false]);
        }

        return response()->json(['available' => true]);
    }




// real time like dislike start

public function question_answer_like($id)
{
    $like = QuestionAnswerLike::where('answer_id', $id)->where('user_id', auth()->user()->id)->first();
    $dislike = QuestionAnswerDislike::where('answer_id', $id)->where('user_id', auth()->user()->id)->first();

    $likeCheck = QuestionAnswerLike::where('answer_id', $id)->where('user_id', auth()->user()->id)->exists();
    $dislikeCheck = QuestionAnswerDislike::where('answer_id', $id)->where('user_id', auth()->user()->id)->exists();
    

    if ($like) {
        // User has already liked, so remove the like
        $like->delete();
        
        
    } else {
        if($dislike){
            $dislike->delete();
        // User has not liked, so create a new like
        QuestionAnswerLike::create([
            'answer_id' => $id,
            'user_id' => auth()->user()->id
        ]);
    }else{
        QuestionAnswerLike::create([
            'answer_id' => $id,
            'user_id' => auth()->user()->id
        ]);
    }
    }

    // Get the updated like count
    $likeCount = QuestionAnswerLike::where('answer_id', $id)->count();
    $dislikeCount = QuestionAnswerDislike::where('answer_id', $id)->count();

    // Return the updated like count in a JSON response
    return response()->json(['likeCount' => $likeCount,'dislikeCount' => $dislikeCount,'likeCheck' => $likeCheck,'dislikeCheck' => $dislikeCheck]);
    
}

public function question_answer_dislike($id)
{
    $dislike = QuestionAnswerDislike::where('answer_id', $id)->where('user_id', auth()->user()->id)->first();
    $like = QuestionAnswerLike::where('answer_id', $id)->where('user_id', auth()->user()->id)->first();

    $likeCheck = QuestionAnswerLike::where('answer_id', $id)->where('user_id', auth()->user()->id)->exists();
    $dislikeCheck = QuestionAnswerDislike::where('answer_id', $id)->where('user_id', auth()->user()->id)->exists();

    if ($dislike) {
        // User has already disliked, so remove the dislike
        $dislike->delete();
    } else {
        if($like){
            $like->delete();
            QuestionAnswerDislike::create([
                'answer_id' => $id,
                'user_id' => auth()->user()->id
            ]);
        }else{
            // User has not disliked, so create a new dislike
            QuestionAnswerDislike::create([
                'answer_id' => $id,
                'user_id' => auth()->user()->id
            ]);
        }
        
    }

    // Get the updated dislike count
    $dislikeCount = QuestionAnswerDislike::where('answer_id', $id)->count();
    $likeCount = QuestionAnswerLike::where('answer_id', $id)->count();

    // Return the updated dislike count in a JSON response
    return response()->json(['dislikeCount' => $dislikeCount,'likeCount' => $likeCount,'likeCheck' => $likeCheck,'dislikeCheck' => $dislikeCheck]);
}

// real time like dislike end



public function reviewstore(Request $request){
    $review = new ReviewRating();
    $review->booking_id = $request->booking_id;
    $review->comments= $request->comment;
    $review->star_rating = $request->rating;
    $review->user_id = Auth::user()->id;
    $review->service_id = $request->service_id;
    $review->save();
    return redirect()->back()->with('flash_msg_success','Your review has been submitted Successfully,');
}



// public function paginate(Request $request)
//     {
//         $page = $request->input('page');

//         $postObj = new Post();
//         $posts = $postObj->join('categories','categories.id', '=', 'posts.category_id')
//             ->select('posts.*', 'categories.name as category_name')
//             ->where('posts.status', 1)
//             ->orderBy('posts.id','desc')
//             ->paginate(3, ['*'], 'page', $page);

//         return view('posts.paginate', compact('posts'));
//     }


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
