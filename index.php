<html>
    <head>
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" />
        <meta name="viewport" content="initial-scale=0.5 , maximum-scale=1.0, width=device-width, user-scalable=no" />
        <style>
            #Home{                            
            }
            body{
                background-color: black;
            }
        
            .im{
                height: 100%;
                width: 100%;;
            }
            .profile{
                height: 300px;
                box-shadow: 10px 10px 10px black;
                width: 300px;
                margin-left:200px;
                background-image: url(1690317842737.jpg);
                background-size: cover;
                margin-top: 70px;
                border-radius: 50%;
                background-color: white;
                

            }
            .helo{
                font-size: 82px;
                color: yellow;
                display: block;
                margin-top: 20px;
                margin-left: 20%;
                font-family: Georgia;
            }
            .me{
                font-size: 33px;
                color: white;
                display: block;
                margin-top: -10px;
                margin-left: 25%;
                font-family: Comic Sans MS;
                
            }
            .mej{
                font-size: 28px;
                color: yellow;
                display: block; 
                margin-top: -10px;
                margin-left: 25%;
            }
            .descri{
                color: white;
                font-size:25px ;
                font-family: Helvetica;
                margin-left: 20%;
                margin-right: 10%;
                line-height:1.6;

            }
            .line{
                margin-left: 20%;
                margin-right: 350px;
                margin-top: 10px;
                border-color: black;
            }
            .follow{
                color: wheat;
                font-size: 40px;
                display: block;
                margin-left: 25%;
                margin-top: -20px;
                font-family: Comic Sans MS;
                
            }
            
            .imges{
                display: block;
                margin-left: 40%;
                filter: drop-shadow(3px 3px 6px white);
                margin-right: 20%;
            }
            .in{
                height: 50px;
                width: 50px;

            }
            .gmailc{
                
                height: 50px;
                width: 50px;
                margin-left: 20%;
            }
            .whatc{
                
                height: 50px;
                width: 50px;
                margin-left: 20%;
            }

            
            @media (max-width:1150px) {
                .imges{
                    margin-left: 30%;
                }
                .gmailc{
                    height: 5%;
                    margin-left: 20%;
                }
                .whatc{
                    height: 5%;
                    margin-left: 20%;
                }
                body{
                    padding-bottom: 50px;
                }
                .helo{
                    margin-left: 10%;
                    margin-top: 90px;
                    margin-bottom: -15px;
                    
                }
                .me{
                    display: block;
                    margin-top: -25px;
                    margin-left: 15%;
                    font-size: 50px;
                }
                .mej{
                    margin: auto;
                    display: block;
                    margin-top: -20px;
                    margin-left: 15%;
                    font-size: 30px;
                }
                .line{
                    margin: 0px;
                    margin-left: 50px;
                    margin-top: 20px;
                    margin-bottom: 10px;
                    margin-right: 50px;
                    height: 2px;
                    background-color: white;
                }
                .descri{
                    margin: 0px;
                    margin-left: 60px;
                    margin-right: 60px;
                    margin-top: 50px;
                    font-size: 35px;
                line-height:1.4;
                    
                }
                .follow{
                    display: block;
                    margin-left: 10%;
                    margin-top: 20px;
                }
                .gmail{
                    margin: 0px;
                    margin-left: 30%;
                    margin-top: 30px;

                }
                .insta{
                    margin: 0px;
                    margin-left: 50%;
                    margin-top: 30px;
                }
                .in{
                    height: 70px;
                }
                .int{
                    height: 80px;
                }
                .whatapp{
                    margin: 0px;
                    display: block;
                    margin-top: 30px;
                    height: 80px;
                    margin-bottom: 50px;
                    margin-left: 70%;
                }
            }

        </style>

        <script>

        </script>
    </head>
    <body><?php include "menu.php"?>
        <div id="temptempp">
            <div id="otherpage">
            <div id="Home">
                <div id="otherfile">
                    <span class="helo">Hello, World!!</span><br/>
                    <span class="me">It's me <span style="color: #ff004f">Ajay Chandiramani.</span> </span><br/>
                    <span class="mej">Creative &nbsp;| &nbsp; Passionate &nbsp;| &nbsp; Diligent</span>
                    <hr class="line"/>
                    <p class="descri">Hello and welcome... <br/> it's lovely to reach you. I am Ajay from gujarat, India.
                        <br/>currently i am studying Master of computer Application (M.C.A).
                        <br/>Dive into the captivating realm of technology through my blogs, where my
                        thoughts, insights, and observations paint a vivid tapestry of the
                        ever-evolving digital landscape.<br/><span style="color: rgb(239, 239, 153);"> Take a look at my work through the tabs. :D</span>
                    </p>
                    <div class="follow">Contact me on...</div>
                    <div class="imges">
                        <a href="https://msng.link/o?_._ajay_._44=ig"><img class="in" src="1690534093019.png" /></a>
                        <a href="mailto:ajaychandiramani443@gmail.com?subject=Hii"><img src="gmail.png" class="gmailc" /></a> 
                        <a href="https://wa.me/6353240138?text=Hii"><img src="whatsapp.png" class="whatc" /></a>
                    </div>
                </div>
            </div>
    
            <div id="service">
                <br/><br/><br/><br/>
                <?php include "service.php"?>
            </div>
                
            <div id="work">
                <br/><br/><br/><br/>
                <?php include "mywork.php"?>
            </div>
            
            <div id="Skils">
                <br/><br/><br/><br/>
                <?php include "skils.php"?>
            </div>
            <div id="contact">
                <br/><br/><br/><br/>
                <?php include "contact.php"?>
            </div>
        </div>
    </div>
        <!-- JavaScript -->
        <script src="script.js"></script>
    </body>
    </html>