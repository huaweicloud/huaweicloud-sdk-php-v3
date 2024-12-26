<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsRuleListVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsRuleListVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceId  fwInstanceId
    * limit  limit
    * objectId  objectId
    * offset  offset
    * records  records
    * total  total
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceId' => 'string',
            'limit' => 'int',
            'objectId' => 'string',
            'offset' => 'int',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\IpsRuleVO[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceId  fwInstanceId
    * limit  limit
    * objectId  objectId
    * offset  offset
    * records  records
    * total  total
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceId' => null,
        'limit' => 'int32',
        'objectId' => null,
        'offset' => 'int32',
        'records' => null,
        'total' => 'int32'
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
    * fwInstanceId  fwInstanceId
    * limit  limit
    * objectId  objectId
    * offset  offset
    * records  records
    * total  total
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceId' => 'fw_instance_id',
            'limit' => 'limit',
            'objectId' => 'object_id',
            'offset' => 'offset',
            'records' => 'records',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceId  fwInstanceId
    * limit  limit
    * objectId  objectId
    * offset  offset
    * records  records
    * total  total
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceId' => 'setFwInstanceId',
            'limit' => 'setLimit',
            'objectId' => 'setObjectId',
            'offset' => 'setOffset',
            'records' => 'setRecords',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceId  fwInstanceId
    * limit  limit
    * objectId  objectId
    * offset  offset
    * records  records
    * total  total
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceId' => 'getFwInstanceId',
            'limit' => 'getLimit',
            'objectId' => 'getObjectId',
            'offset' => 'getOffset',
            'records' => 'getRecords',
            'total' => 'getTotal'
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
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets fwInstanceId
    *  fwInstanceId
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId fwInstanceId
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets objectId
    *  objectId
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId objectId
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets records
    *  records
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\IpsRuleVO[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\IpsRuleVO[]|null $records records
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets total
    *  total
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total total
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

