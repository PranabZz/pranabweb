<!DOCTYPE html>
<html>

<head>
    <title>Pranab | Portfolio</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css">

</head>

<body>
    <div class="fakeScreen" draggable="true">
        <div class="fakeMenu">
            <div class="fakeButtons"></div>
            <div class="fakeButtons fakeMinimize"></div>
            <div class="fakeButtons fakeZoom"></div>
        </div>
        <div class="fakeBody">
            <p class="line3"><i><span style="display: block; text-align: center;">Hello welcome to my Portfolio</span>
                    <br>
                    To check out my work and to know about me simply give some command and ask my terminal <br> <br>
                    You can use the "help" command to check out all the commads that you can use</i></p>
            <div id="terminal">
                <div id="output"></div>
                <div id="input">
                    <div class="terminal-input" id="text">
                        <div><span id="prompt" class="line1"></span>user@pranabraj$<input type="text" id="cmd"
                                autofocus></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="icons">
            <div class="image">
                <img height="50" width="50" src="{{asset('img/fire.png')}}">
            </div>
            <div class="image">
                <img height="50" width="50" src="{{asset('img/file-manager-10.png')}}">
            </div>
            <div class="image">
                <img height="50" width="50" src="{{asset('img/vs.png')}}">
            </div>
            <div class="image terminal">
                <img height="50" width="50" src="{{asset('img/terminal.png')}}">
            </div>
            <div class="image">
                <a href="https://github.com/PranabZz"><img height="50" width="50" src="{{asset('img/git.png')}}"></a>
            </div>
            <div class="image">
                <a href="https://www.linkedin.com/in/pranab-raj-kc-pandey-6a12241b7/"><img height="50" width="50"
                        src="{{ asset('img/linkedin.png') }}"></a>
            </div>
            <div class="images">
                <a href="mailto:pranabkca321@gmail.com"><img height="50" width="80" src="{{asset('img/gmail.png')}}"></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script>
        $(document).ready(function () {
            var $cmd = $("#cmd");
            var $output = $("#output");

            var helpInfo = {
                clear: "To clear the screen",
                cd: "Use this to change the directories",
                ls: "Input all the pages or directories available",
            };

            var listInfo = [
                "about_me",
                "projects",
                "skills",
                "contact"
            ];

            var contactInfo = {
                github: "https://github.com/pranabZz",
                linkedin: "https://www.linkedin.com/in/pranab-raj-kc-pandey-6a12241b7",
                facebook: "https://www.facebook.com/username22.a/",
                mail: "mailto:pranabkca321@gmail.com",
            }

            var skillInfo = {
                Frontend: {
                    "JavaScript/Tailwind" : "*******",
                },
                Backend: {
                    "Laravel/NodeJs": "********",
                },
                Problem_Solving: {
                    "Algorithms/Data_Structures": "****",
                },
                Communication: {
                    "Verbal/Written": "****",
                },
                Linux: {
                    "Shell_Scripting": "******",
                }
            };

            var aboutInfo = [
                'As a passionate computer science student, my focus lies in backend development, where I find joy in designing and implementing core functionalities for web applications and systems. Beyond coding, I am deeply curious about understanding computer architecture and how hardware and software collaborate to create the technology we use daily. Embracing challenges and constantly seeking knowledge, I envision myself as a proficient backend developer, contributing to innovative projects and making a positive impact in the dynamic world of technology.'
            ]

            var projectInfo = {
                PITC: "https://github.com/primeitclub/itc",
                Devlink: "https://github.com/PranabZz/Devlink",
                Skill_it: "https://github.com/primeitclub/skillit",
                Python_game: "https://github.com/PranabZz/python-game1",
            };


            function processCommand(cmd) {
                if (cmd === "help") {
                    showHelp();
                } else if (cmd === "clear") {
                    clearScreen();
                } else if (cmd === "ls") {
                    showList();
                } else if (cmd === "cd project") {
                    showProject();
                } else if (cmd === "cd skills") {
                    showSkills();
                } else if (cmd === "cd about_me") {
                    showAbout();
                } else if (cmd === "cd contact") {
                    showContact();
                }else {
                    showOutput("No such commad called `" + cmd + "` check out `help` to get all commands available");
                }
            }

            function showHelp() {
                for (var cmd in helpInfo) {
                    showOutput(cmd + ": " + helpInfo[cmd]);
                }
            }

            function showList() {
                for (var i in listInfo) {
                    showOutput(" / " + listInfo[i]);
                }

            }

            function showSkills() {
                showOutput(`<table><tr><th>Langugae/Framework</th><th>Level</th><th>Skill</th></tr>`);
                for (var category in skillInfo) {
                    for (var skill in skillInfo[category]) {
                        showTable('<tr><td>' + skill + '</td>' + '<td>' + skillInfo[category][skill] + '</td>' + '<td>' + category + '</td>');
                    }
                }
            }

            function showProject() {
                for (var i in projectInfo) {
                    showOutput("<a href='" + projectInfo[i] + "'>" + i + "</a>");
                }

            }

            function showContact() {
                for (var i in contactInfo) {
                    showOutput("<a href='" + contactInfo[i] + "'>" + i + "</a>");
                }

            }

            function showAbout(){
                $output.append("<div>"+aboutInfo+"</div><br>");
            }

            function clearScreen() {
                $output.empty(); // Clear the content of the output div
            }

            function addNewInputField() {
                if ($("#cmd").length === 0) {
                    var newInput = `
      <div class="terminal-input" id="text">
        <div><span id="prompt" class="line1"></span>user@pranabraj$<input type="text" id="cmd" autofocus></div>
      </div>
    `;
                    $output.append("");
                    $output.append(newInput);
                    $cmd = $("#cmd:last"); // Update the $cmd variable to the new input field
                    $cmd.focus();
                }
            }

            function showOutput(message) {
                $output.append("<div>" + message + "</div><br>");
            }

            function showTable(message) {
                $output.append("<table>" + message + "</table><br>");
            }

            $cmd.focus();

            $(document).on("keydown", "#cmd", function (e) {
                if (e.which === 13) {
                    var cmd = $cmd.val();
                    if (cmd !== "") {
                        showOutput(`
      <div class="terminal-input" id="text">
        <div><span id="prompt" class="line1"></span>user@pranabraj$<input type="text" id="cmd" autofocus></div>
      </div>
    ` + cmd); // Display entered command
                        processCommand(cmd);
                        $cmd.val("");
                        $cmd.focus();
                    }
                    addNewInputField();
                }
            });
        });


    </script>

</body>

</html>