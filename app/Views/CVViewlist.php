<!DOCTYPE HTML>

<html>

<head>
    <meta charset="UTF-8">
    <title>First M. Last</title>
    <style>
        body {
            margin: 40px;
            font-family: "Adobe Caslon Pro", "Minion Pro", serif;
            font-size: 12pt;
        }

        header {
            font-family: "Trajan Pro", serif;
            padding-bottom: 10px;
        }

        header h1 {
            font-size: 20pt;
            letter-spacing: 2pt;
            border-bottom: 1px solid black;
            margin-bottom: 4px;
        }

        header span {
            font-size: 10pt;
            float: right;
        }

        section h2 {
            font-family: "Trajan Pro", serif;
            font-size: 14pt;
        }

        section.coverletter {
            margin-top: 40px;
        }

        section.coverletter p {
            margin-left: 0px;
        }

        section ul {
            list-style-type: circle;
        }

        .ul-none {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .jobtable {
            display: table;
            width: 100%;
            border-bottom: 1px solid black;
            margin-left: 20px;
        }

        .edtable {
            display: table;
            width: 100%;
            margin-left: 20px;
            padding-bottom: 15px;
        }

        .skillstable {
            display: table;
            width: 100%;
        }

        .biodatatable {
            display: table;
            width: 100%;
        }

        .toptable {
            display: table;
            width: 100%;
        }

        .table {
            display: table;
            margin-left: 20px;
        }

        .tablerow {
            display: table-row;
        }

        .jobtitle {
            display: table-cell;
            font-style: italic;
        }

        .italic {
            font-style: italic;
        }

        .right {
            display: table-cell;
            text-align: right;
        }

        .cell {
            display: table-cell;
        }

        .onlinecell {
            font-style: italic;
            padding-right: 10px;
        }

        .urlcell {
            display: table-cell;
            letter-spacing: 1px;
        }

        .pagebreak {
            page-break-before: always;
        }
    </style>
</head>

<body>
    <header id="info">
        <h1 style="text-transform: uppercase;"><?= $mahasiswa->nama ?></h1>
        <span><?= $mahasiswa->alamat ?> &bull;
            <?= $mahasiswa->no_hp ?> &bull;
            <?= $mahasiswa->email ?></span>
    </header>
    <br />
    <section id="top">
        <div class="toptable">
            <div class="tablerow">
                <div id="biodata" class="cell">
                    <h2>About me</h2>
                    <p><?= $mahasiswa->tentang_saya ?></p>
                </div>
                <div id="biodata" class="cell" style="width:60%; padding-left: 40px;">
                    <h2>Biodata</h2>
                    <div class="biodatatable">
                        <div class="tablerow">
                            <ul class="cell ul-none">
                                <li>Nama</li>
                                <li>Tempat, tanggal lahir</li>
                                <li>Agama</li>
                                <li>Jenis Kelamin</li>
                                <li>Status</li>
                            </ul>
                            <ul class="cell ul-none">
                                <li>:</li>
                                <li>:</li>
                                <li>:</li>
                                <li>:</li>
                                <li>:</li>
                            </ul>
                            <ul class="cell ul-none">
                                <li> Hilmi Khoirulloh</li>
                                <li> Cirebon, 200</li>
                                <li> Islam</li>
                                <li> Laki - laki</li>
                                <li> Jomblo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skills">
        <h2>Experience</h2>
        <div class="skillstable">
            <div class="tablerow">
                <ul class="cell">
                    <li>Pants inspection</li>
                    <li>Squirrel chasing</li>
                    <li>Basket weaving</li>
                </ul>
                <ul class="cell">
                    <li>Synergetic synthesis</li>
                    <li>Flagrant goofing</li>
                    <li>Perennial loafing</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="education">
        <h2>Education</h2>
        <h4 style="text-decoration: underline;">Formal</h4>
        <div class="edtable">
            <div class="tablerow">
                <span class="jobtitle">Quantum Dance, MS</span>
                <span class="right">September 2008</span>
            </div>
            <div class="tablerow">
                <span>Crazy Go Nuts University</span>
                <span class="right">Population, Tire</span>
            </div>
        </div>
        <h4 style="text-decoration: underline;">Non Formal</h4>
        <div class="edtable">
            <div class="tablerow">
                <span class="jobtitle">Fruit Counting, BA</span>
                <span class="right">February 2006</span>
            </div>
            <div class="tablerow">
                <span>Corrugated College of Crepes</span>
                <span class="right">Calamansi, CA</span>
            </div>
        </div>
    </section>
    <section id="skills">
        <h2>Skill</h2>
        <div class="edtable">
            <div class="tablerow">
                <span class="right italic">September 2008</span>
            </div>
            <div class="tablerow">
                <span>Bahasa</span>
            </div>
        </div>
    </section>
</body>

</html>