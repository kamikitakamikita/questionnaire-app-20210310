<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Http\Requests\QuestionnaireRequest;

class QuestionnaireController extends Controller
{
    public function index()
    {
        return view('questionnaires.index');
    }

    public function create(QuestionnaireRequest $request)
    {
        // インスタンス作成
        $questionnaire = new Questionnaire();

        // 値取得
        $questionnaire->username = $request->username;
        $questionnaire->age = $request->age;
        $questionnaire->gender = $request->gender;
        // 物件種別をカンマ区切りにして取得
        $questionnaire->property_type = implode(",", $request->property_type);
        $questionnaire->remarks = $request->remarks;

        // insert
        $questionnaire->save();

        // 回答完了ページを返す
        return view('questionnaires.completed');
    }
}