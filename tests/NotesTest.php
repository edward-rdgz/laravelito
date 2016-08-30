<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    use WithoutMiddleware; // Se utiliza para post. Desactiva el middleware.

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        // Having
    	Note::create(['note' => 'My first note']);
    	Note::create(['note' => 'Second note']);

        // When
        $this->visit('notes')
            // Then
            ->see('My first note')
            ->see('Second note');
    }

    // Automatizado
    public function test_create_note()
    {
        // When
        $this->post('notes')
            ->see('Creating a note'); //Equivalente a Route::post('notes'); En caso no haber formulario. Tambien conocido como prueba automatizada.
    }



}
