<?php
require __DIR__ . '/../vendor/autoload.php';
use GuzzleHttp\Client;

//記事公開・更新時にGithub Actionsに`repository_dispatch`イベントを送信
function karuraen_push_repository_dispatch_event ( $post_id ) {
    $guzzleClient = new Client();
    //データ
    $data = [
        'event_type' => 'karuraen_dispatch'
    ];
    //URL
    $url = 'https://api.github.com/repos/' . esc_attr( get_option( 'karuraen_github_account' ) ) . '/' . esc_attr( get_option( 'karuraen_github_repository' ) ) . '/dispatches';
    $response = $guzzleClient->request(
        'POST',
        $url,
        [
            'headers' => [
                //Personal Access Token
                'Authorization' => 'token ' . get_option( 'karuraen_github_token' ),
                //need parameter
                'Accept'     => 'application/vnd.github.everest-preview+json'
            ],
            'json' => $data
        ]
    );

    return;
}
//publish_post
add_action( 'publish_post', 'karuraen_push_repository_dispatch_event', 10 , 1 );
//delete_post
add_action( 'delete_post', 'karuraen_push_repository_dispatch_event', 10 , 1 );