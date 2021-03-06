<?php
namespace Core3\Interfaces;

/**
 * Определяет возможность кастомного удаления для стандартных таблиц
 */
interface Delete {

    /**
     *
     * @param string $resource_name
     * @param string $id
     *
     * @return bool|array
     * В случае возврата массива, удаление считается успешным, но автоматическое перенаправление не происходит
     * Возвращаемый массив может содержать ключи 'alert','loc'
     * 'alert' - сообщение, которое отобразится после операции удаления (в виде алерта)
     * 'error' - сообщение, которое отобразится после операции удаления (в красной рамочке, над таблицей)
     * 'loc' - адрес, который откроется после операции удаления
     * Если возвращено true, то будет считаться, что вы самостоятельно удалили нужный объект
     * Если возвращено false будет считаться, что нужно применить стандартную процедуру удаления
     */
    public function delete($resource_name, $id);
}