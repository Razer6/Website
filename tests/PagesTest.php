<?php

/*
 * This file is part of Cachet Website.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class PagesTest extends TestCase
{
    /**
     * A basic test that the homepage is working.
     *
     * @return void
     */
    public function testHomePage()
    {
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * A basic test that the team page is working.
     *
     * @return void
     */
    public function testTeamPage()
    {
        $response = $this->call('GET', 'team');

        $this->assertEquals(200, $response->getStatusCode());
    }
}
