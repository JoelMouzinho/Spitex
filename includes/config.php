<?php
/**
 * Site-wide configuration and content data for Spitex Wohl De Hei.
 * Keeping copy/data here means header, footer and pages all stay in sync.
 */

$site = [
    'name'        => 'Spitex Wohl De Hei',
    'tagline'     => 'Pflege zu Hause – am Platz von Pflege mit Herz',
    'address1'    => 'Johann-Renferstrasse 1',
    'address2'    => '2504 Biel/Bienne',
    'phone'       => '+41 32 589 69 70',
    'phone_link'  => '+41325896970',
    'mobile'      => '079 705 33 33',
    'mobile_link' => '+41797053333',
    'email'       => 'spitexwohldehei@bluewin.ch',
    'website'     => 'www.spitexwohldehei.ch',
];

// "Unser Angebot" — services list, mirrors the flyer's icon + label rows.
$services = [
    [
        'title' => 'Grundpflege',
        'desc'  => 'Körperpflege, Hygiene und Unterstützung im täglichen Ablauf.',
        'icon'  => 'care',
        'info'  => 'Unsere Grundpflege umfasst Körperpflege, An- und Auskleiden, Hilfe beim Aufstehen und Zubettgehen sowie Unterstützung bei der Mobilität. Wir richten uns dabei stets nach Ihrem gewohnten Tagesablauf und Ihren persönlichen Bedürfnissen — mit Respekt und Zeit für den Menschen.',
    ],
    [
        'title' => 'Behandlungspflege nach ärztlicher Verordnung',
        'desc'  => 'Medizinische Massnahmen, verordnet und begleitet von Ihrer Ärztin oder Ihrem Arzt.',
        'icon'  => 'syringe',
        'info'  => 'Wir übernehmen medizinische Massnahmen wie Medikamentengabe, Wundversorgung, Injektionen, Blutdruck- und Blutzuckermessungen — immer nach ärztlicher Verordnung und in enger Absprache mit Ihrer behandelnden Ärztin oder Ihrem Arzt.',
    ],
    [
        'title' => 'Kinderspitex',
        'desc'  => 'Spezialisierte Pflege und Begleitung für Kinder und Jugendliche zu Hause.',
        'icon'  => 'family',
        'info'  => 'Kranke, behinderte oder chronisch kranke Kinder und Jugendliche werden bei uns von speziell geschultem Fachpersonal betreut. Wir begleiten die ganze Familie einfühlsam und koordinieren die Pflege eng mit Kinderärztinnen und -ärzten sowie Therapiestellen.',
    ],
    [
        'title' => 'Palliative Pflege und Begleitung',
        'desc'  => 'Einfühlsame Betreuung in der letzten Lebensphase, für Betroffene und Angehörige.',
        'icon'  => 'heart',
        'info'  => 'In der letzten Lebensphase begleiten wir Betroffene und ihre Angehörigen mit Würde, Ruhe und fachlicher Kompetenz. Im Fokus stehen Schmerzlinderung, Lebensqualität und ein würdevolles Verabschieden — zu Hause, im vertrauten Umfeld.',
    ],
    [
        'title' => 'Psychiatrische Begleitung und Pflege',
        'desc'  => 'Fachliche Unterstützung bei psychischen Belastungen und Erkrankungen.',
        'icon'  => 'mind',
        'info'  => 'Menschen mit psychischen Erkrankungen oder Krisen unterstützen wir mit spezialisiertem Fachwissen, Geduld und Verständnis. Wir helfen bei der Alltagsstruktur, begleiten Behandlungen und stehen auch den Angehörigen beratend zur Seite.',
    ],
    [
        'title' => 'Unterstützung im Alltag',
        'desc'  => 'Hilfe bei Haushalt, Organisation und alltäglichen Aufgaben.',
        'icon'  => 'group',
        'info'  => 'Ob Haushalt, Einkäufe, Behördengänge oder Terminorganisation — wir unterstützen Sie dort, wo der Alltag Unterstützung braucht, damit Sie möglichst selbstständig und sicher zu Hause leben können.',
    ],
    [
        'title' => 'Kochen und Mahlzeiten zubereiten',
        'desc'  => 'Ausgewogene, auf Bedürfnisse abgestimmte Mahlzeiten.',
        'icon'  => 'meal',
        'info'  => 'Wir bereiten ausgewogene Mahlzeiten zu, die auf individuelle Bedürfnisse, Diätvorgaben und persönliche Vorlieben abgestimmt sind — von der Planung über den Einkauf bis zum gemeinsamen Kochen, wenn gewünscht.',
    ],
    [
        'title' => 'Ressourcen einbeziehen und vernetzen',
        'desc'  => 'Koordination mit Angehörigen, Fachstellen und Institutionen.',
        'icon'  => 'handshake',
        'info'  => 'Gute Pflege lebt von guter Vernetzung. Wir koordinieren mit Angehörigen, Ärztinnen und Ärzten, Therapiestellen und Institutionen, damit alle Beteiligten am gleichen Strang ziehen und nichts durch die Maschen fällt.',
    ],
];

$why_us = [
    ['label' => 'Kompetent', 'text' => 'Ausgebildetes Pflegefachpersonal mit langjähriger Erfahrung in der häuslichen Pflege.'],
    ['label' => 'Herzlich', 'text' => 'Wir begegnen jedem Menschen mit Wärme, Geduld und echtem Interesse.'],
    ['label' => 'Zuverlässig', 'text' => '24h erreichbar und verlässlich an Ihrer Seite — im gesamten Raum Seeland.'],
];

/**
 * Returns inline SVG path markup (stroke-based, currentColor) for a given service icon key.
 */
function service_icon(string $key): string
{
    $icons = [
        'care'      => '<path d="M12 21s-7-4.4-9.5-9C.7 8.3 2 4.5 5.5 4c2-.3 3.6.7 4.5 2.2C10.9 4.7 12.5 3.7 14.5 4c3.5.5 4.8 4.3 3 8-2.5 4.6-9.5 9-9.5 9z"/>',
        'syringe'   => '<path d="M19 3l2 2-2.5 2.5M17 5l-9.5 9.5M3 21l3-1 1-3M6.5 17.5L4 15M11 8l5 5M14 5l5 5"/>',
        'family'    => '<circle cx="8" cy="7" r="2.4"/><circle cx="16" cy="7" r="2.4"/><path d="M3 20c0-3 2.4-5.4 5-5.4S13 17 13 20M11 20c0-2.6 2-4.8 4.5-4.8S20 17.4 20 20"/>',
        'heart'     => '<path d="M12 20s-7.5-4.6-9.6-9.4C1.3 7.4 3 4.2 6.4 4c2-.1 3.6 1 4.4 2.4C11.6 5 13.2 3.9 15.2 4c3.4.2 5.1 3.4 4 6.6C17.5 15.4 12 20 12 20z"/>',
        'mind'      => '<path d="M9 3.5c-2.5.6-4 2.9-4 5.3 0 1.6.6 2.6 1.4 3.6.6.8 1.1 1.4 1.1 2.6V17h9v-2c0-1.2.5-1.8 1.1-2.6.8-1 1.4-2 1.4-3.6 0-3.6-3-6.4-6.5-5.9M10 20.5h4M10 17v1.5M14 17v1.5"/>',
        'group'     => '<circle cx="7" cy="8" r="2.3"/><circle cx="17" cy="8" r="2.3"/><circle cx="12" cy="6" r="2.3"/><path d="M2.5 19c0-2.6 2-4.7 4.5-4.7S11.5 16.4 11.5 19M12.5 19c0-2.6 2-4.7 4.5-4.7S21.5 16.4 21.5 19"/>',
        'meal'      => '<path d="M5 3v7a2 2 0 002 2 2 2 0 002-2V3M7 12v9M17 3c-1.7 0-3 2-3 5s1.3 5 3 5v8"/>',
        'handshake' => '<path d="M2 12l4-4 4 2 3-3 4 4-3 3-4-2-1 1M13 15l2 2 4-4M8 16l2 2"/>',
    ];
    return $icons[$key] ?? $icons['care'];
}
