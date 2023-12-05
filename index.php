<?php

class Subscription
{
    protected Getaway $getaway;

    public function __construct(Getaway $getaway)
    {
        $this->getaway = $getaway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        //api request
        // find stripe customer
        $customer = $this->getaway->findCustomer();

        // find stipe subscription by customer
        $this->getaway->findSubscriptionByCustomer($customer);
    }

    public function invoice()
    {

    }

    public function swap($newPlan)
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


interface Getaway
{
    public function findCustomer();

    public function findSubscriptionByCustomer();
}

class StripeGetaway implements Getaway
{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

class PaypalGetaway implements Getaway
{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}


$subscription = new Subscription(new StripeGetaway());
$subscription = new Subscription(new PaypalGetaway());
