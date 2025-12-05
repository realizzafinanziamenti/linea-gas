<?php

test('the app entry point redirects guests to the login page', function () {
    $response = $this->get('/');

    $response->assertStatus(301);
    $response->assertRedirect('/login');
});
