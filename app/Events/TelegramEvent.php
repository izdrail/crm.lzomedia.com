<?php

namespace App\Events;

use Cornatul\Feeds\DTO\ArticleDto;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Api;

class TelegramEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(Collection $collection,Api $telegram, string $chatID)
    {
        //
        Log::info('TelegramEvent');

        $dto = ArticleDto::from($collection->get('data'));


        $telegram->sendMessage([
            'chat_id' => $chatID,
            'text' => "{$dto->title}\n{$dto->summary}\n{$dto->banner}",
        ]);
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
