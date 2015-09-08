<?php namespace app\transformer;

use User;
use League\Fractal\TransformerAbstract;
use Config;

class UserTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(User $user) {
        return [
            Config::get('constants.USER.ATTRS.USER_ID')                 => (int) $user->userId,
            Config::get('constants.USER.ATTRS.IDENTIFICATION_TYPE_ID')  => (int) $user->identificationTypeId,
            Config::get('constants.USER.ATTRS.NAME')                    => $user->name,
            Config::get('constants.USER.ATTRS.LASTNAME')                => $user->lastname,
            Config::get('constants.USER.ATTRS.USERNAME')                => $user->username,
            Config::get('constants.USER.ATTRS.IDENTIFICATION_NUMBER')   => $user->identificationNumber,
            Config::get('constants.USER.ATTRS.EMAIL')                   => $user->email,
            Config::get('constants.USER.ATTRS.BIRTHDATE')               => $user->birthdate,
            Config::get('constants.USER.ATTRS.GENDER')                  => $user->gender,
            Config::get('constants.ENTITY.CREATED_AT')                  => (string) $user->created_at,
        ];
    }
}
