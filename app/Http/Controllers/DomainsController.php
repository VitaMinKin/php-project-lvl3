<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;


class DomainsController extends Controller
{
    public function index()
    {
        return view('domains.index');
    }

    public function store(Request $request)
    {
        $rawDomainName = $request->input('domain.name');
        $domainName = parse_url($rawDomainName, PHP_URL_HOST);
        $validationDatas = ['name' => $domainName];

        $rules = [ //добавить unique для миграции в эту таблицу!
            "name" => "required|unique:domains,name"
        ];

        $validator = Validator::make($validationDatas, $rules);

        if ($validator->fails())
        {
            foreach ($validator->errors()->all() as $error) {
                flash($error)->error();
            }

            return redirect()->route('domains.index')->withInput();
        }

        DB::table('domains')->insert([
            'name' => $domainName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->route('domains.id');
    }

    public function showDomain($id)
    {
        $domain = DB::table('domains')->where('id', $id)->first();

        return view('domains.domain', ['domain' => $domain]);
    }

    public function showAllDomains()
    {
        $domains = DB::table('domains')->paginate(10);

        return view('domains.showAll', ['domains' => $domains]);
    }

}
