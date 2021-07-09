<?php
namespace HuaweiCloud\SDK\Core\Region;

class Region
{
    private $id;
    private $endpoint;

    /**
     * Region constructor.
     * @param $id
     * @param $endpoint
     */
    public function __construct($id, $endpoint)
    {
        $this->id = $id;
        $this->endpoint = $endpoint;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    public function withEndpointOverride($iamEndpoint) {
        $this.setEndpoint($iamEndpoint);
        return $this;
    }

}