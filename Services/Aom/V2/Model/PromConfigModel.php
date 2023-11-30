<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PromConfigModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PromConfigModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * remoteWriteUrl  Prometheus实例remote-write地址。
    * remoteReadUrl  Prometheus实例remote-read地址。
    * promHttpApiEndpoint  Prometheus实例调用url。
    * dashboardId  Prometheus实例关联dashboard的dashboard id。
    * regionId  Prometheus实例所属的region。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'remoteWriteUrl' => 'string',
            'remoteReadUrl' => 'string',
            'promHttpApiEndpoint' => 'string',
            'dashboardId' => 'string',
            'regionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * remoteWriteUrl  Prometheus实例remote-write地址。
    * remoteReadUrl  Prometheus实例remote-read地址。
    * promHttpApiEndpoint  Prometheus实例调用url。
    * dashboardId  Prometheus实例关联dashboard的dashboard id。
    * regionId  Prometheus实例所属的region。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'remoteWriteUrl' => null,
        'remoteReadUrl' => null,
        'promHttpApiEndpoint' => null,
        'dashboardId' => null,
        'regionId' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * remoteWriteUrl  Prometheus实例remote-write地址。
    * remoteReadUrl  Prometheus实例remote-read地址。
    * promHttpApiEndpoint  Prometheus实例调用url。
    * dashboardId  Prometheus实例关联dashboard的dashboard id。
    * regionId  Prometheus实例所属的region。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'remoteWriteUrl' => 'remote_write_url',
            'remoteReadUrl' => 'remote_read_url',
            'promHttpApiEndpoint' => 'prom_http_api_endpoint',
            'dashboardId' => 'dashboard_id',
            'regionId' => 'region_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * remoteWriteUrl  Prometheus实例remote-write地址。
    * remoteReadUrl  Prometheus实例remote-read地址。
    * promHttpApiEndpoint  Prometheus实例调用url。
    * dashboardId  Prometheus实例关联dashboard的dashboard id。
    * regionId  Prometheus实例所属的region。
    *
    * @var string[]
    */
    protected static $setters = [
            'remoteWriteUrl' => 'setRemoteWriteUrl',
            'remoteReadUrl' => 'setRemoteReadUrl',
            'promHttpApiEndpoint' => 'setPromHttpApiEndpoint',
            'dashboardId' => 'setDashboardId',
            'regionId' => 'setRegionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * remoteWriteUrl  Prometheus实例remote-write地址。
    * remoteReadUrl  Prometheus实例remote-read地址。
    * promHttpApiEndpoint  Prometheus实例调用url。
    * dashboardId  Prometheus实例关联dashboard的dashboard id。
    * regionId  Prometheus实例所属的region。
    *
    * @var string[]
    */
    protected static $getters = [
            'remoteWriteUrl' => 'getRemoteWriteUrl',
            'remoteReadUrl' => 'getRemoteReadUrl',
            'promHttpApiEndpoint' => 'getPromHttpApiEndpoint',
            'dashboardId' => 'getDashboardId',
            'regionId' => 'getRegionId'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['remoteWriteUrl'] = isset($data['remoteWriteUrl']) ? $data['remoteWriteUrl'] : null;
        $this->container['remoteReadUrl'] = isset($data['remoteReadUrl']) ? $data['remoteReadUrl'] : null;
        $this->container['promHttpApiEndpoint'] = isset($data['promHttpApiEndpoint']) ? $data['promHttpApiEndpoint'] : null;
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets remoteWriteUrl
    *  Prometheus实例remote-write地址。
    *
    * @return string|null
    */
    public function getRemoteWriteUrl()
    {
        return $this->container['remoteWriteUrl'];
    }

    /**
    * Sets remoteWriteUrl
    *
    * @param string|null $remoteWriteUrl Prometheus实例remote-write地址。
    *
    * @return $this
    */
    public function setRemoteWriteUrl($remoteWriteUrl)
    {
        $this->container['remoteWriteUrl'] = $remoteWriteUrl;
        return $this;
    }

    /**
    * Gets remoteReadUrl
    *  Prometheus实例remote-read地址。
    *
    * @return string|null
    */
    public function getRemoteReadUrl()
    {
        return $this->container['remoteReadUrl'];
    }

    /**
    * Sets remoteReadUrl
    *
    * @param string|null $remoteReadUrl Prometheus实例remote-read地址。
    *
    * @return $this
    */
    public function setRemoteReadUrl($remoteReadUrl)
    {
        $this->container['remoteReadUrl'] = $remoteReadUrl;
        return $this;
    }

    /**
    * Gets promHttpApiEndpoint
    *  Prometheus实例调用url。
    *
    * @return string|null
    */
    public function getPromHttpApiEndpoint()
    {
        return $this->container['promHttpApiEndpoint'];
    }

    /**
    * Sets promHttpApiEndpoint
    *
    * @param string|null $promHttpApiEndpoint Prometheus实例调用url。
    *
    * @return $this
    */
    public function setPromHttpApiEndpoint($promHttpApiEndpoint)
    {
        $this->container['promHttpApiEndpoint'] = $promHttpApiEndpoint;
        return $this;
    }

    /**
    * Gets dashboardId
    *  Prometheus实例关联dashboard的dashboard id。
    *
    * @return string|null
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string|null $dashboardId Prometheus实例关联dashboard的dashboard id。
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets regionId
    *  Prometheus实例所属的region。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId Prometheus实例所属的region。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

