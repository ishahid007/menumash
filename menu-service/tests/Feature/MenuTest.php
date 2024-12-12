<?php


use Database\Seeders\MenuSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Uses the given trait in the current file
uses(RefreshDatabase::class);

beforeEach(function () {
    // Run the database seeder
    $this->seed(MenuSeeder::class);
});


// test if the menu's are available
test("It should return all the menu's", function () {
    $response = $this->getJson('/api/menu');
    $response->assertStatus(200)
        ->assertJsonStructure(['data'])
        ->assertJsonCount(4, 'data')
        ->assertJsonStructure(['data' => [
            ['*' => 'id', 'name', 'price','created_at', 'updated_at'],
        ]])
        ->assertJsonPath('data.0.id', 1)
        ->assertJsonPath('data.0.name', 'Burger')
        ->assertJsonPath('data.0.price', "10.00");
});
