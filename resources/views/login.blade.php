<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>E com Project</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body p-3">
                        <h2>Login Form</h2>
                        <form action="{{ route('user.adduserprossess') }}" method="post">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form2Example1">Email address</label>
                              <input type="email" id="form2Example1" name="email" class="form-control" />

                                @if ($errors->has('email'))
                                  <p class="text-danger">
                                    {{ $errors->first('email') }}
                                  </p >
                                @endif
                            </div>
                          
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                              <label class="form-label" for="form2Example2">Password</label>
                              <input type="password" id="form2Example2" name="password" class="form-control" />

                              @if ($errors->has('password'))
                              <p class="text-danger">
                                {{ $errors->first('password') }}
                              </p >
                            @endif
                            </div>

                            @if (!empty($emailerror))
                                <p class="text-danger">{{ $emailerror }}</p>
                            @endif
                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                              <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                              </div>
                          
                              <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                              </div>
                            </div>
                          
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">LOgin in</button>
                          
                            <!-- Register buttons -->
                            <div class="text-center">
                              <p>Not a member? <a href="#!">Register</a></p>
                              <p>or sign up with:</p>
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                              </button>
                          
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                              </button>
                          
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                              </button>
                          
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                              </button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>   
