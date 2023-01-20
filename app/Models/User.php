<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Helpers\HasId;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\FileHelpers;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasId, FileHelpers;

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo_path',
        'is_admin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function settings() {
        return $this->hasMany(UserSetting::class);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getStatus() {
        return $this->is_admin;
    }

    public function getProfilePhotoPath() {
        return $this->profile_photo_path;
    }

    public function getProfilePhotoUrl() {
        return 'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=7F9CF5&background=EBF4FF';

    }

    public function updateProfilePhoto($photo) {
        $this->updateFile(
            $photo,
            $this->profile_photo_path,
            'profile_photo_path',
            'profile-photos'
        );
    }

    public function deleteProfilePhoto() {
        $this->deleteFile(
            $this->profile_photo_path,
            'profile_photo_path'
        );
    }

    public function toArray() {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'email' => $this->getEmail(),
            'profile_photo_path' => $this->getProfilePhotoUrl(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'is_admin' => $this->getStatus()
        ];
    }

}
