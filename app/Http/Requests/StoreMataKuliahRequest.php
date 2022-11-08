<?php

namespace App\Http\Requests;

use App\SchoolClass;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreMataKuliahRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => [
                'required'],
            'kode' => [
                'required'],
            'sks' => [
                'required'],
        ];
    }
}
