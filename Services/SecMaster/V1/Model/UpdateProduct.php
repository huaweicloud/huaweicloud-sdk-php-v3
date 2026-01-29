<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateProduct';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  变更后的资源类型
    * resourceSpecCode  变更后的商品规格编码
    * resourceSize  变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    * resourceId  要进行变更的资源ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'resourceSpecCode' => 'string',
            'resourceSize' => 'int',
            'resourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  变更后的资源类型
    * resourceSpecCode  变更后的商品规格编码
    * resourceSize  变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    * resourceId  要进行变更的资源ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceSpecCode' => null,
        'resourceSize' => null,
        'resourceId' => null
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
    * resourceType  变更后的资源类型
    * resourceSpecCode  变更后的商品规格编码
    * resourceSize  变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    * resourceId  要进行变更的资源ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceSize' => 'resource_size',
            'resourceId' => 'resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  变更后的资源类型
    * resourceSpecCode  变更后的商品规格编码
    * resourceSize  变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    * resourceId  要进行变更的资源ID
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceSize' => 'setResourceSize',
            'resourceId' => 'setResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  变更后的资源类型
    * resourceSpecCode  变更后的商品规格编码
    * resourceSize  变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    * resourceId  要进行变更的资源ID
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceSize' => 'getResourceSize',
            'resourceId' => 'getResourceId'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceType']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceSpecCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['resourceSize'] === null) {
            $invalidProperties[] = "'resourceSize' can't be null";
        }
            if (($this->container['resourceSize'] > 10000)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be smaller than or equal to 10000.";
            }
            if (($this->container['resourceSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be bigger than or equal to 1.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 2.";
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
    * Gets resourceType
    *  变更后的资源类型
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 变更后的资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  变更后的商品规格编码
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 变更后的商品规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceSize
    *  变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    *
    * @return int
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int $resourceSize 变更后的资源配额 如果operate_type为addition时，resource_size必须要大于原来的resource_id，decrease时要小于原来的resource_size，并且大于等于当前project下的ecs数量
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets resourceId
    *  要进行变更的资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 要进行变更的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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

