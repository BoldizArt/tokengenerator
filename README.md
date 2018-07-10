# Description:

        // Create a random token with your parameters.
        token(
            (int)$length, 
            (bool)$lowercase, 
            (bool)$uppercase, 
            (bool)$numbers, 
            (bool)$specialCharacthers
        );

# Installation:

        composer require boldizart/tokengenerator:dev-master;


# Example:

    <?php
        // Require the Composers autoloader.
        require 'vendor/autoload.php';

        // Use Tokengenerator classs.
        use Boldizart\Tokengenerator;

        $token = new Tokengenerator();

        // Create an 8 characther lenght token:
        print $token->token(8);
        print "<hr />";

        // Create a token with randon length which contains only lowercase characthers.
        print $token->token(0, true, false, false);
        print "<hr />";

        // Create a random token with randon length wich contains all characthers.
        print $token->token(0, true, true, true, true);

