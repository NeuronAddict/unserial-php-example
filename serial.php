<?php

class Message {

    private $message;
    private $author;

    public function __construct(string $message, string $author) {
        $this->message = $message;
        $this->author = $author;
    }

    public function __toString()
    {
        return "<Message: message='$this->message', author='$this->author'>";
    }

}

$message = new Message('hello!', 'Miss Marple');
echo "Data: $message \n";

$serialized = serialize($message);
echo "Serialized data : $serialized \n";

$deserialized = unserialize($serialized);
echo "Unserialized data : $deserialized \n";

if($message == $deserialized) {
    echo 'Ok';
}
else {
    throw new Exception("Objects are not equals!");
}