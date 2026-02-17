<?php
/**
 * Event Controller
 * Handles the events schedule page.
 */

class EventController extends Controller
{
    public function index(): void
    {
        $page = 'events';
        $pageTitle = 'Events Schedule';

        $days = [
            [
                'day' => 'Day 1',
                'events' => [
                    [
                        'title' => 'Registration',
                        'desc' => 'Registration is required for all participants. Registered delegates are provided a welcome kit, accommodation and transportation. As soon as participants arrive at BPKIHS, they must get registered and receive identity cards.'
                    ],
                    [
                        'title' => 'Accommodation',
                        'desc' => 'Participants are accommodated at Agrasen Smriti Bhawan, Gita Bhawan, Langhali and Hariyali Park cottage, along with Boys and Girls Hostels at BPKIHS.'
                    ],
                    [
                        'title' => 'Opening Ceremony',
                        'desc' => 'Formal inauguration of Synapse in the presence of decorated delegates and chief guests.'
                    ],
                ],
            ],
            [
                'day' => 'Day 2',
                'events' => [
                    ['title' => 'Various Events Commence', 'desc' => 'All sports and literary events officially begin.'],
                    ['title' => 'Games Continue', 'desc' => 'Schedule of various events and games will be published after the program starts.'],
                ],
            ],
            [
                'day' => 'Day 3',
                'events' => [
                    ['title' => 'Games Continue', 'desc' => 'League and group stage matches continue for all sports categories.'],
                ],
            ],
            [
                'day' => 'Day 4',
                'events' => [
                    ['title' => 'Quarter Finals', 'desc' => 'Quarter-final matches begin across sports categories.'],
                ],
            ],
            [
                'day' => 'Day 5',
                'events' => [
                    ['title' => 'Semi Finals', 'desc' => 'Semi-final matches in all major sports categories.'],
                ],
            ],
            [
                'day' => 'Day 6',
                'events' => [
                    ['title' => 'Finals Begin', 'desc' => 'Finals of various games commence.'],
                    ['title' => 'Intra-College Cultural Program', 'desc' => 'Cultural performances from participating colleges.'],
                ],
            ],
            [
                'day' => 'Day 7',
                'events' => [
                    ['title' => 'Grand Finals', 'desc' => 'Championship finals of all remaining sports.'],
                    ['title' => 'Inter-Medical College Cultural Program', 'desc' => 'Musical band and dancing competition.'],
                    ['title' => 'Major Cultural Night', 'desc' => 'Performances from popular artists (concert).'],
                    ['title' => 'Closing Ceremony', 'desc' => 'Awards distribution and official closing of Synapse.'],
                ],
            ],
        ];

        $this->render('events/index', compact('page', 'pageTitle', 'days'));
    }
}
