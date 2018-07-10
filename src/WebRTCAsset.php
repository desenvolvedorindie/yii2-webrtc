<?php

namespace webrtc\web;

use yii\web\AssetBundle;

class WebRTCAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $css = [
        'css/getHTMLMediaElement.css',
    ];
    public $depends = [
        'socketio\web\SocketIOClientAsset',
        'webrtc\web\RTCMultiConnectionAsset',
    ];
    public function init(){
        $this->js = YII_DEBUG ? [
            'js/adapter.js',
            'js/getHTMLMediaElement.js',
            'js/getScreenId.js',
            'js/gif-recorder.min.js',
            'js/RecordRTC.js',
            'js/DetectRTC.js',
            'js/CodecsHandler.js',
            'js/IceServersHandler.js',
        ] : [
            'js/adapter.js',
            'js/getHTMLMediaElement.js',
            'js/getScreenId.js',
            'js/gif-recorder.min.js',
            'js/RecordRTC.min.js',
            'js/DetectRTC.min.js',
            'js/CodecsHandler.js',
            'js/IceServersHandler.js',
        ];
    }
}