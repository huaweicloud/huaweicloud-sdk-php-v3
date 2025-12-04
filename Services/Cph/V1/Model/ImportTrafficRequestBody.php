<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportTrafficRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportTrafficRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * phoneIds  手机id列表，一次调用最多支持100个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trafficType' => 'string',
            'phoneIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * phoneIds  手机id列表，一次调用最多支持100个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trafficType' => null,
        'phoneIds' => null
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
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * phoneIds  手机id列表，一次调用最多支持100个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trafficType' => 'traffic_type',
            'phoneIds' => 'phone_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * phoneIds  手机id列表，一次调用最多支持100个。
    *
    * @var string[]
    */
    protected static $setters = [
            'trafficType' => 'setTrafficType',
            'phoneIds' => 'setPhoneIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trafficType  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    * phoneIds  手机id列表，一次调用最多支持100个。
    *
    * @var string[]
    */
    protected static $getters = [
            'trafficType' => 'getTrafficType',
            'phoneIds' => 'getPhoneIds'
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
        $this->container['trafficType'] = isset($data['trafficType']) ? $data['trafficType'] : null;
        $this->container['phoneIds'] = isset($data['phoneIds']) ? $data['phoneIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['trafficType'] === null) {
            $invalidProperties[] = "'trafficType' can't be null";
        }
            if ((mb_strlen($this->container['trafficType']) > 10)) {
                $invalidProperties[] = "invalid value for 'trafficType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['trafficType']) < 0)) {
                $invalidProperties[] = "invalid value for 'trafficType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['phoneIds'] === null) {
            $invalidProperties[] = "'phoneIds' can't be null";
        }
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
    * Gets trafficType
    *  手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    *
    * @return string
    */
    public function getTrafficType()
    {
        return $this->container['trafficType'];
    }

    /**
    * Sets trafficType
    *
    * @param string $trafficType 手机路由类型。 - direct：默认路由 - routing：路由到编码容器
    *
    * @return $this
    */
    public function setTrafficType($trafficType)
    {
        $this->container['trafficType'] = $trafficType;
        return $this;
    }

    /**
    * Gets phoneIds
    *  手机id列表，一次调用最多支持100个。
    *
    * @return string[]
    */
    public function getPhoneIds()
    {
        return $this->container['phoneIds'];
    }

    /**
    * Sets phoneIds
    *
    * @param string[] $phoneIds 手机id列表，一次调用最多支持100个。
    *
    * @return $this
    */
    public function setPhoneIds($phoneIds)
    {
        $this->container['phoneIds'] = $phoneIds;
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

