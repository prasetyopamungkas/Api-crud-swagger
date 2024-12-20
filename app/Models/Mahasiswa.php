<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *   schema="MahasiswaListResponse",
 *   type="object",
 *   @OA\Property(
 *     property="data",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/Mahasiswa")
 *   )
 * )
 */
/**
 * @OA\Schema(
 *   schema="MahasiswaRequest",
 *   type="object",
 *   required={"nim", "nama", "jurusan"},
 *   @OA\Property(
 *     property="nim",
 *     type="string",
 *     description="NIM mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="nama",
 *     type="string",
 *     description="Nama mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="alamat",
 *     type="string",
 *     description="Alamat mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="tanggal_lahir",
 *     type="date",
 *     description="Tanggal Lahir mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="jurusan",
 *     type="string",
 *     description="Jurusan mahasiswa"
 *   )
 * )
 */

/**
 * @OA\Schema(
 *   schema="MahasiswaResponse",
 *   type="object",
 *   @OA\Property(property="id", type="integer", description="ID mahasiswa"),
 *   @OA\Property(property="nim", type="string", description="NIM mahasiswa"),
 *   @OA\Property(property="nama", type="string", description="Nama mahasiswa"),
 *   @OA\Property(property="alamat", type="string", description="Alamat mahasiswa"),
 *   @OA\Property(property="tanggal_lahir", type="date", description="Tanggal Lahir mahasiswa"),
 *   @OA\Property(property="jurusan", type="string", description="Jurusan mahasiswa")
 *   
 * )
 */

/**
 * @OA\Schema(
 *   schema="MahasiswaUpdateRequest",
 *   type="object",
 *   required={"nim", "nama", "jurusan"},
 *   @OA\Property(
 *     property="nim",
 *     type="string",
 *     description="NIM mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="nama",
 *     type="string",
 *     description="Nama mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="alamat",
 *     type="string",
 *     description="Alamat mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="tanggal_lahir",
 *     type="date",
 *     description="Tanggal Lahir mahasiswa"
 *   ),
 *   @OA\Property(
 *     property="jurusan",
 *     type="string",
 *     description="Jurusan mahasiswa"
 *   )
 * )
 */

 /**
 * @OA\Schema(
 *   schema="DeleteMahasiswaResponse",
 *   type="object",
 *   @OA\Property(property="message", type="string", description="Pesan tentang status penghapusan mahasiswa")
 * )
 */

 /**
 * @OA\Schema(
 *   schema="Mahasiswa",
 *   type="object",
 *   @OA\Property(property="id", type="integer", description="ID mahasiswa"),
 *   @OA\Property(property="nim", type="string", description="NIM mahasiswa"),
 *   @OA\Property(property="nama", type="string", description="Nama mahasiswa"),
 *   @OA\Property(property="alamat", type="string", description="Alamat mahasiswa"),
 *   @OA\Property(property="tanggal_lahir", type="date", description="Tanggal Lahir mahasiswa"),
 *   @OA\Property(property="jurusan", type="string", description="Jurusan mahasiswa")
 * )
 */

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['nim', 'nama', 'alamat', 'tanggal_lahir', 'jurusan'];
}
