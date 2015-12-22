<?php

function livestorage_arrayMapRecursive($callback, $array) 
{
    foreach ($array as $key => $value) {
        if (is_array($array[$key])) {
            $array[$key] = livestorage_arrayMapRecursive($callback, $array[$key]);
        }
        else {
            $array[$key] = call_user_func($callback, $array[$key]);
        }
    }
    return $array;
}

function livestorage_password($password = null)
{
    $salt = config('livestorage.salt');
    if ($password == null) $password = str_random(5);
    
    return sha1(str_replace('__password__', $password, $salt));
}

function livestorage_dateToShow($date = null)
{
    if ($date == null) $date = \Carbon::now()->format('Y-m-d');
    $date = \Carbon::createFromFormat('Y-m-d', $date);
    return $date->format(config('livestorage.phpdateformat'));
}

function livestorage_dateTimeToShow($date)
{
    $date = \Carbon::createFromFormat('Y-m-d H:i:s', $date);
    return $date->format(config('livestorage.phpdatetimeformat'));
}

function livestorage_dateToDB($date)
{
    $date = \Carbon::createFromFormat(config('livestorage.phpdateformat'), $date);
    return $date->toDateString();
}

function livestorage_dateTimeToDB($date)
{
    $date = \Carbon::createFromFormat(config('livestorage.phpdateformat'), $date);
    return $date->toDateTimeString();
}

function livestorage_isRound($value)
{
    if (!is_numeric($value)) return false;
    return floor($value) == $value;
}

function livestorage_round($value, $decimal = ',')
{
    $value = livestorage_isRound($value) ? floor($value) : (!is_numeric($value) ? $value : floatval($value));   
    return preg_replace('/\./', $decimal, $value); 
}

function livestorage_theme($theme = null)
{
    if ($theme == null) return config('livestorage.theme');
    
    config(['livestorage.theme' => $theme]);
}

function livestorage_getThemeView($file = 'template')
{
    $theme = config('livestorage.theme');
    return "themes.{$theme}.{$file}";
}

function livestorage_asset($location = '')
{
    $location = (('' == $s = config('livestorage.subfolder')) ? '' : '/'.$s).'/'.$location;
    // return (Request::secure()) ? secure_asset($location) : asset($location);

    return $location;
}

function livestorage_themeAsset($location = '')
{
    $subfolder = ('' == $s = config('livestorage.subfolder')) ? '' : $s.'/';
    $location =  '/'.$subfolder.'themes/'.config('livestorage.theme').'/'.$location;
    // return (Request::secure()) ? secure_asset($location) : asset($location);

    return $location;
}

function livestorage_alphaToNumber($dest)
{
    if ($dest)
        return ord(strtolower($dest)) - 96;
    else
        return 0;
}

function livestorage_toCurrency($num, $str = 'Rp. ')
{
    $num = intval(preg_replace('/,.*|[^0-9]/', '', ceil($num)));
    return $str.strrev(implode('.',str_split(strrev(strval($num)),3)));
}

function livestorage_activeMenu($page, $thePage)
{
    if ($page == $thePage) return 'active';
}