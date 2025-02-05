<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PasajeroResource\Pages;
use App\Filament\Resources\PasajeroResource\RelationManagers;
use App\Models\Pasajero;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PasajeroResource extends Resource
{
    protected static ?string $model = Pasajero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
              /*   TextInput::make('nombre')
                ->label('Nombre')
                ->required(),

                TextInput::make('apellido')
                ->label('Apellido')
                ->required(),

                TextInput::make('nro_doc')
                ->label('Documento')
                ->required(), */
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([    
                TextColumn::make('nombre'),
                TextColumn::make('apellido'),
                TextColumn::make('nro_doc'),
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
            'index' => Pages\ListPasajeros::route('/'),
            'create' => Pages\CreatePasajero::route('/create'),
            'edit' => Pages\EditPasajero::route('/{record}/edit'),
        ];
    }
}
