<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\MultiSelect;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Http\Requests\NovaRequest;
// Add use statement here.
use Handleglobal\NestedForm\NestedForm;

class Evento extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Evento::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'nombre';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Nombre')->sortable()->rules('required','max:60'),
            Text::make('Descripcion')->sortable()->rules('required'),
            Image::make('Imagen Principal')->required()->disk('public'),
            Select::make('Tipo')->options([
                'N' => 'Normal',
                'D' => 'Deportivo',
            ]),
            Multiselect::make('Dias')->options([
                'lu' => 'Lunes',
                'ma' => 'Martes',
                'mi' => 'Miercoles',
                'ju' => 'Jueves',
                'vi' => 'Viernes',
                'sa' => 'Sabado',
                'do' => 'Domingo',
            ]),
            Boolean::make('Es Recurrente'),
            DateTime::make('Fecha Inicio'),
            DateTime::make('Fecha Finalizacion'),
            BelongsTo::make('Instalacion'),
            HasOne::make('Torneo')
            /*NestedForm::make('Torneo')/*->displayIf(function ($nestedForm, $request) {
               return [
                    [ 'attribute' => 'Tipo', 'is' => 'D' ]
               ];})*/
            
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
        return [];
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
