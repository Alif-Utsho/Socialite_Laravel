
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avanteca Limited</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/38b09dcc3b.js" crossorigin="anonymous"></script>
</head>
    <body style="background-color: #d2c9ff;">
        <section class="h-100 py-3" style="background-color: #d2c9ff;">
            <div class="container py-4 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-8 col-xl-6">
                        <div class="card rounded-3">

                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                                <form class="px-md-2">

                                {{csrf_field()}}

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1q">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" />
                                    
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-outline datepicker">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="text" name="email" class="form-control" id="email" />
                                            
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-outline datepicker">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" />
                                            
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg mb-1 col-12">Register</button>

                                    <div>
                                        <a href="{{route('google.login')}}" class="btn btn-google bg-danger rounded text-light btn-user btn-block col-12 mt-1">
                                            <i class="fab fa-google fa-fw"></i> Signup with Google
                                        </a>
                                        <a href="{{route('facebook.login')}}" class="btn btn-facebook bg-primary rounded text-light btn-user btn-block col-12 mt-1">
                                            <i class="fab fa-facebook-f fa-fw"></i> Continue with Facebook
                                        </a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>