<?php

namespace Northwestern\SysDev\UI\Helpers;

class UserContextGetter
{
    public static function getUserContext()
    {
        $user = auth()->user();
        $ip = request()->getClientIp();
        $segment = null;

        if (! $user) {
            return;
        }

        $userClass = get_class($user);

        if (method_exists($userClass, 'segment')) {
            $segment = $user->segment();
        }


        return [
            'id' => $user->id,
            'username' => $user->username,
            'email' => $user->email,
            'ip' => $ip,
            'primaryAffiliation' => $user->primary_affiliation,
            'segment' => isset($segment) ? $segment : null,
        ];
    }
}
