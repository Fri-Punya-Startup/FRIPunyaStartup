<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
        <link rel="stylesheet" href="./css/errors/errors.css">
        <title>Page Not Found</title> 

        <style>
            .containers{
                color: white;
                padding-top: 120px !important;
                padding: 100px;
                position: relative;
                height: 760px;
                width: 100%;
                background: linear-gradient(
                    45deg, #C0DB64, #4947C7, #171591,#4947C7, #adace6
                );
                background-size: 400% 400%;
                animation: animate-background 10s infinite ease-in-out;
            }
            @keyframes animate-background {
                0% {
                    background-position: 0 100% ;
                }
                50% {
                    background-position: 100% 50%   ;
                }
                100% {
                    background-position: 0 100%;
                }
            }

            .row{
                background-color: rgba(255,255,255,0.7)
            }

            h5{
                color: black !important;
            }
        </style>
    </head> 
<body> 
    <div class="containers">
        <div class="row">
            <div class="col-sm-6">
                <h1>404 Not Found</h1>
                <br/><br/><br/><br/><br/><br/><br/>
                <h5>Oops! We can't find it😔</h5>
                <h5>Let's back to our home.</h5>
                <a href="/" class="btn btn-primary">Back To Home</a>
            </div>
            <div class="col-sm-6">
                <div class="align">
                    <img src="../../../../../../../../../../../images/notfound.svg" height="352" width="320">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body> 
</html>