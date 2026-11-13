<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpcPeeringInfosResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpcPeeringInfosResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * peeringInfos  对等连接信息对象列表
    * peeringInfosLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'peeringInfos' => '\HuaweiCloud\SDK\Vpc\V2\Model\VpcPeering[]',
            'peeringInfosLinks' => '\HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * peeringInfos  对等连接信息对象列表
    * peeringInfosLinks  分页信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'peeringInfos' => null,
        'peeringInfosLinks' => null
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
    * peeringInfos  对等连接信息对象列表
    * peeringInfosLinks  分页信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'peeringInfos' => 'peering_infos',
            'peeringInfosLinks' => 'peering_infos_links'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * peeringInfos  对等连接信息对象列表
    * peeringInfosLinks  分页信息
    *
    * @var string[]
    */
    protected static $setters = [
            'peeringInfos' => 'setPeeringInfos',
            'peeringInfosLinks' => 'setPeeringInfosLinks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * peeringInfos  对等连接信息对象列表
    * peeringInfosLinks  分页信息
    *
    * @var string[]
    */
    protected static $getters = [
            'peeringInfos' => 'getPeeringInfos',
            'peeringInfosLinks' => 'getPeeringInfosLinks'
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
        $this->container['peeringInfos'] = isset($data['peeringInfos']) ? $data['peeringInfos'] : null;
        $this->container['peeringInfosLinks'] = isset($data['peeringInfosLinks']) ? $data['peeringInfosLinks'] : null;
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
    * Gets peeringInfos
    *  对等连接信息对象列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\VpcPeering[]|null
    */
    public function getPeeringInfos()
    {
        return $this->container['peeringInfos'];
    }

    /**
    * Sets peeringInfos
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\VpcPeering[]|null $peeringInfos 对等连接信息对象列表
    *
    * @return $this
    */
    public function setPeeringInfos($peeringInfos)
    {
        $this->container['peeringInfos'] = $peeringInfos;
        return $this;
    }

    /**
    * Gets peeringInfosLinks
    *  分页信息
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null
    */
    public function getPeeringInfosLinks()
    {
        return $this->container['peeringInfosLinks'];
    }

    /**
    * Sets peeringInfosLinks
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\NeutronPageLink[]|null $peeringInfosLinks 分页信息
    *
    * @return $this
    */
    public function setPeeringInfosLinks($peeringInfosLinks)
    {
        $this->container['peeringInfosLinks'] = $peeringInfosLinks;
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

