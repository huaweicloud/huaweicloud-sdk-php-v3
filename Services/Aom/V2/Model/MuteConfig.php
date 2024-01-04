<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MuteConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MuteConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endsAt  静默规则结束时间
    * scope  当type为每周或者每月时，scope不能为空
    * startsAt  静默规则开始时间
    * type  静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endsAt' => 'int',
            'scope' => 'int[]',
            'startsAt' => 'int',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endsAt  静默规则结束时间
    * scope  当type为每周或者每月时，scope不能为空
    * startsAt  静默规则开始时间
    * type  静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endsAt' => 'int64',
        'scope' => 'int32',
        'startsAt' => 'int64',
        'type' => null
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
    * endsAt  静默规则结束时间
    * scope  当type为每周或者每月时，scope不能为空
    * startsAt  静默规则开始时间
    * type  静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endsAt' => 'ends_at',
            'scope' => 'scope',
            'startsAt' => 'starts_at',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endsAt  静默规则结束时间
    * scope  当type为每周或者每月时，scope不能为空
    * startsAt  静默规则开始时间
    * type  静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @var string[]
    */
    protected static $setters = [
            'endsAt' => 'setEndsAt',
            'scope' => 'setScope',
            'startsAt' => 'setStartsAt',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endsAt  静默规则结束时间
    * scope  当type为每周或者每月时，scope不能为空
    * startsAt  静默规则开始时间
    * type  静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @var string[]
    */
    protected static $getters = [
            'endsAt' => 'getEndsAt',
            'scope' => 'getScope',
            'startsAt' => 'getStartsAt',
            'type' => 'getType'
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
    const TYPE_FIXED = 'FIXED';
    const TYPE_DAILY = 'DAILY';
    const TYPE_WEEKLY = 'WEEKLY';
    const TYPE_MONTHLY = 'MONTHLY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FIXED,
            self::TYPE_DAILY,
            self::TYPE_WEEKLY,
            self::TYPE_MONTHLY,
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
        $this->container['endsAt'] = isset($data['endsAt']) ? $data['endsAt'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['startsAt'] = isset($data['startsAt']) ? $data['startsAt'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['endsAt']) && ($this->container['endsAt'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'endsAt', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['endsAt']) && ($this->container['endsAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'endsAt', must be bigger than or equal to 0.";
            }
        if ($this->container['startsAt'] === null) {
            $invalidProperties[] = "'startsAt' can't be null";
        }
            if (($this->container['startsAt'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'startsAt', must be smaller than or equal to 999999999.";
            }
            if (($this->container['startsAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'startsAt', must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['type']) > 100)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets endsAt
    *  静默规则结束时间
    *
    * @return int|null
    */
    public function getEndsAt()
    {
        return $this->container['endsAt'];
    }

    /**
    * Sets endsAt
    *
    * @param int|null $endsAt 静默规则结束时间
    *
    * @return $this
    */
    public function setEndsAt($endsAt)
    {
        $this->container['endsAt'] = $endsAt;
        return $this;
    }

    /**
    * Gets scope
    *  当type为每周或者每月时，scope不能为空
    *
    * @return int[]|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param int[]|null $scope 当type为每周或者每月时，scope不能为空
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets startsAt
    *  静默规则开始时间
    *
    * @return int
    */
    public function getStartsAt()
    {
        return $this->container['startsAt'];
    }

    /**
    * Sets startsAt
    *
    * @param int $startsAt 静默规则开始时间
    *
    * @return $this
    */
    public function setStartsAt($startsAt)
    {
        $this->container['startsAt'] = $startsAt;
        return $this;
    }

    /**
    * Gets type
    *  静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 静默规则生效时间种类。FIXED：固定方式统计，DAILY：按日合计，WEEKLY：按周统计，MONTHLY：按月统计
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

