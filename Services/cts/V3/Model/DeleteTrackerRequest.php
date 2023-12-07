<?php

namespace HuaweiCloud\SDK\Cts\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteTrackerRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteTrackerRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trackerName  标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    * trackerType  标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trackerName' => 'string',
            'trackerType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trackerName  标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    * trackerType  标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trackerName' => null,
        'trackerType' => null
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
    * trackerName  标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    * trackerType  标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trackerName' => 'tracker_name',
            'trackerType' => 'tracker_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trackerName  标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    * trackerType  标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @var string[]
    */
    protected static $setters = [
            'trackerName' => 'setTrackerName',
            'trackerType' => 'setTrackerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trackerName  标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    * trackerType  标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @var string[]
    */
    protected static $getters = [
            'trackerName' => 'getTrackerName',
            'trackerType' => 'getTrackerType'
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
    const TRACKER_TYPE_DATA = 'data';
    const TRACKER_TYPE_SYSTEM = 'system';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTrackerTypeAllowableValues()
    {
        return [
            self::TRACKER_TYPE_DATA,
            self::TRACKER_TYPE_SYSTEM,
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
        $this->container['trackerName'] = isset($data['trackerName']) ? $data['trackerName'] : null;
        $this->container['trackerType'] = isset($data['trackerType']) ? $data['trackerType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['trackerName']) && (mb_strlen($this->container['trackerName']) > 32)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['trackerName']) && (mb_strlen($this->container['trackerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'trackerName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTrackerTypeAllowableValues();
                if (!is_null($this->container['trackerType']) && !in_array($this->container['trackerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trackerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['trackerType']) && (mb_strlen($this->container['trackerType']) > 32)) {
                $invalidProperties[] = "invalid value for 'trackerType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['trackerType']) && (mb_strlen($this->container['trackerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'trackerType', the character length must be bigger than or equal to 1.";
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
    * Gets trackerName
    *  标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    *
    * @return string|null
    */
    public function getTrackerName()
    {
        return $this->container['trackerName'];
    }

    /**
    * Sets trackerName
    *
    * @param string|null $trackerName 标识追踪器名称。 在不传入该字段的情况下，将删除当前租户所有的数据类追踪器。
    *
    * @return $this
    */
    public function setTrackerName($trackerName)
    {
        $this->container['trackerName'] = $trackerName;
        return $this;
    }

    /**
    * Gets trackerType
    *  标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @return string|null
    */
    public function getTrackerType()
    {
        return $this->container['trackerType'];
    }

    /**
    * Sets trackerType
    *
    * @param string|null $trackerType 标识追踪器类型。 默认值为\"data\"。传入\"system\"时，配合tracker_name参数可删除管理类追踪器。
    *
    * @return $this
    */
    public function setTrackerType($trackerType)
    {
        $this->container['trackerType'] = $trackerType;
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

