<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteRecordSetsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteRecordSetsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneType  Zone的类型，取值为public或private。
    * recordsetIds  待删除的Record Set ID列表。 最多支持100个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneType' => 'string',
            'recordsetIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneType  Zone的类型，取值为public或private。
    * recordsetIds  待删除的Record Set ID列表。 最多支持100个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneType' => null,
        'recordsetIds' => null
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
    * zoneType  Zone的类型，取值为public或private。
    * recordsetIds  待删除的Record Set ID列表。 最多支持100个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneType' => 'zone_type',
            'recordsetIds' => 'recordset_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneType  Zone的类型，取值为public或private。
    * recordsetIds  待删除的Record Set ID列表。 最多支持100个。
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneType' => 'setZoneType',
            'recordsetIds' => 'setRecordsetIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneType  Zone的类型，取值为public或private。
    * recordsetIds  待删除的Record Set ID列表。 最多支持100个。
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneType' => 'getZoneType',
            'recordsetIds' => 'getRecordsetIds'
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
        $this->container['zoneType'] = isset($data['zoneType']) ? $data['zoneType'] : null;
        $this->container['recordsetIds'] = isset($data['recordsetIds']) ? $data['recordsetIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zoneType'] === null) {
            $invalidProperties[] = "'zoneType' can't be null";
        }
            if (!preg_match("/public|private/", $this->container['zoneType'])) {
                $invalidProperties[] = "invalid value for 'zoneType', must be conform to the pattern /public|private/.";
            }
        if ($this->container['recordsetIds'] === null) {
            $invalidProperties[] = "'recordsetIds' can't be null";
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
    * Gets zoneType
    *  Zone的类型，取值为public或private。
    *
    * @return string
    */
    public function getZoneType()
    {
        return $this->container['zoneType'];
    }

    /**
    * Sets zoneType
    *
    * @param string $zoneType Zone的类型，取值为public或private。
    *
    * @return $this
    */
    public function setZoneType($zoneType)
    {
        $this->container['zoneType'] = $zoneType;
        return $this;
    }

    /**
    * Gets recordsetIds
    *  待删除的Record Set ID列表。 最多支持100个。
    *
    * @return string[]
    */
    public function getRecordsetIds()
    {
        return $this->container['recordsetIds'];
    }

    /**
    * Sets recordsetIds
    *
    * @param string[] $recordsetIds 待删除的Record Set ID列表。 最多支持100个。
    *
    * @return $this
    */
    public function setRecordsetIds($recordsetIds)
    {
        $this->container['recordsetIds'] = $recordsetIds;
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

