<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CrudTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_list_Events_Appear_in_Home()
    {
        $this->withExceptionHandling();
        $events = Event::factory(2)->create();
        $event = $events[0];
        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
        $response->assertSee($event->name);
    }
    public function test_a_event_can_be_deleted(){
        $this->withExceptionHandling();
        $event=Event::factory()->create();
        $this->assertCount(1,Event::all());
        $response= $this->delete(route('delete', $event->id));
        $this->assertCount(0,Event::all());
    }
    public function test_a_event_can_be_created(){
        $this->withExceptionHandling();
        $response = $this->post(route('storeEvent'),[
            'name' => 'Test Event',
            'description' => 'Test Description',
            'places' => '20',
            'img' => 'new image',
        ]);
        $this->assertCount(1, Event::all());
    }
    public function test_a_event_can_be_updated(){
        $this->withExceptionHandling();

        $event=Event::factory()->create();
        $this->assertCount(1,Event::all());
        $response= $this->patch(route('updateEvent', $event->id), ['name' => 'newName']);
        $this->assertEquals('newName', Event::first()->name);
      }
      public function test_Event_Appear_in_showEvent()
    {
        $this->withExceptionHandling();
        $event = Event::factory()->create();
        $this->assertCount(1,Event::all());
        $response= $this->get(route('showEvent',$event->id));
        $response->assertSee($event->img);

    }
}
