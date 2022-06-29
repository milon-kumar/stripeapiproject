<?php

namespace App\Http\Controllers;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    public function stripePayment(Request $request)
    {
        $stripe = Stripe::make(env('STRIPE_SECRETE_KEY'));
        try {
            $token = $stripe->tokens()->create([
                'card' => [
                    'number' => $request->get('card_no'),
                    'exp_month' => $request->get('exp_month'),
                    'exp_year' => $request->get('exp_year'),
                    'cvc' => $request->get('cvv'),
                ],
            ]);

            if (!isset($token['id'])) {
                return response()->json([
                    'status'=>false,
                    'message'=>'The Stripe Token was not generated correctly',
                ]);
            }

            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'USD',
                'amount' => $request->get('amount'),
                'description' => $request->get('description'),
            ]);

            if ($charge['status'] == 'succeeded') {
                /**
                 * Write Here Your Database insert logic.
                 */
                return response()->json([
                    'status'=>true,
                    'message'=>'Money add successfully in wallet',
                    'data'=>$charge,
                ]);
            } else {
                return response()->json([
                    'status'=>false,
                    'message'=>'Money not add in wallet!!',
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status'=>false,
                'message'=>'Token Created Fail',
                'data'=>$e->getMessage(),
            ]);

        } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
            return response()->json([
                'status'=>false,
                'message'=>'Fail',
                'data'=>$e->getMessage(),
            ]);
        } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            return response()->json([
                'status'=>false,
                'message'=>'Fail',
                'data'=>$e->getMessage(),
            ]);
        }


    }


}
