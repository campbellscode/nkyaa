<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\HouseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class HouseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class HouseCrudController extends CrudController
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
        CRUD::setModel(\App\Models\House::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/house');
        CRUD::setEntityNameStrings('house', 'houses');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::column('id');
        CRUD::column('name');
        $this->crud->addColumn([   // select_from_array
            'name' => 'type',
            'label' => "Type",
            'type' => 'select_from_array',
            'options' => ['0' => 'Men\'s', '1' => 'Women\'s'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        //CRUD::column('type');
        CRUD::column('city');
        $this->crud->addColumn([   // select_from_array
            'name' => 'state',
            'label' => "State",
            'type' => 'select_from_array',
            'options' => ['0' => 'KY', '1' => 'OH'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        //CRUD::column('state');
        CRUD::column('phone');
        $this->crud->addColumn([   // select_from_array
            'name' => 'busline',
            'label' => "On Busline",
            'type' => 'boolean',
            'options' => ['0' => 'No', '1' => 'Yes'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        $this->crud->addColumn([   // select_from_array
            'name' => 'mat',
            'label' => "Accepts MAT",
            'type' => 'boolean',
            'options' => ['0' => 'No', '1' => 'Yes'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        //CRUD::column('busline');
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
        CRUD::setValidation(HouseRequest::class);

        //CRUD::field('id');
        CRUD::field('name');
        $this->crud->addField([   // select_from_array
            'name' => 'type',
            'label' => "Type",
            'type' => 'select_from_array',
            'options' => ['0' => 'Men\'s', '1' => 'Women\'s'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);        
        CRUD::field('type');
        CRUD::field('city');
        $this->crud->addField([   // select_from_array
            'name' => 'state',
            'label' => "State",
            'type' => 'select_from_array',
            'options' => ['0' => 'KY', '1' => 'OH'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        //CRUD::field('state');
        CRUD::field('phone');
        $this->crud->addField([   // select_from_array
            'name' => 'busline',
            'label' => "On Busline",
            'type' => 'boolean',
            'options' => ['0' => 'No', '1' => 'Yes'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        $this->crud->addField([   // select_from_array
            'name' => 'mat',
            'label' => "Accepts MAT",
            'type' => 'boolean',
            'options' => ['0' => 'No', '1' => 'Yes'],
            'default' => '0',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        //CRUD::field('busline');
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
