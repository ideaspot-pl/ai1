<?php
class Stone implements ThrowableInterface
{
    public function doThrow()
    {
        echo "A direct hit with the throwed stone.\n";
    }
}
