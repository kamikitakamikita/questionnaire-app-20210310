<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;

class DashboardsController extends Controller
{
    public function index()
    {
        // ID、ユーザー名、登録日を取得
        $userlists = Questionnaire::get(['id', 'username', 'created_at']);

        return view('dashboards.index', [
            'userlists' => $userlists,
        ]);
    }

    public function show(string $id)
    {
        // ユーザーidをキーとしてレコードを取得
        $questionnaires = Questionnaire::findOrFail($id);

        return view('dashboards.show', [
            'questionnaires' => $questionnaires
        ]);
    }
}
