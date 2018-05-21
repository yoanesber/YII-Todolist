<H2>Yii 2 Simple Application - TODOList (Advanced Project Template)</H2>

<p>
This simple project aims to develop a <b>todo list management</b> application using PHP programming language and YII Advanced Template Framework. Data is stored using MySql database.
</p>

<p>
The application folder, consists of 3 main folders, they are frontend, backend, and console. This application is created inside the frontend folder as it is designed as if to be used by the user.
</p>

<p>

## Preparing application
You only need to do these once for all.
1. Copy or clone this repository using command prompt/console with command 

   ```
   >>git clone https://github.com/yoanesber/Todolist-YII.git
   >>cd Todolist-YII
   ```

2. Run script

   ```
   >>composer update --prefer-dist
   >>composer install
   ```

3. Change the php.exe path in yii.bat file based on the configuration on your computer

   ```
   if "%PHP_COMMAND%" == "" set PHP_COMMAND=E:\xampp\php\php.exe
   ```

4. Create a new database `todolist` and adjust the `components['db']` configuration in `common/config/main-local.php` accordingly.

5. Still in command prompt/console (`Todolist-YII` folder), apply migrations with command `yii migrate`.

   ```
   >>Todolist-YII/yii migrate
   ```

6. That's all. You just need to wait for completion! Then you can run the YII Server with command `yii serve --docroot="frontend/web/"`.
  
   ```
   >>Todolist-YII/yii serve --docroot="frontend/web/"
   ```

7. After that you can access project locally by URLs: `http://localhost:8080/`