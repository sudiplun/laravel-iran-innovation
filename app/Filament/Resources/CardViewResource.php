<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CardViewResource\Pages;
use App\Models\CardView;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CardViewResource extends Resource
{
    protected static ?string $model = CardView::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('sub_title')
                    ->required(),
                RichEditor::make('description')
                    ->required(),
                TextInput::make('Link')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('sub_title'),
                TextColumn::make('description')
                    ->words(20)
                    ->markdown()
                    ->searchable(),
                TextColumn::make('Link')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    ViewAction::make(),
                    EditAction::make(),
                ]),
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
            'index' => Pages\ListCardViews::route('/'),
            'create' => Pages\CreateCardView::route('/create'),
            'edit' => Pages\EditCardView::route('/{record}/edit'),
        ];
    }
}
