```php
<?php
$name = "PHẠM THỊ HOÀNG LAN";
$position = "SINH VIÊN CÔNG NGHỆ THÔNG TIN";

$contact = [
    "phone" => "0971824804",
    "email" => "phamthihoanglan2k6@gmail.com",
    "address" => " Việt Nam",
    "github" => "224001802"
];

$introduction = "
Tôi là sinh viên ngành Công nghệ thông tin, có kiến thức cơ bản
về lập trình Web và cơ sở dữ liệu. Tôi đang tập trung phát triển
kỹ năng PHP, HTML, CSS, SQL và Git/GitHub.
";

$careerGoal = "
Mong muốn được tham gia thực tập và làm việc trong lĩnh vực
phát triển Web. Tôi muốn áp dụng kiến thức PHP và cơ sở dữ liệu
vào các dự án thực tế, đồng thời nâng cao khả năng làm việc nhóm
và phát triển phần mềm.
";

$education = [
    "school" => "TRƯỜNG ĐẠI HỌC THỦ ĐÔ HÀ NỘI",
    "major" => "Công nghệ thông tin",
    "time" => "2024 - Nay",
    "gpa" => "3.16 / 4.0"
];


$skills = [
    "PHP",
    "HTML",
    "CSS",
    "MySQL / SQL",
    "Git / GitHub",
    "JavaScript"
];


$projects = [
    [
        "name" => "HỆ THỐNG QUẢN LÝ CÂU LẠC BỘ SINH VIÊN",
        "time" => "2026",
        "description" =>
            "Xây dựng website quản lý câu lạc bộ, thành viên và các hoạt động của sinh viên.",
        "technology" =>
            "PHP, HTML, CSS, MySQL, GitHub",
        "role" =>
            "Thiết kế giao diện, xây dựng chức năng PHP và xử lý dữ liệu."
    ],

    [
        "name" => "WEBSITE QUẢN LÝ SINH VIÊN",
        "time" => "2025",
        "description" =>
            "Website quản lý thông tin sinh viên với các chức năng thêm, sửa, xóa và tìm kiếm.",
        "technology" =>
            "HTML, CSS, MySQL,JavaScript, GitHub",
        "role" =>
            "Phát triển giao diện và lập trình các chức năng CRUD."
    ]
];


$experiences = [
    "Phân tích yêu cầu và xác định chức năng của hệ thống.",
    "Thiết kế giao diện website bằng HTML và CSS.",
    "Xây dựng chức năng.",
    "Thực hiện các chức năng thêm, sửa, xóa và tìm kiếm dữ liệu.",
    "Quản lý mã nguồn bằng Git và GitHub.",
    "Làm việc nhóm và phân chia công việc."
];

?>

<!DOCTYPE html>

<html lang="vi">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $name; ?> - CV
    </title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;

            background: #eef2f6;

            color: #333;

            line-height: 1.6;
        }
        .cv {
            width: 900px;

            max-width: 95%;

            margin: 40px auto;

            padding: 45px 50px;

            background: white;

            box-shadow:
                0 5px 25px rgba(0, 0, 0, 0.12);
        }

        .header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            padding-bottom: 25px;

            margin-bottom: 25px;

            border-bottom: 3px solid #2563eb;
        }


        .header h1 {
            font-size: 32px;

            color: #1e3a8a;

            margin-bottom: 5px;
        }


        .header h2 {
            font-size: 16px;

            color: #555;

            font-weight: normal;
        }


        .contact {
            text-align: right;

            font-size: 14px;

            color: #555;
        }

        section {
            margin-bottom: 25px;
        }


        section h3 {
            color: #1e3a8a;

            font-size: 18px;

            border-bottom: 2px solid #e5e7eb;

            padding-bottom: 6px;

            margin-bottom: 12px;
        }


        section p {
            font-size: 14px;
        }
        .content {
            display: grid;

            grid-template-columns: 35% 65%;

            gap: 35px;
        }


        .left {
            padding-right: 25px;

            border-right: 1px solid #ddd;
        }


        .right {
            padding-left: 5px;
        }

        .item,
        .project {
            margin-bottom: 20px;
        }


        .item h4,
        .project h4 {
            font-size: 15px;

            color: #222;

            margin-bottom: 3px;
        }


        .time {
            color: #2563eb;

            font-size: 13px !important;

            font-weight: bold;

            margin-bottom: 5px;
        }

        .skill-list {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }


        .skill {
            display: inline-block;

            padding: 7px 13px;

            background: #eff6ff;

            color: #1e3a8a;

            border: 1px solid #bfdbfe;

            border-radius: 20px;

            font-size: 13px;
        }

        ul {
            padding-left: 20px;
        }


        li {
            font-size: 14px;

            margin-bottom: 6px;
        }

        .technology {
            display: flex;

            flex-wrap: wrap;

            gap: 8px;
        }


        .technology span {
            padding: 6px 12px;

            background: #eff6ff;

            color: #1e3a8a;

            border: 1px solid #bfdbfe;

            border-radius: 20px;

            font-size: 13px;
        }
        footer {
            margin-top: 20px;

            padding-top: 15px;

            border-top: 1px solid #ddd;

            text-align: center;

            color: #777;

            font-size: 12px;
        }
        @media (max-width: 700px) {

            .cv {
                width: 95%;

                padding: 25px;
            }


            .header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }


            .contact {
                text-align: left;
            }


            .content {
                grid-template-columns: 1fr;
            }


            .left {
                border-right: none;

                border-bottom: 1px solid #ddd;

                padding-right: 0;

                padding-bottom: 20px;
            }

        }


        /* ===============================
           IN CV
        ================================ */

        @media print {

            body {
                background: white;
            }


            .cv {
                width: 100%;

                max-width: 100%;

                margin: 0;

                box-shadow: none;
            }

        }

    </style>

</head>


<body>


<div class="cv">

    <header class="header">

        <div>

            <h1>
                <?php echo $name; ?>
            </h1>

            <h2>
                <?php echo $position; ?>
            </h2>

        </div>


        <div class="contact">

            <p>
                📞 <?php echo $contact["phone"]; ?>
            </p>

            <p>
                ✉️ <?php echo $contact["email"]; ?>
            </p>

            <p>
                📍 <?php echo $contact["address"]; ?>
            </p>

            <p>
                🔗 <?php echo $contact["github"]; ?>
            </p>

        </div>

    </header>

    <section>

        <h3>GIỚI THIỆU</h3>

        <p>
            <?php echo $introduction; ?>
        </p>

    </section>

    <section>

        <h3>MỤC TIÊU NGHỀ NGHIỆP</h3>

        <p>
            <?php echo $careerGoal; ?>
        </p>

    </section>


    <div class="content">
        <div class="left">


            <!-- HỌC VẤN -->

            <section>

                <h3>HỌC VẤN</h3>

                <div class="item">

                    <h4>
                        <?php echo $education["school"]; ?>
                    </h4>

                    <p class="time">
                        <?php echo $education["time"]; ?>
                    </p>

                    <p>
                        Chuyên ngành:
                        <?php echo $education["major"]; ?>
                    </p>

                    <p>
                        GPA:
                        <?php echo $education["gpa"]; ?>
                    </p>

                </div>

            </section>


            <!-- KỸ NĂNG -->

            <section>

                <h3>KỸ NĂNG</h3>

                <div class="skill-list">

                    <?php foreach ($skills as $skill): ?>

                        <span class="skill">
                            <?php echo $skill; ?>
                        </span>

                    <?php endforeach; ?>

                </div>

            </section>


        </div>

        <div class="right">


            <!-- DỰ ÁN -->

            <section>

                <h3>DỰ ÁN</h3>


                <?php foreach ($projects as $project): ?>

                    <div class="project">

                        <h4>
                            <?php echo $project["name"]; ?>
                        </h4>

                        <p class="time">
                            <?php echo $project["time"]; ?>
                        </p>

                        <p>
                            <?php echo $project["description"]; ?>
                        </p>

                        <p>
                            <strong>Công nghệ:</strong>

                            <?php echo $project["technology"]; ?>
                        </p>

                        <p>
                            <strong>Vai trò:</strong>

                            <?php echo $project["role"]; ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </section>


            <!-- KINH NGHIỆM -->

            <section>

                <h3>KINH NGHIỆM</h3>

                <ul>

                    <?php foreach ($experiences as $experience): ?>

                        <li>
                            <?php echo $experience; ?>
                        </li>

                    <?php endforeach; ?>

                </ul>

            </section>


            <!-- CÔNG NGHỆ -->

            <section>

                <h3>CÔNG NGHỆ</h3>

                <div class="technology">

                    <?php

                    $technologies = [
                        "PHP",
                        "HTML",
                        "CSS",
                        "MySQL",
                        "Git",
                        "GitHub"
                    ];

                    foreach ($technologies as $technology):

                    ?>

                        <span>
                            <?php echo $technology; ?>
                        </span>

                    <?php endforeach; ?>

                </div>

            </section>


        </div>

    </div>

</div>


</body>

</html>
```

