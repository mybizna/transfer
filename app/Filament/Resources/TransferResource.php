<?php

namespace Modules\Transfer\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Base\Filament\Resources\BaseResource;
use Modules\Transfer\Models\Transfer;

class TransferResource extends BaseResource
{
    protected static ?string $model = Transfer::class;

    protected static ?string $slug = 'transfer/transfer';

    protected static ?string $navigationGroup = 'Transfer';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('currency_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('token')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('params')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_canceled'),
                Forms\Components\TextInput::make('from_partner_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('to_partner_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('gateway_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('currency_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('token')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_canceled')
                    ->boolean(),
                Tables\Columns\TextColumn::make('from_partner_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('to_partner_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gateway_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

}
