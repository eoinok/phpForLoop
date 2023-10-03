"# phpForLoop Example" 

Clone this repo into your www folder under laragon. In the command prompt ***cd*** into the ***\laragon\www folder***. Type ***git clone your-repo-url*** (Get your repo url from github after creating the repo). Then ***cd*** into the folder you have just cloned by typing ***cd labWeek3-yourgithubid***. Once you are in the correct folder keep this command window open so you can type in your git commands as required.

# Part 1

Modify the code in phpForLoop.php so that it counts up to 20. Test your code by visiting http://localhost/phpForLoop.php (remember that to test your code the webserver must be running under the laragon app). Once it works - commit and push your changes by typing ***git commit -am "put a good msg here"*** and then ***git push origin main***

# Part 2 

Create a new PHP file called loopInFives.php in your cloned labWeek3 folder. Use the code from Part 1 but this time mdify the loop so that after every count of five the program puts out a line break. This will mean that each group of five will be on it's own line. 
**Hint** Put an if statement into your loop that checks to see if the contents of the variable which contains your loop counter ($i) can be divided evenly by 5. i.e. the remainder (modulus) when you divide by 5 is zero. If this condition is true, put out a HTML line break to the screen. A line break in HTML can be achieved using the <BR> tag. To put something out to the screen in php you must use the echo command.
Test your code by visiting http://localhost/loopInFives.php. When your code is working add your new file by typing ***git add .*** at the command prompt. Then commit your changes by typing ***git commit -am "put a commit msg here"***. Finally push your changes by typing ***git push origin main***.

# Part 3

Create another new PHP file called nestedForLoop.php. In this file create a nested for loop which draws a fiftenn by twenty HTML table. i.e. There should be fifteen rows and twenty columns. The outer loop should use the variable $i as a counter(for the rows). The inner loop should use the variable $j as counter(for the columns). The inner loop should draw table cells by echoing <td>$i,$j</td>.
