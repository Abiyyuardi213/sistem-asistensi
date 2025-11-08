<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    protected $table = 'roles';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nama_role',
        'deskripsi',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($role) {
            if (!$role->id) {
                $role->id = (string) Str::uuid();
            }
        });
    }

    public static function createRole($data)
    {
        return self::create([
            'nama_role' => $data['nama_role'],
            'deskripsi' => $data['deskripsi'] ?? null,
            'status' => $data['status'] ?? true,
        ]);
    }

    public function updateRole($data)
    {
        $this->update([
            'nama_role' => $data['nama_role'],
            'deskripsi' => $data['deskripsi'] ?? $this->deskripsi,
            'status' => $data['status'] ?? $this->status,
        ]);
    }

    public function deleteRole()
    {
        return $this->delete();
    }

    public function toggleStatus()
    {
        $this->status = !$this->status;
        $this->save();
    }
}
