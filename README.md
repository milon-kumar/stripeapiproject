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
            
            Generate Passport Key
            @ php artisan passport:keys

            Generate Passport Client Token
            @ php artisan passport:client --personal

#### 5th Step :-

            @ php artisan serve

## API Documentation...

```json
{
    "info": {
        "_postman_id": "039e63a5-a4c0-4856-b1e5-b0c975141ac3",
        "name": "jk api for stripe",
        "schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
        "_exporter_id": "17293494"
    },
    "item": [
        {
            "name": "http://127.0.0.1:1010/api/v1/register",
            "request": {
                "method": "POST",
                "header": [],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "name",
                            "value": "user name",
                            "type": "text"
                        },
                        {
                            "key": "username",
                            "value": "user_name1",
                            "type": "text"
                        },
                        {
                            "key": "email",
                            "value": "user1@email.com",
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
                    "raw": "http://127.0.0.1:1010/api/v1/register",
                    "protocol": "http",
                    "host": [
                        "127",
                        "0",
                        "0",
                        "1"
                    ],
                    "port": "1010",
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
            "name": "http://127.0.0.1:1010/api/v1/verification",
            "request": {
                "method": "POST",
                "header": [],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "email_verification_token",
                            "value": "361808",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://127.0.0.1:1010/api/v1/verification",
                    "protocol": "http",
                    "host": [
                        "127",
                        "0",
                        "0",
                        "1"
                    ],
                    "port": "1010",
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
            "name": "http://127.0.0.1:1010/api/v1/user",
            "protocolProfileBehavior": {
                "disableBodyPruning": true
            },
            "request": {
                "method": "GET",
                "header": [
                    {
                        "key": "Authorization",
                        "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDY5MzM2MDZmM2VlMjRjNWNjZWE5MWJjMDAzM2JjN2FhYmUyYTEwYzhiMWFkMTZiYzE1MWI1MzQzNjlmYzBiODFiZjZmMDhhNDFmOWFkMmYiLCJpYXQiOjE2NTY0Mzc1NDguNzgyNzc0LCJuYmYiOjE2NTY0Mzc1NDguNzgyNzc2LCJleHAiOjE2ODc5NzM1NDguNzMyMjcsInN1YiI6IjYiLCJzY29wZXMiOltdfQ.Rror19JDW2-jZLSP7iMpYCHqvLCN6qYEimh22i_z680mEnyTUL-0alwddL9fWgIx7VdqQKtDuUQuBy-PXzWxrS8gMXAjy37O1Z6972EHVTwwFy8EMuTR9xYgB8t0DJ6dDdzAv0uzD7236mEGB9DsoGWBLsnAt-w0ooJ1pAK9thTVO46rwkiOWVsOtusdrVqkf6PhpJ3ZD8qzSHio2ytpbs-8hMwBJxtYFE0t7HaUwtdZ7m_PdSI1nMahZS74bs76jiRC06a3C1ykLl7_wTxOM6fzlNsR37HgCjQ-p-V851q41k3LcGD_b-_DdI0ALUziBU7dVOQte9sFGvj_1Nny4taKbQDsHVnakP3cyHhVda165uA7F8V7F7mxgbizl1zTTkR_aX8v7nUoRI_dkr0pUn4t1LpnIiPOGBpki7uEqjwanljNuBAHaYTLXILIwhgfckvakqp-OC8fiadD6AmNtNllhh34x12UjMevPnck0UnDSJmQlumJM9gWNA261tNWbRDZMteP2IvOSZPUZh7sEMDzuiide63xcfGNK9pIivbpak-U8EoRuqSi3MU2GUzNwsQdcVIVGdjtFYSRBuNLBAOkBoyZK_YyL9Xi52eZo6zs6ib0YPoqeG4qjH5-YQ0vdUy01OlFYlGhU7LbSeANBG_SENFKW9kInHvUFzsUDGQ",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": []
                },
                "url": {
                    "raw": "http://127.0.0.1:1010/api/v1/user",
                    "protocol": "http",
                    "host": [
                        "127",
                        "0",
                        "0",
                        "1"
                    ],
                    "port": "1010",
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
            "name": "http://127.0.0.1:1010/api/v1/payment",
            "request": {
                "method": "POST",
                "header": [
                    {
                        "key": "Authorization",
                        "value": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDY5MzM2MDZmM2VlMjRjNWNjZWE5MWJjMDAzM2JjN2FhYmUyYTEwYzhiMWFkMTZiYzE1MWI1MzQzNjlmYzBiODFiZjZmMDhhNDFmOWFkMmYiLCJpYXQiOjE2NTY0Mzc1NDguNzgyNzc0LCJuYmYiOjE2NTY0Mzc1NDguNzgyNzc2LCJleHAiOjE2ODc5NzM1NDguNzMyMjcsInN1YiI6IjYiLCJzY29wZXMiOltdfQ.Rror19JDW2-jZLSP7iMpYCHqvLCN6qYEimh22i_z680mEnyTUL-0alwddL9fWgIx7VdqQKtDuUQuBy-PXzWxrS8gMXAjy37O1Z6972EHVTwwFy8EMuTR9xYgB8t0DJ6dDdzAv0uzD7236mEGB9DsoGWBLsnAt-w0ooJ1pAK9thTVO46rwkiOWVsOtusdrVqkf6PhpJ3ZD8qzSHio2ytpbs-8hMwBJxtYFE0t7HaUwtdZ7m_PdSI1nMahZS74bs76jiRC06a3C1ykLl7_wTxOM6fzlNsR37HgCjQ-p-V851q41k3LcGD_b-_DdI0ALUziBU7dVOQte9sFGvj_1Nny4taKbQDsHVnakP3cyHhVda165uA7F8V7F7mxgbizl1zTTkR_aX8v7nUoRI_dkr0pUn4t1LpnIiPOGBpki7uEqjwanljNuBAHaYTLXILIwhgfckvakqp-OC8fiadD6AmNtNllhh34x12UjMevPnck0UnDSJmQlumJM9gWNA261tNWbRDZMteP2IvOSZPUZh7sEMDzuiide63xcfGNK9pIivbpak-U8EoRuqSi3MU2GUzNwsQdcVIVGdjtFYSRBuNLBAOkBoyZK_YyL9Xi52eZo6zs6ib0YPoqeG4qjH5-YQ0vdUy01OlFYlGhU7LbSeANBG_SENFKW9kInHvUFzsUDGQ",
                        "type": "text"
                    }
                ],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "card_no",
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
                            "key": "amount",
                            "value": "321654",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://127.0.0.1:1010/api/v1/payment",
                    "protocol": "http",
                    "host": [
                        "127",
                        "0",
                        "0",
                        "1"
                    ],
                    "port": "1010",
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
            "name": "http://127.0.0.1:1010/api/v1/login",
            "request": {
                "method": "POST",
                "header": [],
                "body": {
                    "mode": "formdata",
                    "formdata": [
                        {
                            "key": "email",
                            "value": "user1@email.com",
                            "type": "text"
                        },
                        {
                            "key": "password",
                            "value": "123456",
                            "type": "text"
                        }
                    ]
                },
                "url": {
                    "raw": "http://127.0.0.1:1010/api/v1/login",
                    "protocol": "http",
                    "host": [
                        "127",
                        "0",
                        "0",
                        "1"
                    ],
                    "port": "1010",
                    "path": [
                        "api",
                        "v1",
                        "login"
                    ]
                }
            },
            "response": []
        }
    ]
}
```

## Enjoy The App
