# TDD workshop

## Task:

Write a program that prints the numbers from 1 to 100.

But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz".  
For numbers which are multiples of both three and five print "FizzBuzz".

## End result:

A `FizzBuzz` class with two methods:
- `format` method accepts integer as a parameter and formats it according to task requirements,
- `process` method accepts integer as a parameter and returns a string with formatted numbers from 1 - parameter in separate lines, eg. when called with 15 the output should be:

```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
```

## Package setup

- Run tests locally: `vendor/bin/phpunit`

- Setup docker: `docker-compose up -d` (this will also install all composer packages)
- Run tests in docker: `bin/tests`
