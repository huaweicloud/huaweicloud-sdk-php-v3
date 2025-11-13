<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdatePublicRecordsetsTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdatePublicRecordsetsTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * filter  filter
    * updateInfo  updateInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneNames' => 'string[]',
            'filter' => '\HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsFilter',
            'updateInfo' => '\HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsUpdateValue'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * filter  filter
    * updateInfo  updateInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneNames' => null,
        'filter' => null,
        'updateInfo' => null
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
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * filter  filter
    * updateInfo  updateInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneNames' => 'zone_names',
            'filter' => 'filter',
            'updateInfo' => 'update_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * filter  filter
    * updateInfo  updateInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneNames' => 'setZoneNames',
            'filter' => 'setFilter',
            'updateInfo' => 'setUpdateInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneNames  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * filter  filter
    * updateInfo  updateInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneNames' => 'getZoneNames',
            'filter' => 'getFilter',
            'updateInfo' => 'getUpdateInfo'
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
        $this->container['zoneNames'] = isset($data['zoneNames']) ? $data['zoneNames'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['updateInfo'] = isset($data['updateInfo']) ? $data['updateInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zoneNames'] === null) {
            $invalidProperties[] = "'zoneNames' can't be null";
        }
        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
        if ($this->container['updateInfo'] === null) {
            $invalidProperties[] = "'updateInfo' can't be null";
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
    * Gets zoneNames
    *  **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]
    */
    public function getZoneNames()
    {
        return $this->container['zoneNames'];
    }

    /**
    * Sets zoneNames
    *
    * @param string[] $zoneNames **参数解释：** 托管该记录的域名。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setZoneNames($zoneNames)
    {
        $this->container['zoneNames'] = $zoneNames;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsFilter
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsFilter $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets updateInfo
    *  updateInfo
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsUpdateValue
    */
    public function getUpdateInfo()
    {
        return $this->container['updateInfo'];
    }

    /**
    * Sets updateInfo
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsUpdateValue $updateInfo updateInfo
    *
    * @return $this
    */
    public function setUpdateInfo($updateInfo)
    {
        $this->container['updateInfo'] = $updateInfo;
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

