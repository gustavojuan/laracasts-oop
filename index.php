<?php

interface Newsletter
{
    public function subscribe($email);
}

class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die('Subs with CampaignMonitor');
    }
}


class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die('Subns with Drip');
    }
}





class NewsletterSubscriptionController
{
    public function store( Newsletter  $newsletter)
    {

        $newsletter->subscribe('testemail');
    }
}

$controller = new NewsletterSubscriptionController();

//$controller->store(new Drip());
$controller->store(new CampaignMonitor());