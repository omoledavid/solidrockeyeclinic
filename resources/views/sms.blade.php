@php
    function sendSMS($to, $message)
    {
        $curl = curl_init();

        $data = [
            'api_key' => 'TLoTQwwqgryFvDCOQXdYGcXcYztWbrixBXrRvDQvpElfnRTlahMzzhLDnrgpiV', // Replace with your Termii API key
            'to' => $to, // E.g., "2347012345678"
            'from' => 'WeTrust', // Your approved Sender ID on Termii
            'sms' => $message,
            'type' => 'plain',
            'channel' => 'generic', // Use "generic" or "dnd" depending on your use case
        ];

        $post_data = json_encode($data);

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://v3.api.termii.com/api/sms/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post_data,
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            $error = curl_error($curl);
            curl_close($curl);
            return "Curl Error: $error";
        }

        curl_close($curl);
        return $response;
    }
    function sendGatewaySMS(array $recipients, string $message, string $sender = 'ExampleSMS')
    {
        $url = 'https://gatewayapi.com/rest/mtsms';
        $api_token = 'Zce3HWZnRH2rJ2W7Ncep_H-qmspj8dnRMeAHspLOfOhRLRSQTDJiDeEZyHdWp53f'; // Replace with your actual token

        // Prepare JSON payload
        $payload = [
            'sender' => $sender,
            'message' => $message,
            'recipients' => [],
        ];

        foreach ($recipients as $msisdn) {
            $payload['recipients'][] = ['msisdn' => $msisdn];
        }

        // cURL request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_USERPWD, $api_token . ':');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            return 'cURL Error: ' . $error;
        }

        $response = json_decode($result, true);
        return $response;
    }

    $response = sendSMS('+18068553764', 'Your OTP code is 1234');
    // $response = sendSMS('+2349071647428', 'Your OTP code is 1234');
    echo $response;
    // $recipients = [2349071647428]; // Denmark numbers (for GatewayAPI)
    // $message = 'Hello from Gateway API!';
    // $response = sendGatewaySMS($recipients, $message);

    // print_r($response);

@endphp
