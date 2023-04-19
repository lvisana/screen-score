<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $notes = array(
            0 => array (
                'title' => 'Weekly Planner',
                'description' => 'Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday',
                'date' => '12 Jan 2021'
            ),
            1 => array (
                'title' => 'Birthday Celebration',
                'description' => 'You can easily share via message, WhatsApp, emails etc. You can also save your notes and edit it later or can easily delete the note.',
                'date' => '12 Jan 2021'
            ),
            2 => array (
                'title' => 'Essay Outline',
                'description' => 'Content should be of topic. 300 Words only. Make presentation.',
                'date' => '12 Jan 2021'
            ),
            3 => array (
                'title' => 'Lecture Notes',
                'description' => 'Chapter 1 notes. Chapter 2 Assignment. Chapter 3 practical File.',
                'date' => '12 Jan 2021'
            ),
            4 => array (
                'title' => 'Benefits of NotePlus',
                'description' => 'Take organized notes and share later as meeting minutes or check-list with this simple accessible Noteplus. Each note you create will be stored on a virtual page of the NotePlus.',
                'date' => '12 Jan 2021'
            ),
        );
        return view('dashboard', [
            'notes' => $notes
        ]);
    }
}
