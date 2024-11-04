<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->required()->rules(['required', 'string', 'max:128']),
            Forms\Components\FileUpload::make('icon')->required()->directory('icons')->rules(['required', 'image', 'max:2048']),
            Forms\Components\Hidden::make('user_id')
            ->default(auth()->id())
            ->required()
            ->rules(['required', 'exists:users,id']),
            Forms\Components\Repeater::make('items')
                ->schema([
                    Forms\Components\TextInput::make('name')->required()->rules(['required', 'string', 'max:128']),
                    Forms\Components\DatePicker::make('start_date')->maxDate(now())->required()->rules(['required', 'date']),
                    Forms\Components\DatePicker::make('end_date')->rules(['nullable', 'date']),
                    Forms\Components\Select::make('type')->options(['experience' => 'Experience', 'education' => 'Education'])->required()->rules(['required', 'in:experience,education']),
                    Forms\Components\Textarea::make('description')->rules(['nullable', 'max:512'])
                ])
                ->required()
                ->label('Experience')
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('icon'),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Name')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'education' => 'Education',
                        'work' => 'Work',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
