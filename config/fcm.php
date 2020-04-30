<?php

return [
    'driver' => env('FCM_PROTOCOL', 'http'),
    'log_enabled' => false,

    'http' => [
        'server_key' => env('FCM_SERVER_KEY', 'AAAA1KqoME4:APA91bEG231QS-6FOYBtOL76fHo_DqOP8FBgJmY4c8Bf3nDH32FibPvze86xoCwOJ-k47f91-Ms_WUJYTuZQ4qiEDZjfoEE-t-R0wvZPierlskaNgTRV38zEN_Iq5MmtgwDseAgOAQti'),
        'sender_id' => env('FCM_SENDER_ID', '913396215886'),
        'server_send_url' => 'https://fcm.googleapis.com/fcm/send',
        'server_group_url' => 'https://android.googleapis.com/gcm/notification',
        'timeout' => 30.0, // in second
    ],
];
