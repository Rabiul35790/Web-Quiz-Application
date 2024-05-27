<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Quiz.me</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="webquiz.php">WEB</a></li>
                    <li><a href="english.php">ENGLISH</a></li>
                    <li><a href="math.php">MATHEMATICS</a></li>
                    <li><a href="partinfo.php">PARTICIPANT<br/>INFORMATION</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <input type="submit" name="" value="SEARCH">
            </div>

        </div> 
        <div class="content">
            <div class="quiz-container" id="quiz">
                <div class="quiz-header">
                  <h2 id="question">Question Text</h2>
                  <ul>
                    <li>
                      <input type="radio" name="answer" id="a" class="answer">
                      <label for="a" id="a_text">Answer</label>
                    </li>
            
                    <li>
                      <input type="radio" name="answer" id="b" class="answer">
                      <label for="b" id="b_text">Answer</label>
                    </li>
            
                    <li>
                      <input type="radio" name="answer" id="c" class="answer">
                      <label for="c" id="c_text">Answer</label>
                    </li>
            
                    <li>
                      <input type="radio" name="answer" id="d" class="answer">
                      <label for="d" id="d_text">Answer</label>
                    </li>
            
                  </ul>
                </div>
            
                <button id="submit">Submit</button>
              </div>
              <div class="footer">
              <p>Copyright @Rabiul</p>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
    
    <script src="scripteng.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </body>
</html>