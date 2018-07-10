<?php

namespace webrtc\web;

use yii\web\AssetBundle;

class RTCMultiConnectionAsset extends AssetBundle
{
    public $sourcePath = '@bower/rtcmulticonnection/dist';

    public $js = [
        'RTCMultiConnection.js'
    ];
}