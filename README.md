# Welcome to Stripe Payment API Sysem

<p align="center"><a><img src="https://res.cloudinary.com/practicaldev/image/fetch/s--xRa-EDkC--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/i/1s3bedypkt7zm8maikzg.png" width="400"></a></p>


<p align="center">
    <a href="https://www.facebook.com/milonkumar91">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" width="30" alt="Milon Kumar">
    </a>
    <a href="https://github.com/milon-kumar">
        <img src="https://www.svgrepo.com/show/332084/github.svg" width="35" alt="Milon Kumar">
    </a>
</p>
## About Stripe Payment System


This has been used in the payment system. A package has been used for this.This Package name Stripe.This app
uses Laravel Passport Authentication System for authentication

- Stripe :  [Go To](https://stripe.com/en-se)
- Passport :  [Go To](https://laravel.com/docs/9.x/passport)

## Using Guidelines...

Clone My Github Repository... My Github Repository = [StripeAPI](https://github.com/milon-kumar/stripeapi.git)

#### 1st Step :-

            @ git clone https://github.com/milon-kumar/stripeapi.git

#### 2nd Step :-

            @ composer install

#### 3rd Step :-

            connect your database your with app

#### 4th Step :-

            run migration
            @ php artisan migrate

#### 5th Step :-

            Generate Passport Client Token
            @ php artisan passport:client --personal

#### 5th Step :-

            @ php artisan serve

## API Documentation...

```json
{
    "info": {
        "_postman_id": "2857ee1f-6d51-469a-a8d7-39382e9ff775",
        "name": "Stripe API",
        "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
        "_exporter_id": "17293494"
    },
    "item": [
        {
            "name": "User Register",
            "request": {
                "method": "POST",
                "header": [
                    {
                        "key": "Accept",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "name",
                            "value": "Milon Kumar d",
                            "type": "text"
                        },
                        {
                            "key": "username",
                            "value": "mk88d58",
                            "type": "text"
                        },
                        {
                            "key": "email",
                            "value": "mks@gmail.com",
                            "type": "text"
                        },
                        {
                            "key": "password",
                            "value": "123456",
                            "type": "text"
                        },
                        {
                            "key": "password_confirmation",
                            "value": "123456",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://localhost:8000/api/v1/register",
                    "protocol": "http",
                    "host": [
                        "localhost"
                    ],
                    "port": "8000",
                    "path": [
                        "api",
                        "v1",
                        "register"
                    ]
                }
            },
            "response": []
        },
        {
            "name": "User Verify",
            "request": {
                "method": "POST",
                "header": [
                    {
                        "key": "Accept",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "email_verification_token",
                            "value": "882365",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://localhost:8000/api/v1/verification",
                    "protocol": "http",
                    "host": [
                        "localhost"
                    ],
                    "port": "8000",
                    "path": [
                        "api",
                        "v1",
                        "verification"
                    ]
                }
            },
            "response": []
        },
        {
            "name": "User Login",
            "request": {
                "method": "POST",
                "header": [
                    {
                        "key": "Accept",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "email",
                            "value": "",
                            "type": "text"
                        },
                        {
                            "key": "password",
                            "value": "",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://localhost:8000/api/v1/login",
                    "protocol": "http",
                    "host": [
                        "localhost"
                    ],
                    "port": "8000",
                    "path": [
                        "api",
                        "v1",
                        "login"
                    ],
                    "query": [
                        {
                            "key": "email",
                            "value": null,
                            "disabled": true
                        }
                    ]
                }
            },
            "response": []
        },
        {
            "name": "User Dashboard",
            "protocolProfileBehavior": {
                "disableBodyPruning": true
            },
            "request": {
                "method": "GET",
                "header": [
                    {
                        "key": "Authorization",
                        "value": "Bearer your_passport_token",
                        "type": "text"
                    },
                    {
                        "key": "Accept",
                        "value": "application/json",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": []
                },
                "url": {
                    "raw": "http://localhost:8000/api/v1/user",
                    "protocol": "http",
                    "host": [
                        "localhost"
                    ],
                    "port": "8000",
                    "path": [
                        "api",
                        "v1",
                        "user"
                    ]
                }
            },
            "response": []
        },
        {
            "name": "Stripe Payment",
            "request": {
                "method": "POST",
                "header": [
                    {
                        "key": "Accept",
                        "value": "application/json",
                        "type": "text"
                    },
                    {
                        "key": "Authorization",
                        "value": "Bearer your_passport_token",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "number",
                            "value": "4242424242424242",
                            "type": "text"
                        },
                        {
                            "key": "exp_month",
                            "value": "12",
                            "type": "text"
                        },
                        {
                            "key": "exp_year",
                            "value": "2025",
                            "type": "text"
                        },
                        {
                            "key": "cvc",
                            "value": "123",
                            "type": "text"
                        },
                        {
                            "key": "amount",
                            "value": "32",
                            "type": "text"
                        },
                        {
                            "key": "email",
                            "value": "sdfsdf@mail.com",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://localhost:8000/api/v1/payment",
                    "protocol": "http",
                    "host": [
                        "localhost"
                    ],
                    "port": "8000",
                    "path": [
                        "api",
                        "v1",
                        "payment"
                    ]
                }
            },
            "response": []
        },
        {
            "name": "User Logout",
            "protocolProfileBehavior": {
                "disableBodyPruning": true
            },
            "request": {
                "method": "GET",
                "header": [
                    {
                        "key": "Accept",
                        "value": "application/json",
                        "type": "text"
                    },
                    {
                        "key": "Authorization",
                        "value": "Bearer your_passport_token",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": []
                },
                "url": {
                    "raw": "http://localhost:8000/api/v1/mylogout",
                    "protocol": "http",
                    "host": [
                        "localhost"
                    ],
                    "port": "8000",
                    "path": [
                        "api",
                        "v1",
                        "mylogout"
                    ]
                }
            },
            "response": []
        }
    ]
}
```

## Enjoy The App
