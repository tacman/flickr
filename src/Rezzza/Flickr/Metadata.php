<?php

namespace Rezzza\Flickr;

class Metadata
{
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * @var string
     */
    protected $accessTokenSecret;

    /**
     * @var string
     */
    protected $endpoint = 'https://api.flickr.com/services/rest/';

    /**
     * @var string
     */
    protected $uploadEndpoint = 'https://up.flickr.com/services/upload/';

    /**
     * @var string
     */
    protected $replaceEndpoint = 'https://up.flickr.com/services/replace/';

    /**
     * @param string $apiKey apiKey
     * @param string $secret secret
     */
    public function __construct($apiKey=null, $secret = null)
    {
        $this->apiKey = $apiKey;
        $this->secret = $secret;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getAccessTokenSecret()
    {
        return $this->accessTokenSecret;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return string
     */
    public function getUploadEndpoint()
    {
        return $this->uploadEndpoint;
    }

    /**
     * @return string
     */
    public function getReplaceEndpoint()
    {
        return $this->replaceEndpoint;
    }

    /**
     * @param string $v v
     *
     * @return Metadata
     */
    public function setOauthAccess($accessToken, $secret)
    {
        $this->accessToken = $accessToken;
        $this->accessTokenSecret = $secret;

        return $this;
    }

    /**
     * @param string $v v
     *
     * @return Metadata
     */
    public function setEndpoint($v)
    {
        $this->endpoint = $v;

        return $this;
    }

    /**
     * @param string $v v
     *
     * @return Metadata
     */
    public function setUploadEndpoint($v)
    {
        $this->uploadEndpoint = $v;

        return $this;
    }

    /**
     * @param string $v v
     *
     * @return Metadata
     */
    public function setReplaceEndpoint($v)
    {
        $this->replaceEndpoint = $v;

        return $this;
    }
}
