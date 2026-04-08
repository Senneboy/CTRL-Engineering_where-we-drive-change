<!DOCTYPE html>
<?php
$industries = [
    [
        "id" => "section-1",
        "label" => "PRODUCTION TECHNOLOGY",
        "intro" => "CTRL Engineering delivers production technology that improves efficiency, precision, and automation. Our systems are built to streamline key industrial processes.",
        "introVideo" => "Production-Tech.mp4",
        "cards" => [
            [
                "title" => "Turnkey Machine Solutions",
                "text" => "We turn ideas into complete machine solutions by combining your knowledge with our engineering expertise. From requirements to concept and risk review, we keep the project focused and practical.",
                "image" => "image1.jpg",
                "reverse" => true
            ],
            [
                "title" => "Integrated engineering capabilities",
                "text" => "Our expertise spans mechanical, electrical, and software engineering, including embedded systems, PLC programming, and vision systems. We provide tailored, scalable solutions when standard options do not fit your needs.",
                "image" => "image2.jpg",
                "reverse" => false
            ],
            [
                "title" => "Smart Machine Retrofits",
                "text" => "We modernize existing equipment to improve performance, extend machine life, and meet safety standards. It is a practical way to improve reliability without replacing the whole machine.",
                "image" => "image3.jpg",
                "reverse" => true
            ],
            [
                "title" => "Staying ahead with production monitoring",
                "text" => "Our monitoring solutions provide real-time tracking and predictive insights. They help you spot issues early and keep operations efficient and reliable.",
                "image" => "image4.jpg",
                "reverse" => false
            ]
        ]
    ],
    [
        "id" => "section-2",
        "label" => "AUTOMOTIVE",
        "intro" => "CTRL Engineering supports automotive development with proven experience in testing, simulation, and drivetrain systems. We work with OEMs and suppliers across motorsport and off-highway applications.",
        "introVideo" => "Automotive.mp4",
        "cards" => [
            [
                "title" => "Driving Innovation with Test Benches",
                "text" => "Our test benches accelerate prototyping and validation for powertrain systems. They combine advanced algorithms, real-time communication, and synchronized measurements for accurate performance testing. Key features include precise component testing, real-world drivetrain validation, and integration with virtual engineering.",
                "image" => "image5.jpg",
                "reverse" => false
            ],
            [
                "title" => "Tailored to Different Powertrain Architectures",
                "text" => "We specialize in custom test benches and systems for electric, hybrid, and conventional drivetrains. Our experience covers high-performance vehicles as well as innovative electric platforms. Applications include custom driveline configurations, axles, motors, gearboxes, and on-road or off-road use.",
                "image" => "image6.jpeg",
                "reverse" => true
            ],
            [
                "title" => "Real-Time Software Platforms and Dynamic Motion Control",
                "text" => "Our real-time software and motion control support precise testing across demanding automotive applications. By combining advanced algorithms with high-performance hardware, we create flexible test environments. Core features include performance and NVH control, reliable hardware platforms, and low-latency communication.",
                "image" => "image7.jpg",
                "reverse" => false
            ],
            [
                "title" => "End-to-End Support",
                "text" => "From concept to delivery, our team supports the development of robust testing systems. We tailor each project to the client’s needs and performance targets. Our support covers concept, design, integration, deployment, and reliable long-term operation.",
                "image" => "image8.jpg",
                "reverse" => true
            ]
        ]
    ],
    [
        "id" => "section-3",
        "label" => "FOOD & BEVERAGE",
        "intro" => "CTRL Engineering delivers food and beverage solutions that improve efficiency, quality, and compliance. We focus on automation, traceability, and hygienic design.",
        "introVideo" => "Food-Beverage.mp4",
        "cards" => [
            [
                "title" => "Smart Software for Consistent Quality",
                "text" => "Our systems adjust to ingredient variation to keep product quality consistent. Real-time monitoring helps control production parameters, reduce waste, and improve efficiency.",
                "image" => "image9.jpg",
                "reverse" => false
            ],
            [
                "title" => "Securing and Retaining Operator Knowledge",
                "text" => "We capture operator knowledge directly in the machine, so recipes and data are easy to access. This reduces reliance on individual expertise, simplifies training, and lowers the risk of errors.",
                "image" => "image10.jpg",
                "reverse" => true
            ],
            [
                "title" => "Seamless Integration and Compliance",
                "text" => "We design machines for hygiene, reliability, and food safety compliance. Whether we build new systems or retrofit existing ones, we make sure the solution fits your production requirements.",
                "image" => "image11.jpg",
                "reverse" => false
            ]
        ]
    ]
];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where We Drive Change</title>
    <link rel="stylesheet" href="driveChange_Content.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <main class="wwdc-page">
        <?php foreach ($industries as $industry): ?>
            <section class="industry-section" id="<?php echo htmlspecialchars($industry['id']); ?>">
                <h2><?php echo $industry['label']; ?></h2>
                <div class="industry-intro-container">
                    <p class="industry-intro"><?php echo $industry['intro']; ?></p>
                    <video class="industry-intro-video" autoplay muted loop playsinline>
                        <source src="<?php echo htmlspecialchars($industry['introVideo']); ?>" type="video/mp4">
                    </video>
                </div>

                <div class="cards-grid">
                    <?php foreach ($industry['cards'] as $card): ?>
                        <article class="card-item">
                            <h3><?php echo $card['title']; ?></h3>
                            <div class="card-text"><?php echo $card['text']; ?></div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </main>
</body>
</html>
