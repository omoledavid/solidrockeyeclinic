<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\GeneralSetting;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;

class GeneralSettingEditor extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static string $view = 'filament.pages.general-setting-editor';
    protected static ?string $navigationLabel = 'General Settings';
    protected static ?string $title = 'Edit General Settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = GeneralSetting::first();

        $this->form->fill($settings ? $settings->toArray() : []);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Grid::make(2)
                ->schema([
                    Forms\Components\TextInput::make('site_name')
                        ->label('Site Name')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->label('Site Email')
                        ->email()
                        ->required(),
                    Forms\Components\TextInput::make('alt_email')
                        ->label('Site Alt Email')
                        ->email(),
                    Forms\Components\TextInput::make('phone')
                        ->label('Main Phone No'),
                    Forms\Components\TextInput::make('alt_phone')
                        ->label('2nd Phone No'),
                    Forms\Components\TextInput::make('phone_three')
                        ->label('3rd Phone No'),
                    Forms\Components\Textarea::make('alt_address')
                        ->label('Company Alt Address'),
                    Forms\Components\Textarea::make('address')
                        ->columnSpanFull()
                        ->label('Company Address'),
                    Forms\Components\FileUpload::make('logo'),
                    Forms\Components\FileUpload::make('dark_logo'),
                    Forms\Components\FileUpload::make('favicon'),
                ])
        ];
    }

    protected function getFormModel(): string
    {
        return GeneralSetting::class;
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function submit(): void
    {
        $data = $this->form->getState();

        $settings = GeneralSetting::first();

        if ($settings) {
            $settings->update($data);
        } else {
            GeneralSetting::create($data);
        }

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}

