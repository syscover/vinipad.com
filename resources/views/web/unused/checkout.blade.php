@extends('www.layouts.default')

@section('title', 'CHECKOUT')

@section('head')

    <!--[if IE]>
    <style type="text/css">
        .sys_form__styled-select__icon{
            display: none !important;
        }
    </style>
    <![endif]-->

    <script>
        $(document).ready(function(){
            $('.sys_payment-form__step__content').slideUp(0).eq(0).slideDown(0);

            $('.sys_continue-button').on('click', function(){
                var $this_step = $(this).closest('.sys_payment-form__step');
                var $next_step = $this_step.next();
                $this_step.addClass('sys_payment-form__step--completed').find('.sys_payment-form__step__content').slideUp(300);
                $next_step.find('.sys_payment-form__step__content').slideDown(300);
                $(window).trigger('scroll');
            });

            $('.sys_payment-form__step__edit').on('click', function(){
                $('.sys_payment-form__step__content').slideUp(300);
                var step = $(this).closest('.sys_payment-form__step');
                step.removeClass('sys_payment-form__step--completed').find('.sys_payment-form__step__content').slideDown(300);
                step.nextAll().removeClass('sys_payment-form__step--completed');
                totalAffix();
            });
        });

        $(window).scroll(function(){
            totalAffix();
        });

        function totalAffix(){
            if($(window).width() > 767){
                var $total = $('.sys_payment-total');
                var $payment_form = $('.sys_payment-form');
                var scroll = $(window).scrollTop();

                if (scroll > 114 && scroll < ($payment_form.outerHeight() - $total.outerHeight())){
                    if ((scroll - 114) < 0){
                        $total.css('transform', 'translateY(0px)');
                    }
                    else{
                        $total.css('transform', 'translateY('+(scroll - 114)+'px)');
                    }
                }
                else if(scroll > ($payment_form.outerHeight() - $total.outerHeight())){
                    if (($payment_form.outerHeight() - $total.outerHeight() - 114) < 0){
                        $total.css('transform', 'translateY(0px)');
                    }
                    else{
                        $total.css('transform', 'translateY('+($payment_form.outerHeight() - $total.outerHeight() - 114)+'px)');
                    }
                }
            }
        }
    </script>

@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="sys_aligncenter margin-top-70">Checkout</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-push-8 col-md-5 col-md-push-7 col-sm-6 col-sm-push-6">
                <div class="sys_payment-total clearfix sys_bordered sys_bordered--three">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="sys_aligncenter margin-top-0 margin-bottom-20">Products Summary</h3>
                        </div>
                    </div>
                    <div class="row sys_payment-total__item">
                        <div class="col-md-1 col-sm-1 col-xs-1 sys_nopadding">
                            <p class="sys_payment-total__item__qty">3</p>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <p class="sys_payment-total__item__title">Titulo del producto</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <p class="sys_payment-total__item__price">9999€</p>
                        </div>
                    </div>
                    <div class="row sys_payment-total__item">
                        <div class="col-md-1 col-sm-1 col-xs-1 sys_nopadding">
                            <p class="sys_payment-total__item__qty">3</p>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <p class="sys_payment-total__item__title">Titulo del producto</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <p class="sys_payment-total__item__price">9999€</p>
                        </div>
                    </div>
                    <div class="row sys_payment-total__item">
                        <div class="col-md-1 col-sm-1 col-xs-1 sys_nopadding">
                            <p class="sys_payment-total__item__qty">3</p>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                            <p class="sys_payment-total__item__title">Titulo del producto</p>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <p class="sys_payment-total__item__price">9999€</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <span class="sys_payment-total__separator"></span>
                        </div>
                    </div>
                    <div class="row sys_payment-total__sum">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__title">Subtotal</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__amount">9999€</p>
                        </div>
                    </div>
                    <div class="row sys_payment-total__sum">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__title">Delivery cost</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__amount">9999€</p>
                        </div>
                    </div>
                    <div class="row sys_payment-total__sum">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__title">Coupon</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__amount">-9999€</p>
                        </div>
                    </div>
                    <div class="row sys_payment-total__sum sys_payment-total__sum--total">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__title">Total</p>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <p class="sys_payment-total__sum__amount">9999€</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-lg-pull-4 col-md-7 col-md-pull-5 col-sm-6 col-sm-pull-6">
                <div class="sys_payment-form clearfix">
                    <div class="sys_payment-form__step clearfix">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>1. Datos de usuario</h3>
                            </div>
                        </div>
                        <div class="row sys_payment-form__step__content">
                            <div class="col-md-6 col-sm-12">
                                <a class="sys_button sys_button--full-width margin-bottom-15 sys_continue-button" data-toggle="modal" data-target=".sys_login-modal">Acceder</a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="sys_button sys_button--full-width sys_button--ghost sys_continue-button" data-toggle="modal" data-target=".sys_register-modal">Registrarse</a>
                            </div>
                        </div>
                    </div>
                    <div class="sys_payment-form__step clearfix">
                        <div class="sys_payment-form__step__edit">
                            <a><i class="material-icons">mode_edit</i>EDIT</a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>2. Datos de facturación</h3>
                            </div>
                        </div>
                        <div class="row sys_payment-form__step__content">
                            <form class="sys_form">
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Name</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Family name</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Email</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Phone</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label class="sys_form__label">Address</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">City</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Postal Code</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Province</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Country</label>
                                    <div class="sys_form__styled-select">
                                        <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                            <option>Country 1</option>
                                            <option>Country 2</option>
                                            <option>Country 3</option>
                                            <option>Country 4</option>
                                            <option>Country 5</option>
                                        </select>
                                        <div class="sys_form__styled-select__icon">
                                            <i class="fa fa-chevron-up"></i>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12">
                                    <div class="checkbox sys_form__checkbox">
                                        <label>
                                            <input type="checkbox"> Usar mismos datos para el envio.
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0">
                                    <a class="sys_button sys_button--full-width margin-top-10 sys_continue-button">Continuar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sys_payment-form__step clearfix">
                        <div class="sys_payment-form__step__edit">
                            <a><i class="material-icons">mode_edit</i>EDIT</a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>3. Datos de envío</h3>
                            </div>
                        </div>
                        <div class="row sys_payment-form__step__content">
                            <form class="sys_form">
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Name</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Family name</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label class="sys_form__label">Address</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">City</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Postal Code</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Province</label>
                                    <input type="text" class="sys_form__input sys_form__input--full-width sys_form__input--small">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="sys_form__label">Country</label>
                                    <div class="sys_form__styled-select">
                                        <select class="sys_form__styled-select__select sys_form__styled-select__select--small">
                                            <option>Country 1</option>
                                            <option>Country 2</option>
                                            <option>Country 3</option>
                                            <option>Country 4</option>
                                            <option>Country 5</option>
                                        </select>
                                        <div class="sys_form__styled-select__icon">
                                            <i class="fa fa-chevron-up"></i>
                                            <i class="fa fa-chevron-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0">
                                    <a class="sys_button sys_button--full-width margin-top-20 sys_continue-button">Continuar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sys_payment-form__step clearfix">
                        <div class="sys_payment-form__step__edit">
                            <a><i class="material-icons">mode_edit</i>EDIT</a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>4. Forma de pago</h3>
                            </div>
                        </div>
                        <div class="row sys_payment-form__step__content">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="radio sys_form__radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value=""><i class="fa fa-cc-visa"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="radio sys_form__radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value=""><i class="fa fa-cc-amex"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="radio sys_form__radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value=""><i class="fa fa-cc-mastercard"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="radio sys_form__radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" value=""><i class="fa fa-cc-paypal"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0 col-xs-12">
                                <a class="sys_button sys_button--full-width sys_button--solid margin-top-50">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop