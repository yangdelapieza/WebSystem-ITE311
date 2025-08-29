<?php
namespace Config;
use CodeIgniter\Config\BaseConfig;
class Migrations extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Enable/Disable Migrations
     * --------------------------------------------------------------------------
     *
     * Tells whether migrations should be enabled or not.
     * Should be true to enable migrations.
     */
    public bool $enabled = true;
    /**
     * --------------------------------------------------------------------------
     * Migrations Table
     * --------------------------------------------------------------------------
     *
     * This is the name of the table that will store the current migrations state.
     * When migrations runs it will store in this table which migration files
     * have already been run.
     */
    public string $table = 'secquntial_migrations';
    /**
     * --------------------------------------------------------------------------
     * Migrations Namespace
     * --------------------------------------------------------------------------
     *
     * This is the namespace that migration classes are expected to be in.
     * This allows multiple migration sets to be kept in different
     * namespaces.
     */ 
        /**
     * --------------------------------------------------------------------------
     * Timestamp Format
     * --------------------------------------------------------------------------
     *
     * The format of timestamp that migration files use.
     * You should set this to your desired format as expected by the framework.
     */
    public string $timestampFormat = 'YmdHis';
}
