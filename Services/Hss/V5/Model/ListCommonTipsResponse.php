<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCommonTipsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCommonTipsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  hostName
    * hostId  hostId
    * publicIp  publicIp
    * privateIp  privateIp
    * vpcId  vpcId
    * clusterId  clusterId
    * hostTags  hostTags
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => '\HuaweiCloud\SDK\Hss\V5\Model\CommonList',
            'hostId' => '\HuaweiCloud\SDK\Hss\V5\Model\CommonList',
            'publicIp' => '\HuaweiCloud\SDK\Hss\V5\Model\CommonList',
            'privateIp' => '\HuaweiCloud\SDK\Hss\V5\Model\CommonList',
            'vpcId' => '\HuaweiCloud\SDK\Hss\V5\Model\CommonList',
            'clusterId' => '\HuaweiCloud\SDK\Hss\V5\Model\CommonList',
            'hostTags' => '\HuaweiCloud\SDK\Hss\V5\Model\HostTagInfoList'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  hostName
    * hostId  hostId
    * publicIp  publicIp
    * privateIp  privateIp
    * vpcId  vpcId
    * clusterId  clusterId
    * hostTags  hostTags
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'publicIp' => null,
        'privateIp' => null,
        'vpcId' => null,
        'clusterId' => null,
        'hostTags' => null
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
    * hostName  hostName
    * hostId  hostId
    * publicIp  publicIp
    * privateIp  privateIp
    * vpcId  vpcId
    * clusterId  clusterId
    * hostTags  hostTags
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'vpcId' => 'vpc_id',
            'clusterId' => 'cluster_id',
            'hostTags' => 'host_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  hostName
    * hostId  hostId
    * publicIp  publicIp
    * privateIp  privateIp
    * vpcId  vpcId
    * clusterId  clusterId
    * hostTags  hostTags
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'vpcId' => 'setVpcId',
            'clusterId' => 'setClusterId',
            'hostTags' => 'setHostTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  hostName
    * hostId  hostId
    * publicIp  publicIp
    * privateIp  privateIp
    * vpcId  vpcId
    * clusterId  clusterId
    * hostTags  hostTags
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'vpcId' => 'getVpcId',
            'clusterId' => 'getClusterId',
            'hostTags' => 'getHostTags'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hostTags'] = isset($data['hostTags']) ? $data['hostTags'] : null;
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
    * Gets hostName
    *  hostName
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null $hostName hostName
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  hostId
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null $hostId hostId
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  privateIp
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null $privateIp privateIp
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpcId
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null $vpcId vpcId
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets clusterId
    *  clusterId
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CommonList|null $clusterId clusterId
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets hostTags
    *  hostTags
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostTagInfoList|null
    */
    public function getHostTags()
    {
        return $this->container['hostTags'];
    }

    /**
    * Sets hostTags
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostTagInfoList|null $hostTags hostTags
    *
    * @return $this
    */
    public function setHostTags($hostTags)
    {
        $this->container['hostTags'] = $hostTags;
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

