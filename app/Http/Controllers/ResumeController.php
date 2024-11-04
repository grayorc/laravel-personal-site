<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $experiences = Experience::all();
        $skills = Skill::all();
        $hard_skills = [];
        $soft_skills = [];
        $eds = [];
        $exs = [];

        foreach ($skills as $skill) {
            foreach ($skill->items as $item) {
                if ($item['type'] === "hard") {
                    $hard_skills[] = $item;
                } else {
                    $soft_skills[] = $item;
                }
            }
        }

        foreach ($experiences as $experience) {
            foreach ($experience->items as $item) {
                if ($item['type'] === "education") {
                    $eds[] = $item;
                } else {
                    $exs[] = $item;
                }
            }
        }


        return view('pages.resume', compact('experiences', 'skills', 'hard_skills', 'soft_skills', 'eds', 'exs'));
    }
}
