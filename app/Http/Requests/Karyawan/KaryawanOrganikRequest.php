<?php

namespace App\Http\Requests\Karyawan;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class KaryawanOrganikRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */ 
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return[
          
            'np' => ['required', Rule::unique('karyawans','np')->ignore($this->id)],
            'full_name' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'tanggal_masuk' => 'required|date',
            'tmt_jabatan'=> 'required|date',
            'id_jabatan' => 'required|integer',
            'unit_kerja_id' => 'required|integer',
            'pangkat_id' => 'required|integer',
            'id_grade_jabatan' => 'required|integer',
            'level_id' => 'max:10',
            'grade_pangkat'=>'required|integer'
         
        ];
    }
}
