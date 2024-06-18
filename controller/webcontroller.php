<?php

class webcontroller {

    public function index()
    {
        view ('index');

    }

    public function activitypage()
        {
            view ('Activity');
        }

        public function aboutpage()
        {
            view('About');
        }

        public function contactpage()
        {
            view('contact');
        }


        public function newletterpage()
        {
            view('newsletter');
        }

        public function loginpage()
        {
            view('login');
        }
        public function registerpage()
        {
            view('register');
        }

       
        public function visionpage()
        {
            view('Vision');
        }
        public function contactpagepage()
        {
            view('contact');
        }

        public function entrancelistspage()
        {
            view('entrancelists');
        }

        public function adrequirementpage()
        {
            view('admissionrequirements');
        }

        public function adfeepage()
        {
            view('admissionfees');
        }

        public function CUpage()
        {
            view('CU');
        }
    
    
    
    
    
    
}