<?php

namespace App\Nova;

use App\Nova\Filters\ExhibitorConfirmed;
use App\Nova\Filters\WorkTitle;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Exhibitor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Exhibitor::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'full_name';
    public static $group = 'Exposants';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'full_name', 'work_title', 'email', 'tel'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Image::make('Image de couverture', 'cover_img')
                ->rules('image'),

            ID::make(__('ID'), 'id')
                ->sortable(),

            Text::make(__('Nom'), 'full_name')
                ->placeholder('Entrez un nom et prénom')
                ->rules('required', 'alpha_spaces')
                ->sortable(),

            Slug::make('Slug')
                ->from('Nom')
                ->separator('-')
                ->hideFromIndex(),

            Text::make(__('Métier'), 'work_title')
                ->placeholder('Entrez un métier')
                ->rules('required', 'alpha_spaces')
                ->sortable(),

            Text::make('Email')
                ->placeholder('Entrez un email')
                ->sortable()
                ->rules('required', 'email:rfc', 'max:254')
                ->creationRules('unique:exhibitors,email')
                ->updateRules('unique:exhibitors,email,{{resourceId}}'),

            Text::make(__('Téléphone'), 'tel')
                ->placeholder('Entrez un numéro de téléphone')
                ->sortable()
                ->rules('required', 'numeric'),

            Boolean::make(__('Confirmé'), 'confirmed')
                ->sortable(),

            HasOne::make('Table', 'table', Table::class)
                ->showOnDetail(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new ExhibitorConfirmed(),
            new WorkTitle(),
        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
