<?php
echo(__DIR__);
    require_once(__DIR__ . '/connexion.php');
    $createTable = "
        CREATE TABLE IF NOT EXISTS oeuvres (
            id INT NOT NULL AUTO_INCREMENT,
            titre VARCHAR(255) NOT NULL,
            description LONGTEXT NOT NULL,
            image VARCHAR(255) NOT NULL,
            artiste VARCHAR(255) NOT NULL,
            PRIMARY KEY (id)
        ) ENGINE=InnoDB
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_unicode_ci;
        ";
    $pdo->exec($createTable);
    $insertOeuvres = "
        INSERT INTO oeuvres (id, titre, description, artiste, image) VALUES
        (1, 'Dodomu', 'Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu (\"domicile\" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu''elle partage, ayant elle-même dû quitter son foyer. L''œuvre évoque le drapeau liquéfié d''une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d''émotion est le symbole d''un événement qui marquera l''Histoire. Cette peinture à l''acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.', 'Mia Tozerski', 'img/clark-van-der-beken.png'),
        (2, 'Aashaaheen Baadal', 'Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection', 'Anaisha Devi', 'img/pawel-czerwinski-3.png'),
        (3, 'Nightlife Traffic', 'Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at libero.', 'Andrew Forsythe', 'img/dan-cristian-padure.png'),
        (4, 'Le refuge de l''Havre', 'Nam tempus neque nec felis venenatis auctor. Nam velit risus, lobortis eu quam non, interdum efficitur nibh. Phasellus a augue ac orci lacinia mattis et vel lectus. Sed nec tellus urna. Donec at turpis turpis. Cras quam tellus, imperdiet vitae finibus id, varius quis felis. Maecenas blandit eleifend risus, vel hendrerit erat dignissim id. Nullam at laoreet nibh. Nulla gravida varius sollicitudin. Etiam non aliquam diam, tempor varius sapien. Aenean et velit eu nisi lobortis massa nunc.', 'Simon Pelletier', 'img/steve-johnson-5.png'),
        (5, 'Red Washover', 'Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus metus.', 'Kit Van Der Borght', 'img/steve-johnson.png'),
        (6, 'Chromatics', 'Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at ultricies sem porttitor.', 'Jean-Michel Delatronchette', 'img/pawel-czerwinski.png'),
        (7, 'Digital Negative', 'Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget molestie.', 'Hamish McKee', 'img/jazmin-quaynor.png'),
        (8, 'Blast from the past', 'Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis pulvinar vehicula. Duis nisi.', 'Juliette Baskerville', 'img/steve-johnson-6.png'),
        (9, 'Hurricane', 'Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu. Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis. Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus.', 'Natalie Wellington', 'img/victor-grabarczyk.png'),
        (10, 'La marée rouge', 'Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc.', 'Martin Rodriguez', 'img/pawel-czerwinski-2.png'),
        (11, 'Asimilacion', 'Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis ante, ultrices eget odio sed, luctus bibendum mauris sodales sed.', 'Angel Sanchez-Fernandez', 'img/steve-johnson-2.png'),
        (12, 'La Galaxia Gialla', 'Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui vel egestas porttitor. Nunc tristique dapibus orci a amet.', 'Eduardo Tancredi', 'img/fly-d.png'),
        (13, 'Puffy Amalgamate', 'Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin vitae enim gravida, commodo odio.', 'Sandro De Blasi', 'img/orfeas-green.png'),
        (14, 'Mirage', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus, fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget sollicitudin quis.', 'Stéphanie Kaiser', 'img/steve-johnson-4.png'),
        (15, 'Blaue Gelbe Muster', 'Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus nec.', 'Adelheid Von Schreiber', 'img/steve-johnson-3.png');
        ";
    $count = $pdo->query("SELECT COUNT(*) FROM oeuvres")->fetchColumn();
    if ($count == 0) {
        $pdo->exec($insertOeuvres);
    }
    echo "Table créée";
    // Request oeuvres from the database
    $oeuvresStatement = $pdo->prepare('SELECT * FROM oeuvres');
    // Execute the request
    $oeuvresStatement->execute();
    $oeuvres = $oeuvresStatement->fetchAll();