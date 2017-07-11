<?php
namespace App\Http\Controllers;
use App\Jobs\ChangeLocale;
class HomeController extends Controller
{


  	public function __construct()
  	{
  		$this->middleware('auth');
  	}

	/**
	 * Display the home page.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	/**
	 * Change language.
	 *
	 * @param  App\Jobs\ChangeLocaleCommand $changeLocale
	 * @param  String $lang
	 * @return Response
	 */
	public function language( $lang,
		ChangeLocale $changeLocale)
	{
		$lang = in_array($lang, config('app.languages')) ? $lang : config('app.fallback_locale');
		$changeLocale->lang = $lang;
		$this->dispatch($changeLocale);
		return redirect()->back();
	}

}
