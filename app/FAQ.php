<?php

namespace App;

use Moloquent\Eloquent\Model as Eloquent;

/**
 * Class FAQ
 * @package App
 *
 * @property string q
 * @property string a
 */
class FAQ extends Eloquent
{
    public static $data = [
        [
            'q' => 'What is AUT ISPC?',
            'a' => 'It is the student version of ACM ICPC, held at Amirkabir University of technology. This contest is a
            a way for highschool students that are good at programming and algorithm analysis and know their way to C/C++ or Java
            and etc to compete in teams and test their knowledge.
            '
        ],
        [
            'q' => 'Who can participate in the AUT ISPC?',
            'a' => 'Every highschool student that is eligible according to the contest rules. The student must be in highschool and has not
            yet finished it.'
        ],
        [
            'q' => 'Which  materials are allowed in contest day?',
            'a' => 'In our local contest,
you are allowed to bring any printed material (team  notebook, reference books, note etc.) you want. But any electrical
device  (laptop, cell phone, PDA etc.) is forbidden.'
        ],
        [
            'q' => 'What is the  requirement for be a good team',
            'a' => '1) Knowledge of standard  algorithms and the ability to find an appropriate algorithm for every
problem  in the set <br />
2) Ability to code an  algorithm into a working program<br />
3) Having a strategy of cooperation with your  teammates'
        ],
        [
            'q' => 'Where can i  find appropriate book and paper to learn more about algorithms?',
            'a' => 'See the <a href="/links">useful links</a>!'
        ],
        [
            'q' => 'Is there  training website for ISPC?',
            'a' => 'Yes.  There is a lot of websites; you can see some  of them in the <a href="/links">useful links</a>
(Online judges).'
        ],
        [
            'q' => 'Am I supposed  to know English?',
            'a' => 'In official contests the problems  are in English. If you can read the problems it is enough.'
        ],
    ];

}
