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
                Session::put('error', 'The Stripe Token was not generated correctly');
                return redirect()->route('stripform');
            }

            $charge = $stripe->charges()->create([
                'card' => $token['id'],
                'currency' => 'USD',
                'amount' => $request->get('amount'),
                'description' => 'Add in wallet',
            ]);

            if ($charge['status'] == 'succeeded') {
                /**
                 * Write Here Your Database insert logic.
                 */
                Session::put('success', 'Money add successfully in wallet');

                return redirect()->route('stripform');
            } else {
                Session::put('error', 'Money not add in wallet!!');
                return redirect()->route('stripform');
            }
        } catch (\Exception $e) {
            Session::put('error', $e->getMessage());
            return redirect()->route('stripform');
        } catch (\Cartalyst\Stripe\Exception\CardErrorException $e) {
            Session::put('error', $e->getMessage());
            return redirect()->route('stripform');
        } catch (\Cartalyst\Stripe\Exception\MissingParameterException $e) {
            Session::put('error', $e->getMessage());
            return redirect()->route('stripform');
        }


    }


}
