<!--HEAD & HEADER-->
<?php require_once "templates/header.php"; ?>
            
<!--NAV & ALERT-->
<?php require_once "templates/nav.php"; ?> 

<!--LEADERBOARD SCRIPT-->
<?php require_once "scripts/problemscript.php"; ?>

            
            <div id="top">
                <div id="left">
                    
                    <!--PURPOSE SECTION-->
                    <section id="about">
                        <div id="about-content">
                            <h2>Purpose</h2><br/>
                            <p>Programming problems are a great way to prepare for contests, practice your coding skills, and exercise problem solving. With that in mind, a new problem from <a href="https://dmoj.ca/" target="_blank">DMOJ</a> will be posted here every Thursday. By participating in and solving these problems, you will earn points that go towards monthly and year-end prizes. You don't have to make a commitment to participate every week <span class="light">(because who had time for that at Central?)</span>; simply try a problem at home when you have time, or come in during one of our meetings and solve it with the help of your peers.</p><br/>
                            <!--<p><span class="strong">Last week's top scorer: </span><b><a href="https://dmoj.ca/user/" target="_blank"></a></b></p>-->
                        </div>
                    </section>

                    
                    <!--THIS WEEKS PROBLEM-->
                    <section id="this-week">
                        <h2>This Week's Problem</h2>
                        <div class="prob">
                            <h3><a href="https://dmoj.ca/problem/ccc04j3" target="_blank">CCC '04 J3 - Smile with Similes &raquo;</a></h3>
                            <ul>
                                <li><b>Points:</b> 3</li>
                                <li><b>Time limit:</b> 2.0s</li>
                                <li><b>Author:</b> CCC</li>
                            </ul>
                            <br/><p>Output all possible similes from a list of adjectives and nouns.</p>
                        </div>
                    </section>
                </div>

                
                
                <!--LEADERBOARD-->
                <section id="leaderboard">
                    <div id="leader-title">
                        <h2>Leaderboard</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Rank</th>
                            <th>Username</th>
                            <th><a href="#disclaimer">Points <sup>*</sup></a></th>
                        </tr>
                        <?php
                            $rank = 1;
                                
                            for($x=0; $x<=9; $x++){
                                echo '<tr>
                                        <td class="rank">' . sprintf('%02d', $rank) . '</td>
                                        <td class="user"><a href="https://dmoj.ca/user/' . $user[$x] . '" target="_blank">' . $user[$x] . '</a></td>
                                        <td class="points">' . $points[$x] . '</td>
                                    </tr>';
                                
                                 if($points[$x+1]!=$points[$x] || $points[$x+1]==NULL){
                                     $rank++;   
                                 }
                            }
                        ?>
            
                    </table>
                
                    <h3 id="disclaimer"><sup>*</sup> Points are subject to change. We're still working on how we score problems.</h3>
                </section>
            </div>
            
            
            
            <!--PAST PROBLEMS-->
            <hr style="height: 30px; border: 0;">
            
            <h2>Past Problems</h2>
            <hr style="height: 25px; border: 0;">

            <section id="past-probs">
                <div class="row">
                    <?php
                        for($x=0; $x<count($name); $x++){
                            echo '<div class="prob">
                            <p class="date"><b>Date: </b>' . $date[$x] . '</p><br/>
                            <h3><a href="https://dmoj.ca/problem/' . $url[$x] . '" target="_blank">' . $name[$x] . ' &raquo;</a></h3>
                            <ul>
                                <li><b>Points:</b> ' . $points[$x] . '</li>
                                <li><b>Time limit:</b> ' . number_format($limit[$x], 1) . '</li>
                                <li><b>Author:</b> ' . $author[$x] . '</li>
                            </ul>
                            <br/><p>' . $description[$x] . '</p>' . /*'<br/>
                            <p class="top-score"><b>Top Score: </b><a href="https://dmoj.ca/user/' . $top[$x] . '" target="_blank">' . $top[$x] . '</a></p>*/
                        '</div>';
        }
                    ?>
                </div>
            </section>

            <hr style="height: 100px; border: 0;">
            
            
            
<!--FOOTER & TOP BUTTON-->
<?php require_once "templates/footer.php"; ?>    