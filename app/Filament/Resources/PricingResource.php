<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingResource\Pages;
use App\Models\Pricing;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PricingResource extends Resource
{
    protected static ?string $model = Pricing::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-rupee';

    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('price')
                    ->required(),
                FileUpload::make('icon')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon')
                    ->toggleable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('price')
                    ->toggleable()
                    ->searchable(),
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
            'index' => Pages\ListPricings::route('/'),
            'create' => Pages\CreatePricing::route('/create'),
            'edit' => Pages\EditPricing::route('/{record}/edit'),
        ];
    }
}
