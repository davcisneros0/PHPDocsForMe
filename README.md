# PHPDocsForMe
relearning PHP, just adding all my notes and stuff I have learned on here.

# ARRAYS
- Use a Foreach loop to go through each item (numbers, items) in an array foreach($books as $book) {}

# ASSOCIATIVE ARRAYS
- arrays that that use named keys that you assign to them

# FUNCTIONS/FILTERS
- = sign to assign a value
- === to check equality
- Functions are the verbs of the programming world
- Default parameters can be done with functions, such as function setHeight($minheight = 50) {}
- To accept an UNKNOWN number of arguments in a function, you can use the ... operatora
    - It must be the LAST argument 

# Lambda Functions
- array_filter: filter elements of an array using a callback function
    - array_filter(array $array, ?callable $callback = null, int $mode = 0): array
        - array, an array to filter over
        - callback, the callback function to use or an annoymous function
        - mode, flag determining what arguments are sent to the callback


# Views
    - Part of the application that is responsible for presenting data or the user
    - Typically an HTML file or template
    - Part of the MWC architecture

# Partials
    - Reusable pieces of code or templates that can be included in other files
    - Used for headers, footers, nav menus, or any section of a web page that is repeated across multiple pages

# Superglobals
    - built-in global arrays that provide access to various types of data 
    - $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_FILES, $_SERVER

# Routers
    - If user encounters a page that does not exist, we can handle it using a status code / ERROR 404 page
        
# PDO
    - PHP Data Objects 
    - USE TRY/CATCHH TO CONNECT TO SQLITE DATABASE
        - USE A PDO, PREPARE, EXECUTE, FETCH ALL

# SQL Injections
    - One way to prevent: PREPARED statements with parameterized queries
        - Separate SQL logic from the data
            - $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
              $stmt->execute(['username' => $username]);

    - Another way to prevent: input validation or sanitizing input
        - Using regex or using htmlspecialchars() 

# Pure Function
    - function that is not dependent on state or values from outside of the function
    - if it always returns the same result for same argument values
    - no side effects like modifying arguments or outputting something
    - only result is a return value
    - Can be static, and a new instance will not need to be created