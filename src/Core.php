<?php

namespace Unetway\VkMiniApp;

use Exception;
use GuzzleHttp\Client;
use Unetway\VkMiniApp\Messages;

class Core
{
    /**
     * @var string|mixed
     */
    private string $client_secret;

    /**
     * @var string|mixed
     */
    private string $url;

    /**
     * @var array
     */
    private array $params;


    public function __construct($params)
    {
        if (empty($params)) {
            throw new Exception('Params is not defined');
        }

        if (empty($params['client_secret'])) {
            throw new Exception('Params client_secret is not defined');
        }

        if (empty($params['url'])) {
            throw new Exception('Params url is not defined');
        }

        $this->client_secret = $params['client_secret'];
        $this->url = $params['url'];
    }

    /**
     * @return bool
     */
    public function signature(): bool
    {
        $sign_params = $this->getQueryParams();
        $query_params = $this->getParseUrl();

        ksort($sign_params);
        $sign_params_query = http_build_query($sign_params);
        $sign = rtrim(strtr(base64_encode(hash_hmac('sha256', $sign_params_query, $this->getClientSecret(), true)), '+/', '-_'), '=');

        return $sign === $query_params['sign'];
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->getQueryParams();
    }

    /**
     * @return string
     */
    private function getClientSecret(): string
    {
        return $this->client_secret;
    }

    /**
     * @return string
     */
    private function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return array
     */
    private function getQueryParams(): array
    {
        $params = [];

        $query_params = $this->getParseUrl();

        foreach ($query_params as $name => $value) {
            if (strpos($name, 'vk_') !== 0) {
                continue;
            }

            $params[$name] = $value;
        }

        $this->params = $params;

        return $params;
    }

    /**
     * @return array
     */
    private function getParseUrl(): array
    {
        $query_params = [];
        parse_str(parse_url($this->getUrl(), PHP_URL_QUERY), $query_params);
        return $query_params;
    }

    /**
     * @return int
     */
    public function getVkUserId(): int
    {
        return $this->params['vk_user_id'];
    }

    /**
     * @return int
     */
    public function getVkAppId(): int
    {
        return $this->params['vk_app_id'];
    }

    /**
     * @return array
     */
    public function geVKIsAppUser(): array
    {
        $vk_is_app_user = $this->params['vk_is_app_user'];

        return [
            'value' => (int)$vk_is_app_user,
            'message' => Messages::VK_IS_APP_USER[$vk_is_app_user]
        ];
    }

    /**
     * @return array
     */
    public function geVKAreNotificationsEnabled(): array
    {
        $vk_notify = $this->params['vk_are_notifications_enabled'];

        return [
            'status' => (int)$vk_notify,
            'message' => Messages::VK_ARE_NOTIFICATIONS_ENABLED[$vk_notify]
        ];
    }

    /**
     * @return array
     */
    public function getVkLanguage(): array
    {
        $lang = $this->params['vk_language'];

        return [
            'lang' => $lang,
            'message' => Messages::VK_LANGUAGE[$lang]
        ];
    }

    /**
     * @return array
     */
    public function getVkRef(): array
    {
        $vk_ref = $this->params['vk_ref'];

        return [
            'ref' => $vk_ref,
            'message' => Messages::VK_REF[$vk_ref],
        ];
    }

    /**
     * @return string
     */
    public function getVkAccessTokenSettings(): string
    {
        return $this->params['vk_access_token_settings'];
    }

    /**
     * @return int
     */
    public function getVkGroupId(): int
    {
        return $this->params['vk_group_id'];
    }

    /**
     * @return array
     */
    public function getVkViewerGroupRole(): array
    {
        $vk_viewer = $this->params['vk_viewer_group_role'];

        return [
            'role' => $vk_viewer,
            'message' => Messages::VK_VIEWER_GROUP_ROLE[$vk_viewer],
        ];
    }

    /**
     * @return array
     */
    public function getVkPlatform(): array
    {
        $vk_platform = $this->params['vk_platform'];

        return [
            'platform' => $vk_platform,
            'message' => Messages::VK_PLATFORM[$vk_platform]
        ];
    }

    /**
     * @return array
     */
    public function getVkIsFavorite(): array
    {
        $vk_favorite = $this->params['vk_is_favorite'];

        return [
            'value' => (int)$vk_favorite,
            'message' => Messages::VK_IS_FAVORITE[$vk_favorite]
        ];
    }

    /**
     * @return string
     */
    public function getVkTs(): string
    {
        return $this->params['vk_ts'];
    }
}