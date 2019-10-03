<?php

namespace Statamic\Migrator\Commands;

use Statamic\Console\RunsInPlease;
use Statamic\Migrator\UserMigrator;

class MigrateUser extends Command
{
    use RunsInPlease;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'statamic:migrate:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate v2 user';

    /**
     * Runs migrator.
     *
     * @var string
     */
    protected $migrator = UserMigrator::class;
}
