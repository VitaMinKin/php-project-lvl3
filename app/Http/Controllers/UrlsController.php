<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;


class UrlsController extends Controller
{
    public function create()
    {
        return view('urls.create');
    }

    public function store(Request $request)
    {
        $rawDomainName = $request->input('url.name');
        $domainName = parse_url($rawDomainName, PHP_URL_HOST);
        $validationDatas = ['name' => $domainName];

        $rules = [ //добавить ограничение unique для миграции в эту таблицу!
            "name" => "required|unique:urls,name"
        ];

        $validator = Validator::make($validationDatas, $rules);

        if ($validator->fails())
        {
            foreach ($validator->errors()->all() as $error) {
                flash($error)->error();
            }

            return redirect()->route('urls.index')->withInput();
        }

        $newDomainId = DB::table('urls')->insertGetId([
            'name' => $domainName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('urls.show', ['id' => $newDomainId]);
    }

    public function show($id)
    {
        $url = DB::table('urls')->where('id', $id)->first();

        return view('urls.show', ['url' => $url]);
    }

    public function index()
    {
        $urls = DB::table('urls')->paginate(10);

        return view('urls.index', ['urls' => $urls]);
    }

}
