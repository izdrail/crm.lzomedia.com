<?php

namespace Database\Seeders;

use Cornatul\Social\Models\SocialAccount;
use Cornatul\Social\Models\SocialAccountConfiguration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialAccountsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public final function run(): void
    {
        $user_id = 1;

        $account = SocialAccount::create([
            'user_id' => $user_id,
            'account' => 'Stefan',
        ]);

        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'linkedin',
            'configuration' => json_encode([
                'clientId' => config('social.linkedin.clientId'),
                'clientSecret' => config('social.linkedin.clientSecret'),
                'redirectUri' => config('social.linkedin.redirectUri'),
            ]),
        ]);


        SocialAccountConfiguration::create([
            'social_account_id' => $account->id,
            'type' => 'twitter',
            'configuration' => json_encode([
                'clientId' => config('social.twitter.clientId'),
                'clientSecret' => config('social.twitter.clientSecret'),
                'redirectUri' => config('social.twitter.redirectUri'),
            ]),
        ]);

    }
}
