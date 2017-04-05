<?php

namespace Myrtle\Core\Docks;

class SettingsDock extends Dock
{
    /**
     * Description for Dock
     *
     * @var string
     */
    public $description = 'Settings system';

    /**
     * List of config file paths to be loaded
     *
     * @return array
     */
    public function configPaths()
    {
        return [
            'docks.' . self::class => dirname(__DIR__, 2) . '/config/docks/settings.php',
            'abilities' => dirname(__DIR__, 2) . '/config/abilities.php',
        ];
    }

    /**
     * List of migration file paths to be loaded
     *
     * @return array
     */
    public function migrationPaths()
    {
        return [
            dirname(__DIR__, 2) . '/database/migrations',
        ];
    }
}
