<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecuritySecrecyLevelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecuritySecrecyLevelsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * offset  offset
    * limit  limit
    * orderBy  排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    * desc  排序规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orderBy' => 'string',
            'desc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * offset  offset
    * limit  limit
    * orderBy  排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    * desc  排序规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'offset' => null,
        'limit' => null,
        'orderBy' => null,
        'desc' => null
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
    * workspace  DataArts Studio工作空间ID
    * offset  offset
    * limit  limit
    * orderBy  排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    * desc  排序规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'offset' => 'offset',
            'limit' => 'limit',
            'orderBy' => 'order_by',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * offset  offset
    * limit  limit
    * orderBy  排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    * desc  排序规则
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orderBy' => 'setOrderBy',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * offset  offset
    * limit  limit
    * orderBy  排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    * desc  排序规则
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orderBy' => 'getOrderBy',
            'desc' => 'getDesc'
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
    const ORDER_BY_CREATED_AT = 'createdAt';
    const ORDER_BY_CREATED_BY = 'createdBy';
    const ORDER_BY_UPDATED_AT = 'updatedAt';
    const ORDER_BY_UPDATED_BY = 'updatedBy';
    const ORDER_BY_NAME = 'name';
    const ORDER_BY_DESCRIPTION = 'description';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_CREATED_AT,
            self::ORDER_BY_CREATED_BY,
            self::ORDER_BY_UPDATED_AT,
            self::ORDER_BY_UPDATED_BY,
            self::ORDER_BY_NAME,
            self::ORDER_BY_DESCRIPTION,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
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
    * Gets orderBy
    *  排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序字段, createdAt, createdBy, updatedAt, updatedBy, name, description
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets desc
    *  排序规则
    *
    * @return bool|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param bool|null $desc 排序规则
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

