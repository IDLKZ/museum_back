<?php

namespace App\Traitors;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileUploader
{

    protected $audioAttributes = ["audio_ru","audio_kz","audio_en","audio_de","audio_fr","audio_es","audio_tr"];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){

        });

        self::created(function($model){

        });

        self::updating(function($model){
        });

        self::updated(function($model){

        });

        self::deleting(function($model){
            $model->removeFile('image');
            $model->removeAudio();
        });

        self::deleted(function($model){

        });
    }

    public static function add($fields)
    {
        $post = new static;
        $post->fill($fields);
        $post->save();
        return $post;
    }

    public function edit($fields, $path = null)
    {
        if($path !== null){
            $fields[$path] = $this->$path;
        }
        $this->fill($fields);
        $this->save();
    }

    public function remove($path)
    {
        $this->removeFile($path);
        $this->delete();
    }

    public function removeFile($path)
    {
        if($this->$path != null)
        {
            if (Storage::exists('uploads/' . $this->$path)){
                Storage::delete('uploads/' . $this->$path);
            }
        }
    }

    public function uploadFile($file, $path)
    {
        if($file == null) { return; }
        $this->removeFile($path);
        $filename = Str::random(10) . '.' . $file->extension();
        $file->storeAs('uploads', $filename);
        $this->$path = $filename;
        $this->save();
    }

    public function getFile($path)
    {
        if($this->$path == null)
        {
            return '/images/no-image.png';
        }
        else{
            return '/uploads/' . $this->$path;
        }

    }

    public function uploadAudio($request){
        foreach($this->audioAttributes as $audio){
            if($request[$audio] != null){
                $this->uploadFile($request[$audio],$audio);
            }
        }
    }

    public function removeAudio()
    {
        foreach ($this->audioAttributes as $path){
            if($this[$path] != null)
            {
                if (Storage::exists('uploads/' . $this[$path])){
                    Storage::delete('uploads/' . $this[$path]);
                }
            }
        }

    }


}
