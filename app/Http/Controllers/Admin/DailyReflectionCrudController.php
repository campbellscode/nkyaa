<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DailyReflectionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DailyReflectionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DailyReflectionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\DailyReflection::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/dailyreflection');
        CRUD::setEntityNameStrings('dailyreflection', 'daily_reflections');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns
        //CRUD::column('id');
        CRUD::column('date');
        CRUD::column('title');
        CRUD::column('quote');
        CRUD::column('reading');
        //CRUD::column('created_at');
        //CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    protected function setupShowOperation()
    {
        //CRUD::setFromDb(); // columns
        //CRUD::column('id');
        CRUD::column('date');
        CRUD::column('title');
        CRUD::column('quote');
        $this->crud->addField([
            'name' => 'reading',
            'type' => 'textarea',
            'label' => "Reading",
            'attributes' => [
                'rows' => 20              
            ]
        ]);
        //CRUD::column('reading');
        //CRUD::column('created_at');
        //CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(DailyReflectionRequest::class);

        //CRUD::setFromDb(); // fields
        //CRUD::field('id');
        CRUD::field('date');
        CRUD::field('title');
        CRUD::field('quote');
        $this->crud->addField([
            'name' => 'reading',
            'type' => 'textarea',
            'label' => "Reading",
            'attributes' => [
                'rows' => 12                
            ]
        ]);
        //CRUD::field('reading');
        //CRUD::field('created_at');
        //CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
