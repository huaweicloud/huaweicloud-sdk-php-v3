<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteRelationResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteRelationResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    * count  关联数
    * detailUrl  关联资源链接
    * data  关联资源信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'count' => 'int',
            'detailUrl' => 'string',
            'data' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Data[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    * count  关联数
    * detailUrl  关联资源链接
    * data  关联资源信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'count' => 'int32',
        'detailUrl' => null,
        'data' => null
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
    * type  关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    * count  关联数
    * detailUrl  关联资源链接
    * data  关联资源信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'count' => 'count',
            'detailUrl' => 'detail_url',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    * count  关联数
    * detailUrl  关联资源链接
    * data  关联资源信息
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'count' => 'setCount',
            'detailUrl' => 'setDetailUrl',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    * count  关联数
    * detailUrl  关联资源链接
    * data  关联资源信息
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'count' => 'getCount',
            'detailUrl' => 'getDetailUrl',
            'data' => 'getData'
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
    const TYPE_DPE = 'DPE';
    const TYPE_ALERT_RULE = 'ALERT_RULE';
    const TYPE_DATAOBJECT = 'DATAOBJECT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DPE,
            self::TYPE_ALERT_RULE,
            self::TYPE_DATAOBJECT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['detailUrl'] = isset($data['detailUrl']) ? $data['detailUrl'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['count']) && ($this->container['count'] > 100)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detailUrl']) && (mb_strlen($this->container['detailUrl']) > 64)) {
                $invalidProperties[] = "invalid value for 'detailUrl', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['detailUrl']) && (mb_strlen($this->container['detailUrl']) < 2)) {
                $invalidProperties[] = "invalid value for 'detailUrl', the character length must be bigger than or equal to 2.";
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
    * Gets type
    *  关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 关联资源类型,DPE,ALERT_RULE,DATAOBJECT
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets count
    *  关联数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 关联数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets detailUrl
    *  关联资源链接
    *
    * @return string|null
    */
    public function getDetailUrl()
    {
        return $this->container['detailUrl'];
    }

    /**
    * Sets detailUrl
    *
    * @param string|null $detailUrl 关联资源链接
    *
    * @return $this
    */
    public function setDetailUrl($detailUrl)
    {
        $this->container['detailUrl'] = $detailUrl;
        return $this;
    }

    /**
    * Gets data
    *  关联资源信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Data[]|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Data[]|null $data 关联资源信息
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

