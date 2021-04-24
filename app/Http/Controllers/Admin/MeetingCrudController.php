<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MeetingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MeetingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MeetingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;


    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Meeting::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/meeting');
        CRUD::setEntityNameStrings('meeting', 'meetings');
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
        //CRUD::column('type'); 
        
        $this->crud->addColumn('days');

        
        // $this->crud->addColumn([
        //     'name'    => 'days', // The method on your model that defines the relationship
        //     'label'   => 'Day', // The form input label.
        //     'type'    => 'relationship',
        //     'entity'  => 'days', // Points to the method on the model that contains the relationship.
        //     'attribute' => 'name', // Foreign key attribute that is shown to user (identifiable attribute, Monday, Tuesday)
        // ]);  

        CRUD::column('time');
        CRUD::column('address');
        CRUD::column('city');
        CRUD::column('state');
        CRUD::column('zip');
        //CRUD::field('created_at');
        //CRUD::field('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }


    /**
     * Define what happens when the Show operation is loaded. Info displayed in preview pane.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-show
     * @return void
     */
    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation 
        $this->crud->set('show.setFromDb', false);

        //CRUD::column('id');
        CRUD::column('name');
        //CRUD::column('type');

        $this->crud->addColumn('days');


        // $this->crud->addColumn([
        //     'name'    => 'days', // The method on your model that defines the relationship
        //     'label'   => 'Day', // The form input label.
        //     'type'    => 'relationship',
        //      'entity'  => 'days', // Points to the method on the model that contains the relationship.
        //      'attribute' => 'name', // Foreign key attribute that is shown to user (identifiable attribute, Monday, Tuesday)
        // ]);    
        CRUD::column('time');
        CRUD::column('address');
        CRUD::column('city');
        CRUD::column('state');
        CRUD::column('zip');

        //CRUD::field('created_at');
        //CRUD::field('updated_at');

        // $this->crud->removeColumn('date');
        // $this->crud->removeColumn('extras');

        // Note: if you HAVEN'T set show.setFromDb to false, the removeColumn() calls won't work
        // because setFromDb() is called AFTER setupShowOperation(); we know this is not intuitive at all
        // and we plan to change behaviour in the next version; see this Github issue for more details
        // https://github.com/Laravel-Backpack/CRUD/issues/3108
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MeetingRequest::class);

        //CRUD::field('id');
        CRUD::field('name');
        //CRUD::field('type');
        CRUD::field('days');

             //$this->crud->addField([
            //     'label' => 'Days',
            //     'type' => 'relationship',
            //     'name' => 'days', // the method that defines the relationship in your Model
            //     'entity' => 'days', // the method that defines the relationship in your Model
            //     'attribute' => 'name', // foreign key attribute that is shown to user
            //     'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
            //     'inline_create' => ['entity' => 'day'],
            //     'ajax' => true,
            // ]);
            
            // 'name'    => 'days', // The method on your model that defines the relationship
            // 'label'   => 'Day', // The form input label.
            // 'type'    => 'relationship',            
            //'entity'  => 'days', // Points to the method on the model that contains the relationship.
            //'attribute' => 'name', // Foreign key attribute that is shown to user (identifiable attribute, Monday, Tuesday)
            //'model' => 'App\Models\Day', // foreign key model
            //'multiple' => 'true',
            //'pivot' => 'true',
            // ]);

            //'pivot' => 'true',
            //'placeholder' => 'Select days'
            //'model'     => "Backpack\PermissionManager\app\Models\Meeting",
            // 'pivot'     => false,
            // 'options' => [ // The key will be stored in the db, the value will be shown as label.
            //     'Daily'     => 'Daily',
            //     'Monday'    => 'Monday',
            //     'Tuesday'   => 'Tuesday',
            //     'Wednesday' => 'Wednesday',
            //     'Thursday'  => 'Thursday',
            //     'Friday'    => 'Friday',
            //     'Saturday'  => 'Saturday',
            //     'Sunday'    => 'Sunday',
            // ],
            // 'inline' => true, // show the radios all on the same line?
            // 'tab'    => 'Simple',

        CRUD::field('time');
        CRUD::field('address');
        CRUD::field('city');
        CRUD::field('state');
        CRUD::field('zip');
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

        /**
     * Respond to AJAX calls from the select2 with entries from the Day model.
     * @return JSON
     */
    // public function Days()
    // {
    //     return $this->fetch(\App\Models\Day::class);
    // }
}
