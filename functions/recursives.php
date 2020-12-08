<html>
    <a href='../'>Back</a>
    <br>
    <br>
    <br>
</html>

<?php

$hierarchy = [
    [
        'role' => 'CEO ',
        'employee' => [
            [
                'role' => 'Commercial Director',
                'employee' => [

                    [
                        'role' => 'Sales Manager'
                    ]
                ]
            ],
            [
                'role' => 'Financial Director',
                'employee' => [
                    [
                        'role' => 'Bill Manager',

                        'employee' => [
                            [
                                'role' => 'Payment Supervisor'
                            ]
                        ]
                    ],
                    [
                        'role' => 'Shopping Manager',
                        'employee' => [
                            [
                                'role' => 'Storage Supervisor',
                                'employee' => [
                                    [
                                        'role' => 'Employee'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

echo showArr($hierarchy);

//This function will returns itself inside them
function showArr($roles)
{
    $html = '<ul>';
    foreach ($roles as $role) {
        $html .= '<li>';
        $html .= $role['role'];
        if (!empty($role['employee'])) {
            $html .= showArr($role['employee']);
        }
        $html .= '</li>';
    }
    $html .= '</ul>';

    return $html;
}