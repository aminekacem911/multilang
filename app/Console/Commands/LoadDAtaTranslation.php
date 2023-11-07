<?php

namespace Multilingual\Translation\Console\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;

class LoadDAtaTranslation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'multilingual:import-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): void
    {
        $this->comment(Lang::get('messages.command.comment_start', ['name' => $this->signature,
            'datetime' => Carbon::now()->format(config('constants.DATE_FORMAT_WITH_TIME'))]));
        Log::channel('scheduled')->info(Lang::get('messages.command.start', ['name' => $this->signature]));
        //TODO LOGIC
        $this->info('Your command executed successfully!');
        Log::channel('scheduled')->info(Lang::get('messages.command.end_success', ['name' => $this->signature]));
        $this->comment(Lang::get(
            'messages.command.comment_end_success',
            ['datetime' => Carbon::now()->format(config('constants.DATE_FORMAT_WITH_TIME'))]
        ));
    }
}
