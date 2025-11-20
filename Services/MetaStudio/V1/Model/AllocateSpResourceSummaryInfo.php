<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AllocateSpResourceSummaryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AllocateSpResourceSummaryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSpecCode  资源规格编码
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceRemindQuota  资源在TMS上的剩余量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSpecCode' => 'string',
            'resourceNum' => 'double',
            'resourceUsedNum' => 'double',
            'resourceRemindQuota' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSpecCode  资源规格编码
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceRemindQuota  资源在TMS上的剩余量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSpecCode' => null,
        'resourceNum' => 'double',
        'resourceUsedNum' => 'double',
        'resourceRemindQuota' => 'double'
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
    * resourceSpecCode  资源规格编码
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceRemindQuota  资源在TMS上的剩余量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSpecCode' => 'resource_spec_code',
            'resourceNum' => 'resource_num',
            'resourceUsedNum' => 'resource_used_num',
            'resourceRemindQuota' => 'resource_remind_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSpecCode  资源规格编码
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceRemindQuota  资源在TMS上的剩余量
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceNum' => 'setResourceNum',
            'resourceUsedNum' => 'setResourceUsedNum',
            'resourceRemindQuota' => 'setResourceRemindQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSpecCode  资源规格编码
    * resourceNum  资源数量。
    * resourceUsedNum  资源已使用数量。
    * resourceRemindQuota  资源在TMS上的剩余量
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceNum' => 'getResourceNum',
            'resourceUsedNum' => 'getResourceUsedNum',
            'resourceRemindQuota' => 'getResourceRemindQuota'
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
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceNum'] = isset($data['resourceNum']) ? $data['resourceNum'] : null;
        $this->container['resourceUsedNum'] = isset($data['resourceUsedNum']) ? $data['resourceUsedNum'] : null;
        $this->container['resourceRemindQuota'] = isset($data['resourceRemindQuota']) ? $data['resourceRemindQuota'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceNum']) && ($this->container['resourceNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceNum']) && ($this->container['resourceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceUsedNum']) && ($this->container['resourceUsedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceUsedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceUsedNum']) && ($this->container['resourceUsedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceUsedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceRemindQuota']) && ($this->container['resourceRemindQuota'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'resourceRemindQuota', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['resourceRemindQuota']) && ($this->container['resourceRemindQuota'] < 0)) {
                $invalidProperties[] = "invalid value for 'resourceRemindQuota', must be bigger than or equal to 0.";
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
    * Gets resourceSpecCode
    *  资源规格编码
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceNum
    *  资源数量。
    *
    * @return double|null
    */
    public function getResourceNum()
    {
        return $this->container['resourceNum'];
    }

    /**
    * Sets resourceNum
    *
    * @param double|null $resourceNum 资源数量。
    *
    * @return $this
    */
    public function setResourceNum($resourceNum)
    {
        $this->container['resourceNum'] = $resourceNum;
        return $this;
    }

    /**
    * Gets resourceUsedNum
    *  资源已使用数量。
    *
    * @return double|null
    */
    public function getResourceUsedNum()
    {
        return $this->container['resourceUsedNum'];
    }

    /**
    * Sets resourceUsedNum
    *
    * @param double|null $resourceUsedNum 资源已使用数量。
    *
    * @return $this
    */
    public function setResourceUsedNum($resourceUsedNum)
    {
        $this->container['resourceUsedNum'] = $resourceUsedNum;
        return $this;
    }

    /**
    * Gets resourceRemindQuota
    *  资源在TMS上的剩余量
    *
    * @return double|null
    */
    public function getResourceRemindQuota()
    {
        return $this->container['resourceRemindQuota'];
    }

    /**
    * Sets resourceRemindQuota
    *
    * @param double|null $resourceRemindQuota 资源在TMS上的剩余量
    *
    * @return $this
    */
    public function setResourceRemindQuota($resourceRemindQuota)
    {
        $this->container['resourceRemindQuota'] = $resourceRemindQuota;
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

