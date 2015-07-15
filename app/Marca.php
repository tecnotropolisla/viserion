<?php

namespace Troovami;


use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cat_marcas';
    //protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
      protected $fillable = ['str_marca','str_friendly_url','str_meta_descripcion','str_meta_keyword',
      'str_website','lng_idtipo','bol_eliminado','updated_at','created_at'];

    public function modelos() {
        return $this->hasMany('Modelo');
    }


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

}
