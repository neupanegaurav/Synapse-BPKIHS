<?php
/**
 * Home Controller
 * Handles the homepage display.
 */

class HomeController extends Controller
{
    public function index(): void
    {
        $page = 'home';
        $pageTitle = 'Home';

        // Gallery images for the sponsor/photo slider
        $galleryImages = [
            ['src' => 'img/Game_is_all_about_spirit_Play_fair.JPG', 'caption' => 'Game is all about spirit'],
            ['src' => 'img/Happiness_is_overcoming_the_challenge.JPG', 'caption' => 'Happiness is overcoming the challenge'],
            ['src' => 'img/May_my_team_win.JPG', 'caption' => 'May my team win'],
            ['src' => 'img/Music_and_soul.JPG', 'caption' => 'Music and soul'],
            ['src' => 'img/One_on_one_offense_or_defense.JPG', 'caption' => 'One on one, offense or defense'],
            ['src' => 'img/Players_on_the_volley.JPG', 'caption' => 'Players on the volley'],
        ];

        // News categories
        $newsCategories = [
            'Sports' => [
                ['title' => 'CMS vs BPKIHS: BPKIHS wins by 3-0', 'img' => 'img/Thats_gonna_give_a_goal.JPG'],
                ['title' => 'Football finals approach as teams battle', 'img' => 'img/Struggle_for_the_ball.JPG'],
                ['title' => 'Basketball tournament update', 'img' => 'img/You_gotta_basket_that_ball.jpg'],
            ],
            'Literary' => [
                ['title' => 'Poem competition concluded successfully', 'img' => 'img/Happy_organizers_after_successful_completion_of_Poem_Competition.JPG'],
                ['title' => 'Debate semi-finals announced', 'img' => 'img/Synapse_in_College_Magazine_1.jpg'],
                ['title' => 'Essay writing contest results', 'img' => 'img/Synapse_in_College_Magazine_2.jpg'],
            ],
            'Cultural' => [
                ['title' => 'Lights and celebrations at cultural night', 'img' => 'img/lights_and_celebrations.JPG'],
                ['title' => 'Musical performances enthral audiences', 'img' => 'img/Music_and_soul.JPG'],
                ['title' => 'Dance competition heats up', 'img' => 'img/The_girl_owns_the_goal_Futsal.JPG'],
            ],
        ];

        $this->render('home/index', compact('page', 'pageTitle', 'galleryImages', 'newsCategories'));
    }
}
