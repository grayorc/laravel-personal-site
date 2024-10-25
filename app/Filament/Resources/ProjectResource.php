<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->rules(['required', 'string', 'max:255']),
                Forms\Components\TextInput::make('link')
                    ->url()
                    ->rules(['nullable', 'url']),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->rules(['required', 'string']),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->directory('thumbnails')
                    ->rules(['nullable', 'image', 'max:2048']),
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id())
                    ->required()
                    ->rules(['required', 'exists:users,id']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->limit(10),
                Tables\Columns\TextColumn::make('description')
                    ->limit(10),
                Tables\Columns\TextColumn::make('link')
                    ->url(fn($record) => $record->link ?? '')
                    ->label('Project Link'),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->size(50),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
