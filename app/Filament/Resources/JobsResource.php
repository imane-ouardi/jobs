<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobsResource\Pages;
use App\Filament\Resources\JobsResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobsResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->placeholder('CEO')
                ->required(),
            TextInput::make('salary')
                ->label('Salary')
                ->placeholder('$90,000 USD')
                ->required(),
            TextInput::make('location')
                ->label('Location')
                ->placeholder('Winter Park, Florida')
                ->required(),
            Select::make('schedule')
                ->label('Schedule')
                ->options([
                    'Part Time' => 'Part Time',
                    'Full Time' => 'Full Time',
                ])
                ->required(),
            TextInput::make('url')
                ->label('URL')
                ->placeholder('https://acme.com/jobs/ceo-wanted')
                ->required(),
            Checkbox::make('featured')
                ->label('Feature (Costs Extra)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('salary'),
                TextColumn::make('location'),
                TextColumn::make('schedule'),
                TextColumn::make('url'),
                TextColumn::make('featured'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJobs::route('/create'),
            'edit' => Pages\EditJobs::route('/{record}/edit'),
        ];
    }
}
