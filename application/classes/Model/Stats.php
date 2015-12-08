<?php defined('SYSPATH') OR die('No Direct Script Access');
/**
* Создаем функции для работы с redis и
* статистику просмотров.
*
* @author Ivan Zhuravlev
*/
Class Model_Stats extends Model
{
    const ARTICLE = 1;
    public $redis;


    public function __construct()
    {
        $this->redis = Controller_Base_preDispatch::_redis();
    }

    /*
    * Если статистики с такими параметрами нет, то 
    * создает ее.
    * Если есть, то инкрементирует (увеличивает на 1).
    */
    public function hit($type, $id, $time)
    {
        $model = new Model_Stats;

        $key = self::getKey($type, $id, $time);

        $model->redis->incr($key);
    }

    /*
    * Форматирует ключ для статистики.
    * Принимает на вход тип статистики, цель (то, к чему она применяется) и дату.
    * Возвращает ключ.
    */
    public function getKey($type, $id, $time)
    {
        $key = 'stats:' . $type . ':target:' . $id . ':time:' . $time;

        return $key;
    }

    public function get($type, $id, $time)
    {
        $model = new Model_Stats;

        $key = self::getKey($type, $id, $time);

        $views = $model->redis->get($key); 

        return $views;
    }
}