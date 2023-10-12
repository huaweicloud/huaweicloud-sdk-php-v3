<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicKibanaRespBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'publicKibanaRespBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eipSize  带宽大小。单位：Mbit/s
    * elbWhiteListResp  elbWhiteListResp
    * publicKibanaIp  kibana访问IP。
    * bandwidthResourceId  当前kibana公网对应的资源Id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eipSize' => 'int',
            'elbWhiteListResp' => '\HuaweiCloud\SDK\Css\V1\Model\KibanaElbWhiteListResp',
            'publicKibanaIp' => 'string',
            'bandwidthResourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eipSize  带宽大小。单位：Mbit/s
    * elbWhiteListResp  elbWhiteListResp
    * publicKibanaIp  kibana访问IP。
    * bandwidthResourceId  当前kibana公网对应的资源Id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eipSize' => null,
        'elbWhiteListResp' => null,
        'publicKibanaIp' => null,
        'bandwidthResourceId' => null
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
    * eipSize  带宽大小。单位：Mbit/s
    * elbWhiteListResp  elbWhiteListResp
    * publicKibanaIp  kibana访问IP。
    * bandwidthResourceId  当前kibana公网对应的资源Id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eipSize' => 'eipSize',
            'elbWhiteListResp' => 'elbWhiteListResp',
            'publicKibanaIp' => 'publicKibanaIp',
            'bandwidthResourceId' => 'bandwidthResourceId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eipSize  带宽大小。单位：Mbit/s
    * elbWhiteListResp  elbWhiteListResp
    * publicKibanaIp  kibana访问IP。
    * bandwidthResourceId  当前kibana公网对应的资源Id。
    *
    * @var string[]
    */
    protected static $setters = [
            'eipSize' => 'setEipSize',
            'elbWhiteListResp' => 'setElbWhiteListResp',
            'publicKibanaIp' => 'setPublicKibanaIp',
            'bandwidthResourceId' => 'setBandwidthResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eipSize  带宽大小。单位：Mbit/s
    * elbWhiteListResp  elbWhiteListResp
    * publicKibanaIp  kibana访问IP。
    * bandwidthResourceId  当前kibana公网对应的资源Id。
    *
    * @var string[]
    */
    protected static $getters = [
            'eipSize' => 'getEipSize',
            'elbWhiteListResp' => 'getElbWhiteListResp',
            'publicKibanaIp' => 'getPublicKibanaIp',
            'bandwidthResourceId' => 'getBandwidthResourceId'
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
        $this->container['eipSize'] = isset($data['eipSize']) ? $data['eipSize'] : null;
        $this->container['elbWhiteListResp'] = isset($data['elbWhiteListResp']) ? $data['elbWhiteListResp'] : null;
        $this->container['publicKibanaIp'] = isset($data['publicKibanaIp']) ? $data['publicKibanaIp'] : null;
        $this->container['bandwidthResourceId'] = isset($data['bandwidthResourceId']) ? $data['bandwidthResourceId'] : null;
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
    * Gets eipSize
    *  带宽大小。单位：Mbit/s
    *
    * @return int|null
    */
    public function getEipSize()
    {
        return $this->container['eipSize'];
    }

    /**
    * Sets eipSize
    *
    * @param int|null $eipSize 带宽大小。单位：Mbit/s
    *
    * @return $this
    */
    public function setEipSize($eipSize)
    {
        $this->container['eipSize'] = $eipSize;
        return $this;
    }

    /**
    * Gets elbWhiteListResp
    *  elbWhiteListResp
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\KibanaElbWhiteListResp|null
    */
    public function getElbWhiteListResp()
    {
        return $this->container['elbWhiteListResp'];
    }

    /**
    * Sets elbWhiteListResp
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\KibanaElbWhiteListResp|null $elbWhiteListResp elbWhiteListResp
    *
    * @return $this
    */
    public function setElbWhiteListResp($elbWhiteListResp)
    {
        $this->container['elbWhiteListResp'] = $elbWhiteListResp;
        return $this;
    }

    /**
    * Gets publicKibanaIp
    *  kibana访问IP。
    *
    * @return string|null
    */
    public function getPublicKibanaIp()
    {
        return $this->container['publicKibanaIp'];
    }

    /**
    * Sets publicKibanaIp
    *
    * @param string|null $publicKibanaIp kibana访问IP。
    *
    * @return $this
    */
    public function setPublicKibanaIp($publicKibanaIp)
    {
        $this->container['publicKibanaIp'] = $publicKibanaIp;
        return $this;
    }

    /**
    * Gets bandwidthResourceId
    *  当前kibana公网对应的资源Id。
    *
    * @return string|null
    */
    public function getBandwidthResourceId()
    {
        return $this->container['bandwidthResourceId'];
    }

    /**
    * Sets bandwidthResourceId
    *
    * @param string|null $bandwidthResourceId 当前kibana公网对应的资源Id。
    *
    * @return $this
    */
    public function setBandwidthResourceId($bandwidthResourceId)
    {
        $this->container['bandwidthResourceId'] = $bandwidthResourceId;
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

