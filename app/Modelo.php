<?php

namespace Troovami;


use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tbl_modelos';
    //protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = ['name', 'email', 'password'];
      protected $fillable = ['str_modelo','blb_img_normal','blb_img_mini','blb_img360','lng_idadmin',
      'lng_idmarca','lng_idtipo_equipo','lng_idgama','str_friendly_url','str_title','str_meta_descripcion',
      'str_meta_keyword','bol_eliminado','updated_at','created_at'];


    public function marcas() {
        return $this->belongsTo('Marca', 'id');
    }

      /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];

}
