<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?int $navigationSort = 1000;

    public static function form(Form $form): Form
    {
            return $form
                ->schema([
                    Forms\Components\FileUpload::make('profile')
                        ->image()
                        ->required()
                        ->directory('profiles')
                        ->rules(['required', 'image', 'max:2048']),
                    Forms\Components\Textarea::make('about_me')
                        ->required()
                        ->label('About Me')
                        ->rules(['required', 'string', 'max:2048']),
                    Forms\Components\Repeater::make('what_i_do')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->rules(['required', 'string', 'max:128']),
                            Forms\Components\FileUpload::make('icon')
                                ->required()
                                ->directory('icons')
                                ->rules(['required', 'image', 'max:2048']),
                            Forms\Components\Textarea::make('description')
                                ->required()
                                ->rules(['required', 'string', 'max:2048']),
                        ])
                        ->required()
                        ->label('What I Do'),
                    Forms\Components\Repeater::make('social_media')
                        ->schema([
                            Forms\Components\TextInput::make('platform')
                                ->required()
                                ->rules(['required', 'string', 'max:50']),
                            Forms\Components\TextInput::make('link')
                                ->required()
                                ->rules(['required', 'url', 'max:255']),
                            Forms\Components\TextInput::make('icon_class')
                                ->required()
                                ->label('Icon Class')
                                ->rules(['required', 'string', 'max:50']),
                        ])
                        ->label('Social Media Links')
                        ->defaultItems(1),
                    Forms\Components\Section::make('Contact Information')
                        ->schema([
                            Forms\Components\TextInput::make('address')
                                ->label('Address')
                                ->rules(['nullable', 'string', 'max:255']),
                            Forms\Components\TextInput::make('email')
                                ->label('Email')
                                ->rules(['nullable', 'email', 'max:255']),
                            Forms\Components\TextInput::make('telegram')
                                ->label('Telegram')
                                ->rules(['nullable', 'string', 'max:255']),
                        ])->columns(2),
                    Forms\Components\Section::make('Additional Settings')
                        ->schema([
                            Forms\Components\Toggle::make('feedbacks_enabled')
                                ->label('Enable Feedbacks')
                                ->default(true)
                                ->rules(['required', 'boolean']),
                            Forms\Components\Toggle::make('customers_enabled')
                                ->label('Enable Customers')
                                ->default(true)
                                ->rules(['required', 'boolean']),
                        ])->columns(2),
                    Forms\Components\Hidden::make('user_id')
                        ->default(auth()->id())
                        ->required()
                        ->rules(['required', 'exists:users,id']),
                ])->columns(1);
        }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('profile')->label('Profile'),
                Tables\Columns\TextColumn::make('about_me')->limit(50)->label('About Me'),
                Tables\Columns\BooleanColumn::make('feedbacks_enabled')->label('Feedbacks Enabled'),
                Tables\Columns\BooleanColumn::make('customers_enabled')->label('Customers Enabled'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
