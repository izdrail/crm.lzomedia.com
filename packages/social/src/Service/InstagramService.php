<?php
declare(strict_types=1);

namespace Cornatul\Social\Service;

use Cornatul\Social\Contracts\ShareContract;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\Github;
use League\OAuth2\Client\Provider\Instagram;
use League\OAuth2\Client\Provider\LinkedIn;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Cornatul\Social\Objects\Message;

class InstagramService implements ShareContract
{
    private Instagram $provider;

    public function __construct(Instagram $provider)
    {
        $this->provider = $provider;
    }

    public function getAuthUrl(array $options = ['scope' => []]): string
    {
        return $this->provider->getAuthorizationUrl($options);
    }

    /**
     * @throws IdentityProviderException
     */
    public function getAccessToken($code)
    {
        return $this->provider->getAccessToken('authorization_code', [
            'code' => $code,
        ]);
    }

    /**
     * @throws IdentityProviderException
     */
    public function getUser($accessToken)
    {
        return $this->provider->getResourceOwner($accessToken);
    }

    public function shareOnWall(AccessTokenInterface $accessToken, Message $message): void
    {
        logger("Service not yet implemented {$this->provider->getName()}");
    }
}
