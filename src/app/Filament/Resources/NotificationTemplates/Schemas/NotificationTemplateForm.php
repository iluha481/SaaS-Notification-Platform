<?php

namespace App\Filament\Resources\NotificationTemplates\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NotificationTemplateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Template Name')
                    ->required()
                    ->maxLength(255),
                Select::make('channel_id')
                    ->label('Notification Channel')
                    ->relationship('notification_channel', 'name')
                    ->required(),
                Textarea::make('subject')
                    ->label('Subject')
                    ->required()
                    ->maxLength(255),
                Textarea::make('body')
                    ->label('Body')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
