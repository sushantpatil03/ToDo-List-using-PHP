<?php 
require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To-Do Master By Group 7</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="bg-gray-700 text-white flex ">
    <ul class="py-4 flex space-x-8 justify-end px-10">
    <li class="cursor-pointer text-xl">To-Do Master By Group 7</li>
</ul>
    <span class="flex" style="margin-left: 670px;">
    <a href="about_us.html" class="ml-72 my-3 text-xl"><p>About Us</p></a>
    <a href="login.php" class="mx-10 my-3 text-xl"><p>Logout</p></a>
    </span>
</nav>
    <div class="main-section">
       <div class="add-section">
          <form action="app/add.php" method="POST" autocomplete="off">
             <?php if(isset($_GET['mess']) && $_GET['mess'] == 'error'){ ?>
                <input type="text" 
                     name="title" 
                     style="border-color: #ff6666"
                     placeholder="This field is required" />
                     <input type="date" id="start" name="due" required>
                     
              <button type="submit">Add  </button>

             <?php }else{ ?>
              <input type="text" 
                     name="title" 
                     placeholder="What do you need to do?" />
                     <label for="start" style="margin-left: 20px; font-family: sans-serif;">Due Date:</label>
              <input type="date" id="start" name="due" required>
              <button type="submit">Add &nbsp; <span>&#43;</span></button>
             <?php } ?>
          </form>
       </div>
       <?php 
          $todos = $conn->query("SELECT * FROM todos ORDER BY id DESC");
       ?>
       <div class="show-todo-section">
            <?php if($todos->rowCount() <= 0){ ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/f.png" width="100%" />
                        <img src="img/Ellipsis.gif" width="80px">
                    </div>
                </div>
            <?php } ?>

            <?php while($todo = $todos->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="todo-item<?php if(time()>$todo['deadline'])echo "-deadline";else if($todo['checked'])echo "-done";?>">
                    <span id="<?php echo $todo['id']; ?>"
                          class="remove-to-do">x</span>
                    <?php if($todo['checked']){ ?> 
                        <input type="checkbox"
                               class="check-box"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               checked />
                        <h2 class="checked"><?php echo $todo['title']; ?></h2>
                    <?php }else { ?>
                        <?php 
                            if (time()<$todo['deadline']) {
                                ?>
                                <input type="checkbox"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               class="check-box" />
                                <h2><?php echo $todo['title']; ?></h2>
                            <?php    
                            }else{
                                //If deadline is crossed
                                ?>
                                <input type="checkbox"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               class="check-box" />
                            <h2 style="color:white;"><?php echo $todo['title']; ?></h2>

                            <?php
                            }
                            ?>
                        <!-- <input type="checkbox"
                               data-todo-id ="<?php echo $todo['id']; ?>"
                               class="check-box" />
                        <h2><?php echo $todo['title']."---BLOCK4---"; ?></h2> -->
                    <?php } ?>
                    <br>
                    <small>created: <?php echo $todo['date_time'] ?></small> 
                    <small>deadline: <?php
                        if($todo['date_created']==1)
                            echo "deadline not added";
                        else
                            echo date('d/m', $todo['deadline']); 
                    ?></small> 
                </div>
            <?php } ?>
       </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.remove-to-do').click(function(){
                const id = $(this).attr('id');
                
                $.post("app/remove.php", 
                      {
                          id: id
                      },
                      (data)  => {
                         if(data){
                             $(this).parent().hide(600);
                         }
                      }
                );
            });

            $(".check-box").click(function(e){
                const id = $(this).attr('data-todo-id');
                
                $.post('app/check.php', 
                      {
                          id: id
                      },
                      (data) => {
                          if(data != 'error'){
                              const h2 = $(this).next();
                              if(data === '1'){
                                  h2.removeClass('checked');
                                  window.location.reload();
                              }else {
                                  h2.addClass('checked');
                                //   alert('working');
                                  window.location.reload();
                              }
                          }
                      }

                );
            });
        });
    </script>
</body>
</html>