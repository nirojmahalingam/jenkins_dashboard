<?php namespace App\Http\Controllers;

class DashboardController extends Controller {

/**
 * Create a new controller instance.
 *
 * @return void
 */
	public function __construct()
	{

	}

/**
 * Show the application welcome screen to the user.
 *
 * @return View
 */
	public function index()
	{

		return view('dashboard');
	}

/**
 * Collect Build information over Jenkins Rest API
 *
 * @return $prepare_array
 */
  public function getData()
	{
    $prepare_array = array();
    $jenkins_url = \Config::get('app.jenkins_build_url');

    $json = file_get_contents($jenkins_url);
    $obj = json_decode($json);
    $count_jobs = count($obj->jobs);
    for($i = 0; $i <= $count_jobs-1; $i++) {
      $prepare_array[$i]['name'] = $obj->jobs[$i]->name;
      $json_builds = file_get_contents($obj->jobs[$i]->url.'api/json?pretty=true');
      $obj_builds = json_decode($json_builds);
			if(count($obj_builds->builds) > 0) {
				$prepare_array[$i]['latest_build'] = $obj_builds->builds[0]->number;
				$prepare_array[$i]['latest_build_status'] = $obj_builds->builds[0]->number;
				$prepare_array[$i]['healthReport']['color'] = $obj_builds->color;
				$prepare_array[$i]['healthReport']['iconUrl'] = $obj_builds->healthReport[0]->iconUrl;
				for($n = 1; $n <= 4; $n++) {
					if(count($obj_builds->builds) > 1) {
						$prepare_array[$i]['builds'][] = $obj_builds->builds[$n]->number;
					} else {
						$prepare_array[$i]['builds'][] = "-";
					}
	      }
			} else {
				$prepare_array[$i]['latest_build'] = "-";
				$prepare_array[$i]['latest_build_status'] = "-";
				$prepare_array[$i]['healthReport']['color'] = "-";
				$prepare_array[$i]['healthReport']['iconUrl'] = "-";
				$prepare_array[$i]['builds'][] = "-";
			}
    }
    return json_encode($prepare_array);
	}
}
