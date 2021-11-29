<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaServerSchedulerHints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaServerSchedulerHints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenancy' => 'string[]',
            'dedicatedHostId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenancy' => null,
        'dedicatedHostId' => null
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
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenancy' => 'tenancy',
            'dedicatedHostId' => 'dedicated_host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenancy' => 'setTenancy',
            'dedicatedHostId' => 'setDedicatedHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenancy' => 'getTenancy',
            'dedicatedHostId' => 'getDedicatedHostId'
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
    const TENANCY_SHARED = 'shared';
    const TENANCY_DEDICATED = 'dedicated';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTenancyAllowableValues()
    {
        return [
            self::TENANCY_SHARED,
            self::TENANCY_DEDICATED,
        ];
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
        $this->container['tenancy'] = isset($data['tenancy']) ? $data['tenancy'] : null;
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
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
    * Gets tenancy
    *  在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    *
    * @return string[]|null
    */
    public function getTenancy()
    {
        return $this->container['tenancy'];
    }

    /**
    * Sets tenancy
    *
    * @param string[]|null $tenancy 在指定的专属主机或者共享主机上创建弹性云服务器。 参数值为shared或者dedicated。
    *
    * @return $this
    */
    public function setTenancy($tenancy)
    {
        $this->container['tenancy'] = $tenancy;
        return $this;
    }

    /**
    * Gets dedicatedHostId
    *  专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @return string[]|null
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string[]|null $dedicatedHostId 专属主机ID。 此属性仅在tenancy值为dedicated时有效。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
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

