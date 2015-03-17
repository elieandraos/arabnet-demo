<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Response;
use App\News;

class NewsController extends Controller {

	protected $status_ok = 200;


	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = News::orderBy('created_at', 'DESC')->get();
		$data = [];
		foreach($news as $n)
		{
			array_push($data, [
				'title' => $n->title,
				'description' => substr($n->description, 0, 50)."...",
				'url' => route('showNews', $n->id)
			]);

		}
		return Response::json(['data' => $data], $this->status_ok);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
		News::Create($input);

		return redirect('/news');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$news = News::find($id);
		return Response::json(['data' => $news], $this->status_ok);

	}

}
