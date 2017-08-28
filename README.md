# PHP Redirective (a mini-project)
This project is intended as an exercise in PHP.


## what it do
When this PHP web page is requested by a visitor, it checks to see if a query variable of 'url' exists and if it begins with a string that matches 'http://'. If true, then it redirects to the URL in the query variable 'url'. If false, then it renders the html from the PHP.  
For example, if the visitor requests the PHP page at:
`http://erikhatfield.com/example.php?url="http://3rik.me"`
The PHP program redirects the browser window to [3rik.me/](http://3rik.me)

Else, it renders the HTML of example.php.



## what is needed
Research for this project is conducted on three subjects as follows:
1. PHP Query variables: [$_GET](http://php.net/manual/en/reserved.variables.get.php)
2. Searching the beginning of a string for a matching string in PHP: [substr](https://stackoverflow.com/questions/2790899/how-to-check-if-a-string-starts-with-a-specified-string)
3. PHP redirect: redirecting to a URL on an independent domain [header/redirect](http://php.net/manual/en/function.header.php)
	
	
	
	