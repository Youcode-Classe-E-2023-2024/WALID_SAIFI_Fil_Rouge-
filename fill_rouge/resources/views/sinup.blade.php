<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sinup</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashbord/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashbord/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashbord/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashbord/images/favicon.png')}}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">
                            <img src="dashbord/images/shopabda.png" alt="logo">
                        </div>
                        <h4>Registre</h4>

                        <form class="pt-3" method="POST" action="{{ route('register') }}">

                        @csrf

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Votre situation</label>
                                <select name="role" class="form-control form-control-lg" required>
                                    <option value="Utilisateur">Utilisateur</option>
                                    <option value="Vendeur">Vendeur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" required>
                            </div>
                            <div class="form-group">
                                <label>Confirmation de mot de passe</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirmation de mot de passe" required>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">S'INSCRIRE</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Vous avez déjà un compte? <a href="{{route('login')}}" class="text-primary">Connectez-vous</a>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('dashbord/vendors/base/vendor.bundle.base.js')}} "></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{{ asset('dashbord/js/off-canvas.js')}}"></script>
<script src="{{ asset('dashbord/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('dashbord/js/template.js')}}"></script>
<!-- endinject -->
</body>

</html>
