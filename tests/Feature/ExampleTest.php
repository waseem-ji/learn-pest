<?php

namespace Tests\Feature;

it("gives back succesfull response for homepage",function(){
    $response = $this->get('/');

        $response->assertStatus(200);
});
