<?php

namespace App\Console\Commands;

use App\Mail\InformasiKonten;
use App\Models\Content;
use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class MonthlyContentUpdateReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:monthly-content-update-reminder';

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
        $content = Content::where('updated_at', '<', now()->subMonths(3))->get();
        if ($content->isEmpty()) return "No outdated content found.";
        $admins = User::role('admin')->get();
        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new InformasiKonten($content));
        }
        $this->info('Monthly reminder sent successfully!');
    }
}
