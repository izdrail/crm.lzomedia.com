<?php

namespace Cornatul\Social\Actions;

use Cornatul\Social\Contracts\ShareContract;
use Cornatul\Social\Objects\Message;
use Cornatul\Social\Service\GithubService;
use Cornatul\Social\Service\InstagramService;
use Cornatul\Social\Service\LinkedInService;
use Exception;
use League\OAuth2\Client\Token\AccessTokenInterface;

class ShareAction
{
    private array $services = array(
        'linkedin' => LinkedInService::class,
        'github' => GithubService::class,
        'instagram' => InstagramService::class,

    );

    /**
     * @throws Exception
     */
    public function share(AccessTokenInterface $accessToken, Message $message): void
    {
        /** @var ShareContract $service */
        foreach ($this->services as $service)
        {
            if (!$service instanceof ShareContract){
                throw new Exception("Cannot find service to share");
            }
            $service->shareOnWall($accessToken, $message);
        }
    }
}
