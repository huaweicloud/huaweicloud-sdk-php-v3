<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFindingsReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFindingsReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  要更新的调查结果的ID。
    * resourceUrn  唯一的资源名称。
    * status  状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'string[]',
            'resourceUrn' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  要更新的调查结果的ID。
    * resourceUrn  唯一的资源名称。
    * status  状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => null,
        'resourceUrn' => null,
        'status' => null
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
    * ids  要更新的调查结果的ID。
    * resourceUrn  唯一的资源名称。
    * status  状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'resourceUrn' => 'resource_urn',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  要更新的调查结果的ID。
    * resourceUrn  唯一的资源名称。
    * status  状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'resourceUrn' => 'setResourceUrn',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  要更新的调查结果的ID。
    * resourceUrn  唯一的资源名称。
    * status  状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'resourceUrn' => 'getResourceUrn',
            'status' => 'getStatus'
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
    const STATUS_ACTIVE = 'active';
    const STATUS_ARCHIVED = 'archived';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ARCHIVED,
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['resourceUrn'] = isset($data['resourceUrn']) ? $data['resourceUrn'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be smaller than or equal to 1500.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ids
    *  要更新的调查结果的ID。
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids 要更新的调查结果的ID。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets resourceUrn
    *  唯一的资源名称。
    *
    * @return string|null
    */
    public function getResourceUrn()
    {
        return $this->container['resourceUrn'];
    }

    /**
    * Sets resourceUrn
    *
    * @param string|null $resourceUrn 唯一的资源名称。
    *
    * @return $this
    */
    public function setResourceUrn($resourceUrn)
    {
        $this->container['resourceUrn'] = $resourceUrn;
        return $this;
    }

    /**
    * Gets status
    *  状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态表示为更新查找状态而要采取的操作。使用“存档”将活动查找更改为存档查找。使用“活动”将存档的查找更改为活动查找。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

