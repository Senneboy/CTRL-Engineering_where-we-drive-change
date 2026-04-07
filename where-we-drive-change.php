<!DOCTYPE html>
<?php
$industries = [
    [
        "id" => "section-1",
        "label" => "PRODUCTION TECHNOLOGY",
        "intro" => "CTRL Engineering is a trusted partner in developing advanced production technology solutions designed to optimize industrial processes. Our systems are engineered to automate key functions, such as component assembly, quality inspection, and material processing, ensuring high efficiency and precision.",
        "introVideo" => "Testvideo.mp4",
        "cards" => [
            [
                "title" => "Turnkey Machine Solutions",
                "text" => "We turn innovative ideas into fully realized turnkey machine solutions by combining your application knowledge with our engineering expertise. From functional requirements to concept design and risk assessments, we ensure smooth project flow and cost-effective solutions that deliver high-quality, reliable machines.",
                "image" => "image1.jpg",
                "reverse" => true
            ],
            [
                "title" => "Integrated engineering capabilities",
                "text" => "Our expertise spans mechanical, electrical, and software engineering, including embedded systems, FPGA design, PLC programming, and vision systems. We provide tailored, scalable solutions when off-the-shelf options do not meet your functional or budgetary needs. We support businesses of all sizes, from startups to large corporations, offering versatile, scalable solutions that drive success across diverse industries.",
                "image" => "image2.jpg",
                "reverse" => false
            ],
            [
                "title" => "Smart Machine Retrofits",
                "text" => "We help businesses modernize existing equipment through machine retrofits, enhancing performance, extending machine lifecycles, and ensuring compliance with safety standards. This cost-effective approach improves efficiency and reliability without expensive replacements.",
                "image" => "image3.jpg",
                "reverse" => true
            ],
            [
                "title" => "Staying ahead with production monitoring",
                "text" => "Our IoT-enabled machine monitoring solutions provide continuous tracking, predictive insights, and real-time optimization, helping you stay ahead of production issues and improve efficiency while keeping operations adaptable and reliable.",
                "image" => "image4.jpg",
                "reverse" => false
            ]
        ]
    ],
    [
        "id" => "section-2",
        "label" => "AUTOMOTIVE",
        "intro" => "Automotive is the breeding nest for our game changing team. CTRL has built up ground-breaking expertise working with major OEMs and suppliers in Formula 1, motorsports and off-highway. Our gained insights in simulation and testing workflows keep us ahead of competitors and deliver client solutions beyond expectations.",
        "introVideo" => "Testvideo.mp4",
        "cards" => [
            [
                "title" => "Driving Innovation with Test Benches",
                "text" => "Our test benches accelerate prototyping and validation for powertrain systems, enabling faster, more efficient development cycles. With advanced algorithms, real-time communication, and synchronized measurements, we redefine performance testing.<br><br><strong>Key Features of Our Test Benches:</strong><ul><li>Revolutionize powertrain component testing with precise and dynamic platforms.</li><li>Frontload drivetrain validation in real-world conditions for high ROI.</li><li>Seamlessly integrate virtual engineering into rapid development workflows.</li></ul>",
                "image" => "image5.jpg",
                "reverse" => false
            ],
            [
                "title" => "Tailored to Different Powertrain Architectures",
                "text" => "We specialize in custom test benches and systems for electric, hybrid, and conventional drivetrains. Our expertise spans from high-performance sports cars to innovative electric drivetrains, making us a trusted partner in automotive technology.<br><br><strong>Applications and Capabilities:</strong><ul><li>Design bespoke systems for diverse driveline configurations.</li><li>Cover multiple components, including axles, motors, and gearboxes.</li><li>Deliver solutions for on-road and off-road applications.</li></ul>",
                "image" => "image6.jpeg",
                "reverse" => true
            ],
            [
                "title" => "Real-Time Software Platforms and Dynamic Motion Control",
                "text" => "Our mastery of real-time software and motion control ensures precise testing and adaptability to any automotive challenge. By integrating cutting-edge algorithms with high-performance hardware, we bring real-world testing scenarios to life.<br><br><strong>Core Features:</strong><ul><li>Provide real-time control systems for performance and NVH testing.</li><li>Combine advanced software with reliable, scalable hardware platforms.</li><li>Ensure rigorous testing with low latency communication busses.</li></ul>",
                "image" => "image7.jpg",
                "reverse" => false
            ],
            [
                "title" => "End-to-End Support",
                "text" => "From concept to delivery, our team offers complete support for developing robust testing systems. Collaboration is at the core of our process, ensuring each project is tailored to client needs and meets the highest performance standards.<br><br><strong>Our Value:</strong><ul><li>Offer full lifecycle support: concept, design, integration, and deployment.</li><li>Tailor solutions to client-specific performance and operational goals.</li><li>Guarantee efficient, reliable systems that push automotive innovation forward.</li></ul>",
                "image" => "image8.jpg",
                "reverse" => true
            ]
        ]
    ],
    [
        "id" => "section-3",
        "label" => "FOOD & BEVERAGE",
        "intro" => "At CTRL Engineering, we specialize in the food and beverage industry, delivering solutions that enhance efficiency, product quality, and safety compliance. We focus on automation, traceability, and hygiene, and offer smart dosing systems and retrofit solutions to modernize existing equipment.",
        "introVideo" => "Testvideo.mp4",
        "cards" => [
            [
                "title" => "Smart Software for Consistent Quality",
                "text" => "CTRL Engineering systems automatically adjust to ingredient variations, ensuring consistency in product quality. Real-time monitoring allows for precise control over production parameters, enabling immediate corrections when necessary. This capability reduces waste, improves efficiency, and guarantees that products meet the required standards, enhancing both production flexibility and quality assurance.",
                "image" => "image9.jpg",
                "reverse" => false
            ],
            [
                "title" => "Securing and Retaining Operator Knowledge",
                "text" => "At CTRL Engineering we capture operator knowledge directly within the machine, ensuring easy access to recipes and operational data. This approach reduces reliance on individual expertise, simplifies training, and minimizes errors, enabling consistent production performance.",
                "image" => "image10.jpg",
                "reverse" => true
            ],
            [
                "title" => "Seamless Integration and Compliance",
                "text" => "We understand the importance of complying with food safety regulations and standards. Our machines are designed to ensure ease of maintenance, hygiene, and reliability, helping food and beverage businesses achieve operational excellence without compromising on safety. Whether it is developing new systems or retrofitting existing ones, we ensure that every solution meets your production requirements while adhering to the highest industry standards.",
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
