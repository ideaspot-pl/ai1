<?php
class ChristmasModeFacade
{
    /** @var ChristmasLights */
    public $christmasLights;

    /** @var LivingRoomLights */
    public $livingRoomLights;

    /** @var GingerAromatizer */
    public $gingerAromatizer;

    /** @var Radio */
    public $radio;

    public function __construct(ChristmasLights $christmasLights, LivingRoomLights $livingRoomLights, GingerAromatizer $gingerAromatizer, Radio $radio)
    {
        $this->christmasLights = $christmasLights;
        $this->livingRoomLights = $livingRoomLights;
        $this->gingerAromatizer = $gingerAromatizer;
        $this->radio = $radio;
    }

    public function christmasModeOn()
    {
        $this->christmasLights->on();
        $this->livingRoomLights->off();
        $this->gingerAromatizer->on();
        $this->radio->playLastChristmas();
    }

    public function christmasModeOff()
    {
        $this->christmasLights->off();
        $this->livingRoomLights->on();
        $this->gingerAromatizer->off();
        $this->radio->stopMusic();
    }

}
