<?php


if (!function_exists('find_role')) {
    function find_role($needle, $property, $objects)
    {
        foreach ($objects as $object) {
            if ($object->$property === $needle) {
                return $object;
            }
        }

        return false;
    }
}

if (!function_exists('find_role_array')) {
    function find_role_array($roles, $property, $objects)
    {
        foreach ($objects as $object) {
            if (in_array($object->$property, $roles)) {
                return $object;
            }
        }

        return false;
    }
}
