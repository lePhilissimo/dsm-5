# dsm-5
Easy to use PHP class for scoring the Dsm-5 Adult Evaluation



### Purpose
To provide a straightfoward 'Dsm-5 Adult' implementation for software offering this Evaluation.

### How it works

**It's super simple!**

1. Require 'dsm5.php' in your application
- `require 'dsm5.php';`

2. Instantiate your $test object
- `$test = new Dsm5();`

3. call GetQuestions() to retrieve the test questions *(returns a JSON object)*
- `$test->GetQuestions();`

4. call ScoreTest(), and pass in a JSON object of responses *(returns a JSON object)*
- `$test->ScoreTest($myJSONResponses);`

5. That's it!


### Test Data
Check out `test-data.json` for examples and formatting
