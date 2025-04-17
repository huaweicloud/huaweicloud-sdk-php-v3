<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * firstDimensionName  资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    * firstDimensionValue  资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'firstDimensionName' => 'string',
            'firstDimensionValue' => 'string',
            'resourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * firstDimensionName  资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    * firstDimensionValue  资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'firstDimensionName' => null,
        'firstDimensionValue' => null,
        'resourceName' => null
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
    * firstDimensionName  资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    * firstDimensionValue  资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'firstDimensionName' => 'first_dimension_name',
            'firstDimensionValue' => 'first_dimension_value',
            'resourceName' => 'resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * firstDimensionName  资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    * firstDimensionValue  资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $setters = [
            'firstDimensionName' => 'setFirstDimensionName',
            'firstDimensionValue' => 'setFirstDimensionValue',
            'resourceName' => 'setResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * firstDimensionName  资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    * firstDimensionValue  资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $getters = [
            'firstDimensionName' => 'getFirstDimensionName',
            'firstDimensionValue' => 'getFirstDimensionValue',
            'resourceName' => 'getResourceName'
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
        $this->container['firstDimensionName'] = isset($data['firstDimensionName']) ? $data['firstDimensionName'] : null;
        $this->container['firstDimensionValue'] = isset($data['firstDimensionValue']) ? $data['firstDimensionValue'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['firstDimensionName'] === null) {
            $invalidProperties[] = "'firstDimensionName' can't be null";
        }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){1,32}$/", $this->container['firstDimensionName'])) {
                $invalidProperties[] = "invalid value for 'firstDimensionName', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){1,32}$/.";
            }
        if ($this->container['firstDimensionValue'] === null) {
            $invalidProperties[] = "'firstDimensionValue' can't be null";
        }
            if (!preg_match("/^((([a-z]|[A-Z]|[0-9]){1}([a-z]|[A-Z]|[0-9]|_|-|\\.)*)|\\*){1,256}$/", $this->container['firstDimensionValue'])) {
                $invalidProperties[] = "invalid value for 'firstDimensionValue', must be conform to the pattern /^((([a-z]|[A-Z]|[0-9]){1}([a-z]|[A-Z]|[0-9]|_|-|\\.)*)|\\*){1,256}$/.";
            }
        if ($this->container['resourceName'] === null) {
            $invalidProperties[] = "'resourceName' can't be null";
        }
            if ((mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
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
    * Gets firstDimensionName
    *  资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    *
    * @return string
    */
    public function getFirstDimensionName()
    {
        return $this->container['firstDimensionName'];
    }

    /**
    * Sets firstDimensionName
    *
    * @param string $firstDimensionName 资源首层维度，如：弹性云服务器，则维度为instance_id；”。
    *
    * @return $this
    */
    public function setFirstDimensionName($firstDimensionName)
    {
        $this->container['firstDimensionName'] = $firstDimensionName;
        return $this;
    }

    /**
    * Gets firstDimensionValue
    *  资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    *
    * @return string
    */
    public function getFirstDimensionValue()
    {
        return $this->container['firstDimensionValue'];
    }

    /**
    * Sets firstDimensionValue
    *
    * @param string $firstDimensionValue 资源首层维度值，为资源的实例ID，如：4270ff17-aba3-4138-89fa-820594c39755。
    *
    * @return $this
    */
    public function setFirstDimensionValue($firstDimensionValue)
    {
        $this->container['firstDimensionValue'] = $firstDimensionValue;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
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

