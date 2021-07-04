<?php

Routes::set('/index.php', function() {
    Index::CreateView('Index');
});

Routes::set('/aboutus', function() {
    AboutUs::CreateView('AboutUs');
    AboutUs::test();
});

Routes::set('/contactus', function() {
    ContactUs::CreateView('ContactUs');
});
