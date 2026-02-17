<?php
/**
 * Page Controller
 * Handles static-ish content pages: Literary, Cultural, Gallery, Post.
 */

class PageController extends Controller
{
    public function literary(): void
    {
        $page = 'literary';
        $pageTitle = 'Literary Events';

        $competitions = [
            [
                'name' => 'Quiz Competition',
                'desc' => 'One team from each college with three members shall participate. Open and rapid-fire rounds covering science, current affairs, and general knowledge.',
                'rules' => [
                    'Team of 3 members from each college.',
                    'Two rounds: Open round and Rapid-fire round.',
                    'Negative marking in rapid-fire round.',
                    'Decision of the quiz master will be final.',
                ],
            ],
            [
                'name' => 'Debate Competition',
                'desc' => 'Topics will be provided on the spot. Teams of two will debate for and against the motion.',
                'rules' => [
                    'Team of 2 members per college.',
                    'Time limit: 5 minutes per speaker.',
                    'Topics provided 15 minutes before the debate.',
                    'Judgment based on content, delivery, and rebuttal.',
                ],
            ],
            [
                'name' => 'Essay Writing',
                'desc' => 'Participants will write an essay on given topics within a time frame.',
                'rules' => [
                    'One participant per college.',
                    'Time limit: 1 hour.',
                    'Topics provided on the spot.',
                    'Judged on content, grammar, and presentation.',
                ],
            ],
            [
                'name' => 'Poetry Competition',
                'desc' => 'Participants recite their own poems or classical poems in English or Nepali.',
                'rules' => [
                    'One participant per college per language.',
                    'Time limit: 5 minutes per poem.',
                    'Original and classical poems both accepted.',
                    'Judged on content, expression, and stage presence.',
                ],
            ],
        ];

        $this->render('pages/literary', compact('page', 'pageTitle', 'competitions'));
    }

    public function cultural(): void
    {
        $page = 'cultural';
        $pageTitle = 'Cultural Events';

        $events = [
            [
                'name' => 'Solo Singing',
                'desc' => 'Individual vocal performance in any genre.',
                'rules' => [
                    'Time limit: 5 minutes.',
                    'Accompaniment track allowed (karaoke).',
                    'Judged on pitch, rhythm, and expression.',
                ],
            ],
            [
                'name' => 'Group Dance',
                'desc' => 'Team dance performance featuring any dance style.',
                'rules' => [
                    'Team of 5-10 members.',
                    'Time limit: 8 minutes including setup.',
                    'Props allowed with prior approval.',
                    'Judged on choreography, synchronization, and creativity.',
                ],
            ],
            [
                'name' => 'Musical Band',
                'desc' => 'Band performance with original or cover songs.',
                'rules' => [
                    'Band of 3-6 members.',
                    'Time limit: 15 minutes.',
                    'Instruments provided: Drums, keyboard. Others to bring own.',
                    'Explicit content strictly prohibited.',
                ],
            ],
            [
                'name' => 'Solo Dance',
                'desc' => 'Individual dance performance in any style.',
                'rules' => [
                    'Time limit: 5 minutes.',
                    'Props allowed with prior approval.',
                    'Judged on technique, expression, and creativity.',
                ],
            ],
            [
                'name' => 'Fashion Show',
                'desc' => 'Team fashion showcase with thematic presentation.',
                'rules' => [
                    'Team of 6-8 models.',
                    'Time limit: 10 minutes.',
                    'Theme must be declared before registration.',
                    'Judged on theme adherence, confidence, and style.',
                ],
            ],
        ];

        $this->render('pages/cultural', compact('page', 'pageTitle', 'events'));
    }

    public function gallery(): void
    {
        $page = 'gallery';
        $pageTitle = 'Photo Gallery';

        $photos = [
            ['src' => 'img/Synapse_in_College_Magazine_1.jpg', 'caption' => 'Synapse in College Magazine'],
            ['src' => 'img/Synapse_in_College_Magazine_2.jpg', 'caption' => 'Synapse Coverage'],
            ['src' => 'img/Game_is_all_about_spirit_Play_fair.JPG', 'caption' => 'Game is all about spirit'],
            ['src' => 'img/Get_yourself_registered_for_being_a_member_of_the_grand_SYNAPSE.JPG', 'caption' => 'Registration desk'],
            ['src' => 'img/Happiness_is_overcoming_the_challenge.JPG', 'caption' => 'Happiness is overcoming the challenge'],
            ['src' => 'img/You_gotta_basket_that_ball.jpg', 'caption' => 'You gotta basket that ball'],
            ['src' => 'img/Happy_organizers_after_successful_completion_of_Poem_Competition.JPG', 'caption' => 'Poem Competition team'],
            ['src' => 'img/lights_and_celebrations.JPG', 'caption' => 'Lights and celebrations'],
            ['src' => 'img/May_my_team_win.JPG', 'caption' => 'May my team win'],
            ['src' => 'img/Music_and_soul.JPG', 'caption' => 'Music and soul'],
            ['src' => 'img/One_on_one_offense_or_defense.JPG', 'caption' => 'Offense or defense'],
            ['src' => 'img/Players_on_the_volley.JPG', 'caption' => 'Players on the volley'],
            ['src' => 'img/Struggle_for_the_ball.JPG', 'caption' => 'Struggle for the ball'],
            ['src' => 'img/Thats_gonna_give_a_goal.JPG', 'caption' => 'That\'s gonna give a goal'],
            ['src' => 'img/The_girl_owns_the_goal_Futsal.JPG', 'caption' => 'Futsal action'],
            ['src' => 'img/You_and_me_Lets_play..JPG', 'caption' => 'You and me, let\'s play'],
        ];

        $this->render('pages/gallery', compact('page', 'pageTitle', 'photos'));
    }

    public function post(): void
    {
        $page = 'sports';
        $pageTitle = 'Post Detail';
        $this->render('pages/literary', compact('page', 'pageTitle'));
    }
}
