<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

//Ajout pour mettre le dark mode par défaut:
use Filament\Enums\ThemeMode;//+  ->defaultThemeMode(ThemeMode::Dark)
//Code trouvé dans la doc interne : vendor->filament->filament->docs->11.themes.md

class HomePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('home')
            ->path('home')
            ->login()
            ->profile()
            ->defaultThemeMode(ThemeMode::Dark)
            ->darkMode(true, true)//Pour supprimer la possibilité de switcher d'un mode à l'autre
            ->brandLogo(asset('template/images/inventory.png'))
            ->brandLogoHeight('40px')
            ->favicon(asset('template/images/favicon.png'))
            ->colors([
                'primary' => Color::Emerald,
            ])
             //AJOUT ICI IL FALLAIT CHANGER LE PATH:
            // ->viteTheme('resources/css/filament/home/theme.css')
            ->viteTheme('../../../resources/css/filament/home/theme.css')

            ->discoverResources(in: app_path('Filament/Home/Resources'), for: 'App\\Filament\\Home\\Resources')
            ->discoverPages(in: app_path('Filament/Home/Pages'), for: 'App\\Filament\\Home\\Pages')
            ->pages([
               //RENDRE INVISIBLE LE MENU DASHBOARD DE L'EXPLORATEUR:
               // Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Home/Widgets'), for: 'App\\Filament\\Home\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
