<?php
/**
 * Sport Controller
 * Single controller handling ALL sport pages via data configuration.
 * Replaces: cricket.php, football.php, basketball.php, volleyball.php,
 *           tabletennis.php, badminton.php, futsal.php, chess.php, computergaming.php
 */

class SportController extends Controller
{
    /**
     * Sport configuration data — the single source of truth.
     */
    private function getSports(): array
    {
        return [
            'football' => [
                'name' => 'Football',
                'icon' => 'fa-futbol-o',
                'image' => 'img/Thats_gonna_give_a_goal.JPG',
                'category' => 'Boys only',
                'rules' => [
                    'Each team will consist of 18 players (11 playing and 7 extras).',
                    'Match duration: Two halves of 35 minutes each with a 10-minute break.',
                    'Standard FIFA rules will be followed.',
                    'Yellow card = warning, Red card = ejection. Two yellows = red.',
                    'Decision of the referee will be final.',
                    'Registered players only may participate.',
                ],
            ],
            'cricket' => [
                'name' => 'Cricket',
                'icon' => 'fa-trophy',
                'image' => 'img/Game_is_all_about_spirit_Play_fair.JPG',
                'category' => 'Boys only',
                'rules' => [
                    'Each team will consist of 13 players (11 playing and 2 extras).',
                    'Match format: T-20 (20 overs per side).',
                    'Standard ICC rules will apply.',
                    'Decision of the umpire will be final.',
                    'LBW rule will be applicable.',
                    'Registered players only may participate.',
                ],
            ],
            'basketball' => [
                'name' => 'Basketball',
                'icon' => 'fa-dribbble',
                'image' => 'img/You_gotta_basket_that_ball.jpg',
                'category' => 'Boys & Girls',
                'rules' => [
                    'Each team consists of 10 players (5 playing and 5 reserves).',
                    'Game duration: Four quarters of 10 minutes each.',
                    'Standard FIBA rules will be followed.',
                    'Personal fouls limit: 5 per player.',
                    'Decision of the referee will be final.',
                ],
            ],
            'volleyball' => [
                'name' => 'Volleyball',
                'icon' => 'fa-circle-o',
                'image' => 'img/Players_on_the_volley.JPG',
                'category' => 'Boys & Girls',
                'rules' => [
                    'Each team consists of 10 players (6 playing and 4 reserves).',
                    'Best of 3 sets format; each set to 25 points (deciding set to 15).',
                    'Standard FIVB rules will be followed.',
                    'Rotation system must be maintained.',
                    'Decision of the referee will be final.',
                ],
            ],
            'tabletennis' => [
                'name' => 'Table Tennis',
                'icon' => 'fa-table',
                'image' => 'img/You_and_me_Lets_play..JPG',
                'category' => 'Boys & Girls (Singles & Doubles)',
                'rules' => [
                    'Singles and doubles categories available.',
                    'Best of 5 games; each game to 11 points.',
                    'Standard ITTF rules apply.',
                    'Serve alternates every 2 points.',
                    'Each player brings their own racket.',
                ],
            ],
            'badminton' => [
                'name' => 'Badminton',
                'icon' => 'fa-plane',
                'image' => 'img/Happiness_is_overcoming_the_challenge.JPG',
                'category' => 'Boys & Girls (Singles & Doubles)',
                'rules' => [
                    'Singles and doubles categories for both boys and girls.',
                    'Best of 3 games; each game to 21 points.',
                    'Standard BWF rules will be followed.',
                    'Shuttlecocks provided by the organizer.',
                    'Decision of the referee will be final.',
                ],
            ],
            'futsal' => [
                'name' => 'Futsal / Cricsal',
                'icon' => 'fa-soccer-ball-o',
                'image' => 'img/The_girl_owns_the_goal_Futsal.JPG',
                'category' => 'Boys & Girls',
                'rules' => [
                    'Futsal: 5 players per team (1 goalkeeper + 4 outfield).',
                    'Match duration: Two halves of 15 minutes each.',
                    'Standard FIFA Futsal rules apply.',
                    'Cricsal follows modified indoor cricket rules.',
                    'Registered players only may participate.',
                ],
            ],
            'chess' => [
                'name' => 'Chess',
                'icon' => 'fa-th',
                'image' => 'img/Synapse_in_College_Magazine_1.jpg',
                'category' => 'Open to all',
                'rules' => [
                    'Swiss-system tournament format.',
                    'Time control: 15 minutes per player (Rapid chess).',
                    'Standard FIDE rules apply.',
                    'Touch-move rule is enforced.',
                    'Decision of the arbiter will be final.',
                ],
            ],
            'computergaming' => [
                'name' => 'Computer Gaming',
                'icon' => 'fa-gamepad',
                'image' => 'img/Synapse_in_College_Magazine_2.jpg',
                'category' => 'Open to all',
                'rules' => [
                    'Games include: FIFA, Counter-Strike, DOTA.',
                    'Team and solo categories available.',
                    'All equipment provided by organizers.',
                    'No external peripherals allowed.',
                    'Decision of the judges will be final.',
                ],
            ],
        ];
    }

    /**
     * Show a specific sport page.
     */
    public function show(): void
    {
        $sportSlug = isset($_GET['name']) ? trim($_GET['name']) : '';
        $sportSlug = preg_replace('/[^a-z]/', '', strtolower($sportSlug));

        $allSports = $this->getSports();

        if (!isset($allSports[$sportSlug])) {
            // Default to football if invalid
            $sportSlug = 'football';
        }

        $sport = $allSports[$sportSlug];
        $sport['slug'] = $sportSlug;
        $page = 'sports';
        $pageTitle = $sport['name'];

        $this->render('sports/show', compact('page', 'pageTitle', 'sport', 'allSports'));
    }
}
