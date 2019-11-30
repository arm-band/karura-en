<?php
function karuraen_settings_page() {
    //設定変更時にメッセージ表示
    if( true == $_GET['settings-updated'] ) { ?>
        <div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>
<?php } ?>

    <div class="wrap">
        <h2>迦楼羅焔(Karura-en) 設定</h2>
        <form method="post" action="options.php">
<?php settings_fields( 'karuraen-settings' ); ?>
<?php do_settings_sections( 'karuraen-settings' ); ?>
            <table class="form-table">
                <tr>
                    <th>Github アカウント</th>
                    <td><input type="text" name="karuraen_github_account" id="karuraen_github_account" value="<?= esc_attr( get_option( 'karuraen_github_account' ) ); ?>" required="required"></td>
                </tr>
                <tr>
                    <th>リポジトリ名</th>
                    <td><input type="text" name="karuraen_github_repository" id="karuraen_github_repository" value="<?= esc_attr( get_option( 'karuraen_github_repository' ) ); ?>"  required="required"></td>
                </tr>
                <tr>
                    <th>Personal access tokens</th>
                    <td><input type="password" name="karuraen_github_token" id="karuraen_github_token" value="<?= esc_attr( get_option( 'karuraen_github_token' ) ); ?>"  required="required"></td>
                </tr>
            </table>
<?php submit_button( '設定を保存', 'primary large', 'submit', true, array( 'tabindex' => '1' ) ); ?>
        </form>
        <div id="karuraen_pluginurl" data-pluginurl="<?= esc_attr( plugins_url() ); ?>"></div>
    </div>

<?php } ?>