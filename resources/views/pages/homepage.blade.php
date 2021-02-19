@extends('layouts.app')

@section('title', 'Home Page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="">Home Page</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="card-text text-justify">
                                The journal Forestry Ideas is issued by the University of Forestry in Sofia. It is a
                                peer-reviewed
                                scientific journal publishes materials in the field of forestry, landscape architecture,
                                ecology and
                                environmental protection. Manuscripts go through a peer review process by at least two
                                independent
                                anonymous reviewers.
                                The journal is open access and all articles published are freely available online. This is
                                made
                                possible by an article-processing charge (APC) that covers the range of publishing services.
                                The APC
                                is payable when the manuscript is editorially accepted and before publication.
                            </p>

                            <p class="card-text text-justify">
                                Forestry Ideas is published two times a year: No 1 (July/August) and No 2
                                (December/January).
                            </p>

                            <p class="card-text text-justify">
                                The Journal is abstracted/indexed in: SCOPUS database of Elsevier, CiteFactor, CAB Abstracts
                                (AgBiotechNet, AgBiotech News and Information, Agricultural Economics Database, Agroforestry
                                Abstracts, Agricultural Engineering Abstracts, Animal Breeding Abstracts, Biocontrol News
                                and
                                Information, Crop Physiology Abstracts, Environmental Impact, Environmental Science
                                Database,
                                Forestry Abstracts, Forest Products Abstracts, Forest Science Database, Horticultural
                                Science
                                Abstracts, Irrigation and Drainage Abstracts, Plant Breeding Abstracts, Plant Protection
                                Database,
                                Poultry Abstracts, Review of Agricultural Entomology, Review of Plant Pathology, Seed
                                Abstracts,
                                Soils and Fertilizers Abstracts, Soil Science Database, Weed Abstracts, World Agricultural
                                Economics
                                and Rural Sociology Abstracts), AGRIS-FAO and OAJI.
                            </p>

                            <p class="card-text text-justify">
                                SCimago Jounal Rank (SJR): 2019=0.115 Q4; 2018=0.103 Q4; 2017=0.101 Q4; 2016=0.100
                            </p>

                            <h4 class="card-title">History</h4>

                            <p class="card-text text-justify">
                                "Forestry Ideas" was established in 1932 as an organ of the Society of academic foresters
                                and it was
                                published until 1943. Its first and longtime chief editor was prof. Vassil Stoyanov. Since
                                1939
                                "Forestry Ideas" and the journals "Forest Review" were press organs of the united
                                organization the
                                Society of Foresters in Bulgaria. The journal was resumed in 1994 and it is issued by the
                                Publishing
                                House of the University of Forestry. Since 2010 it is published in English.
                            </p>

                            <div class="card-tex mb-4">
                                <a href="../../images/Old_Journal/big/lesovdska_misal_I.jpg" rel="lightbox" title=""><img
                                        height="100" src="../../images/Old_Journal/tumb/lesovdska_misal_I.jpg"
                                        width="68" /></a><span style="background-color: rgb(255, 255, 255);"> </span><a
                                    href="../../images/Old_Journal/big/lesovdska_misal_I_page2.jpg" rel="lightbox"
                                    title=""><img height="100"
                                        src="../../images/Old_Journal/tumb/lesovdska_misal_I_page2.jpg"
                                        width="66" /></a><span style="background-color: rgb(255, 255, 255);"> </span><a
                                    href="../../images/Old_Journal/big/lesovdska_misal_I_page3.jpg" rel="lightbox"
                                    title=""><img height="100"
                                        src="../../images/Old_Journal/tumb/lesovdska_misal_I_page3.jpg"
                                        width="67" /></a><span style="background-color: rgb(255, 255, 255);"> </span><a
                                    href="../../images/Old_Journal/big/lesovdska_misal_XII.jpg" rel="lightbox" title=""><img
                                        height="100" src="../../images/Old_Journal/tumb/lesovdska_misal_XII.jpg"
                                        width="68" /></a><span style="background-color: rgb(255, 255, 255);"> </span><a
                                    href="../../images/Old_Journal/big/lesovdska_misal_XII_page2.jpg" rel="lightbox"
                                    title=""><img height="100"
                                        src="../../images/Old_Journal/tumb/lesovdska_misal_XII_page2.jpg"
                                        width="64" /></a><span style="background-color: rgb(255, 255, 255);"> </span><a
                                    href="../../images/Old_Journal/big/lesovdska_misal_2010.jpg" rel="lightbox"
                                    title=""><img height="100" src="../../images/Old_Journal/tumb/lesovdska_misa_2010.jpg"
                                        width="64" /></a><a href="../../images/Old_Journal/big/lesovdska_misal_2017.jpg"
                                    rel="lightbox" title=""><img height="100"
                                        src="../../images/Old_Journal/tumb/lesovdska_misal_2017.jpg" width="64" /></a>
                            </div>

                            <h4 class="card-title">Editorial Advisory Board</h4>

                            <p class="card-text">
                                Ioan Vasile <b>Abrudan</b> - Transilvania University of Brasov, Romania<br>
                                Sezgin <b>Ayan</b> - Kastamonu Universitesi, Turkey<br>
                                Dilyanka <b>Bezlova</b> - University of Forestry, Sofia, Bulgaria<br>
                                Ignacio J. <b>Di­az-Maroto</b> - University of Santiago de Compostela, Spain<br>
                                Igor <b>Drobyshev</b> - Lund University, Sweden<br>
                                Emil <b>Galev</b> - University of Forestry, Sofia, Bulgaria<br>
                                Dimitar <b>Georgiev</b> - University of Forestry, Sofia, Bulgaria<br>
                                Sonia A. <b>Hirt</b> - University of Georgia, USA<br>
                                Ivan <b>Iliev</b> - University of Forestry, Sofia, Bulgaria<br>
                                Petar <b>Kitin</b> - Oregon State University, USA<br>
                                Georgi <b>Kostov</b> - University of Forestry, Sofia, Bulgaria<br>
                                Kresimir <b>Krapinec</b> - University in Zagreb, Croatia<br>
                                Ani <b>Mardiastuti</b> - Bogor Agricultural University (IPB University), Indonesia<br>
                                Hristo <b>Mihailov</b> - University of Forestry, Sofia, Bulgaria<br>
                                Ivan <b>Paligorov</b> - University of Forestry, Sofia, Bulgaria<br>
                                Elsa <b>Pastor</b> - Polytechnic University of Catalonia, Barcelona, Spain<br>
                                Rossitsa <b>Petrova</b> - University of Forestry, Sofia, Bulgaria<br>
                                Dmitry <b>Schepaschenko</b> - Siberian Federal University, Russia<br>
                                Kiril <b>Sotirovski</b> - Ss. Cyril and Methodius University, Skopje, Macedonia<br>
                                Yulin <b>Tepeliev</b> - University of Forestry, Sofia, Bulgaria<br>
                                Rumen <b>Tomov</b> - University of Forestry, Sofia, Bulgaria<br>
                                Neno <b>Trichkov</b> - University of Forestry, Sofia, Bulgaria<br>
                                Jozef <b>Viglasky</b> - Technical University in Zvolen, Slovakia<br>
                                Yaoqi <b>Zhang</b> - Auburn University, USA<br>
                            </p>

                            <p class="card-text">
                                Language Editors: Dilyanka <b>Bezlova</b>, Alexander <b>Delkov</b>, Yordanka <b>Ivanova</b>,
                                Stefka
                                <b>Kitanova</b>,
                                Yulin
                                <b>Tepeliev</b>, Petar <b>Zhelev</b><br>
                                Production Editor: Magdelina <b>Bozhankova</b><br>
                                Technical Editor: Toma <b>Tonchev</b><br>
                                Cover Design: Jordan <b>Markov</b><br>
                            </p>


                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h5>Editors</h5>
                                </div> --}}
                                <div class="card-body">
                                    <p><b>Editor-in-Chief</b></p>
                                    Milko <b>Milev</b><br>
                                    University of Forestry<br>
                                    10 Kliment Ohridski blvd.<br>
                                    1797 Sofia, Bulgaria<br>
                                    E-mail: forconf2010@abv.bg<br>
                                </div>
                                <div class="card-body">
                                    <p><b>Associate Editor</b></p>
                                    Petar <b>Zhelev</b><br>
                                    University of Forestry<br>
                                    10 Kliment Ohridski blvd.<br>
                                    1797 Sofia, Bulgaria<br>
                                    E-mail: zhelev@ltu.bg<br>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- <h5 class="card-title">Title</h5> --}}



                </div>
                {{-- <div class="card-footer">
                    Footer
                </div> --}}
            </div>
        </div>
    </div>



    {{-- @foreach ($homepage as $home)
        {!!  $home->homeText !!}
    @endforeach --}}

@endsection
