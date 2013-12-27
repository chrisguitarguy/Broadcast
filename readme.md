# Broadcast

Broadcast is a PHP library for sending users messages.

Think of it like a "leveled message" system. Just like a level log system
dispatched to various handlers based on a log level, Broadcast dispatches
messages to users based on their preferences.

Each handler is a combination of voters and processors. Voters determine if the
handler can run. Processors alter the message before its sent.

the 


    <?php
    use Chrisguitarguy\Broadcast;

    $broadcast = new Broadcast\Broadcaster();

    $dm = new Broadcast\Voter\DecisionManager();
    $dm->addVoter(new Broadcast\Voter\AlwaysVoter()); // always run

    $handler = new Broadcast\Handler\SwiftMailerHandler($dm);

    $b->addHandler($handler);

    $msg = new Broadcast\Message('The Message "Subject"', 'Message "body"', array(
        'additional'    => 'Additional context variables',
        'anything'      => 'these could be anything, useful for processors',
    ));

    // $user should be an array or ArrayAccess instance
    $user = array('user_email' => 'someemail@example.com');
    $broadcast->send($user, 'the_message_level', $msg);
