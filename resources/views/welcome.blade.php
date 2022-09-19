@include('layout.header')

<section id="home">
    <div class="hero-fixed">
        <div class="hero">
            <div class="wrapper">
                <div class="hero-info">
                    <h1><span>D</span>ennis Overman<span>.</span></h1>
                    <p>I'm a <span>Web</span> developer<span>.</span></p>
                    <a id="sec-3" href="#skills">Skills</a>
                    <a id="sec-4" href="#projects">Projects</a>
                </div>
            </div>
        </div>
        @include('layout.animated-bg')
    </div>
</section>

<main>
    <section id="about" class="sctn-white">
        <div class="wrapper2">
            <div class="about-flex">
                <div class="about-left">
                    <h2>About Me<span>.</span></h2>
                    <h3>Hello! I'm <span>D</span>ennis Overman<span>.</span></h3>
                    <p>Hello<span>,</span> my name is <span>Dennis Overman</span> and I'm a front-end Web Developer for over 5 years of experience<span>.</span></p>
                    <br>
                    <p>I started discovering the online world when I was 14 years old<span>.</span> A few years later I discovered the world of making websites<span>,</span> My first few websites were still with wordpress. Only I missed a lot of customizable things<span>.</span> So I went looking for alternatives and I discovered the world of <span>html</span>, <span>css</span> and <span>php.</span></p>
                    <div class="info-flex">
                        <div class="hobby">
                            <h5>My Hobby<span>'</span>s<span>.</span></h5>
                            <ul>
                                <li> Programming<span>.</span></li>
                                <li> Themeparks<span>.</span></li>
                                <li> Gaming<span>.</span></li>
                            </ul>
                        </div>

                        <div class="prjts">
                            <h5>My Projects<span>.</span></h5>
                            <ul>
                                <li> Project 1<span>.</span></li>
                                <li> Project 2<span>.</span></li>
                                <li> Project 3<span>.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <div class="about-right">
                    <img src="{{asset('img/persoon.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="sctn-black">
        <div class="wrapper">
            <div class="skill">
                <h2>My Skills<span>.</span></h2>
                <div class="skill-block">
                    <p>HTML</p>
                    <div class="container">
                        <div class="skills html">90%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>CSS</p>
                    <div class="container">
                        <div class="skills css">75%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>Javascript</p>
                    <div class="container">
                        <div class="skills js">10%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>PHP</p>
                    <div class="container">
                        <div class="skills php">65%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>MySQL</p>
                    <div class="container">
                        <div class="skills mysql">45%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>Laravel</p>
                    <div class="container">
                        <div class="skills laravel">5%</div>
                    </div>
                </div>

                <div class="skill-block">
                    <p>Java</p>
                    <div class="container">
                        <div class="skills java">15%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="sctn-white">
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
        <p>Test line</p>
    </section>
</main>
</body>
</html>