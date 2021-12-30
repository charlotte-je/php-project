</session_start();/>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WOOTZZA!웃기는짜장 방문을 환영합니다</title>
        <link rel=" stylesheet" type="text/css" href="mystyle.css"/>
        <style>
            {
                background-color: black;
            }
            body{
            }
            header{
                width:100%;
                height: 100px;
            }
            nav{
                width:100%;
                height:23px;
                border-top: 1px solid white;
                border-bottom:1px solid white;
                margin-right:10%;
                background-color:white;
                color: black;
            }
            nav a{
                background-color: white;
                color:black;
                text-decoration: none;
            }
            #left {
                position: fixed;
                left:30px; top:200px; bottom: 0;
                width :200px;
            }
            #left_ul{
                background-color: white;
                list-style:none;
                margin:0;
                padding:0;
            }
            #left ul li a{
                background-color:white;
                color:black;
                text-decoration:none;
            }
            #main{
                padding-left:250px;
                padding-top: 20px;
                left: 250px; top:200px; bottom:0;
                width:60%
                height:500px;
            }
            
        </style>
    </head>
    <body>
        <header align= center>
            <h1>
                <a href="index.php">WOOTZZA</a>
            </h1>
        </header>
        </if($_SESSION['userid']){
            echo "<nav align=right>.$_SESSION['user_nic'] &nbsp&nbsp&nbsp
                <a href="logout.php">로그아웃</a>
                <a target='iframe1' href='my_page.php'>마이페이지</a>
        </nav>";
        }
        else{
            />
            <nav align=right>
                <a href="login.php">로그인</a>
                <a href="sign_up.php">회원가입</a>
            </nav>
            </
        }
        />
        <aside id="left">
            <h4>카테고리</h4>
            <ul>
        <li><a target="iframe1" href="board.php?board_id=notice">공지사항</a></li>
        <li><a target="iframe1" href="board.php?board_id=board">메인게시판</a></li>
 
        <li><a target="iframe1" href="board.php?board_id=music">정치</a></li>
        <li><a target="iframe1" href="board.php?board_id=movie">게임</a></li>
      </ul>
    </aside> 
    <section id="main">
      <article id="article1">
        <iframe name="iframe1" src="main.php" width="1000px" height="700px" seamless></iframe>
      </article>
    </section>
   
  
    </body>
</html>