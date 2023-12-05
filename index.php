<?php
class Subscription
{
    protected StripeGetaway $stripeGetaway;

    public function __construct(StripeGetaway $stripeGetaway)
    {
        $this->stripeGetaway = $stripeGetaway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        //api request
            // find stripe customer
            //$customer = $this->stripeGetaway->findStripeCustomer();

            // find stipe subscription by customer
            //$this->stripeGetaway->findStripeSubscriptionByCustomer($customer);
    }

    public function invoice()
    {

    }

    public function  swap($newPlan)
    {

    }


    /*INFO: Estos dos métodos en esta clase chirrían*/
//    protected function findStripeCustomer()
//    {
//
//    }
//
//
//    protected function findStripeSubscriptionByCustomer()
//    {
//
//    }

}


//class BillableSubscription extends Subscription
//{
//
//    /*INFO: Estos dos métodos estarían más relacionados con otra clase*/
//    protected function findStripeCustomer()
//    {
//
//    }
//
//
//    protected function findStripeSubscriptionByCustomer()
//    {
//
//    }
//}


class StripeGetaway
{
    public function findStripeCustomer()
    {

    }


    public  function findStripeSubscriptionByCustomer()
    {

    }
}
