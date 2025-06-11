<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use App\Jobs\SendAutoEmail;

class SendAutoEmailsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-auto-emails-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        // Contoh data yang akan dikirim
        $data = [
            'subject' => 'Email Otomatis dari Laravel',
            'title' => 'Halo! Ini email otomatis',
            'body' => 'Ini adalah contoh email yang dikirim secara otomatis dari Laravel 12.'
        ];

        // Contoh: Kirim ke semua user
        $users = User::where('role', '=','admin')->get();

        foreach ($users as $user) {
            SendAutoEmail::dispatch($user->email, $data);
        }

        $this->info('Automated emails sent successfully!');
    }
}
