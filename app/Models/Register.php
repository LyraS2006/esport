<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama', 'nisn', 'jurusan', 'kelas', 'jenis_kelamin','game', 'password'];
    protected $guarded = "id";
}
