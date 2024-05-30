<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DsProcessImportResultVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DsProcessImportResultVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    * group  group
    * rate  当前进度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'group' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOperationVO',
            'rate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    * group  group
    * rate  当前进度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'group' => null,
        'rate' => null
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
    * status  标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    * group  group
    * rate  当前进度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'group' => 'group',
            'rate' => 'rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    * group  group
    * rate  当前进度。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'group' => 'setGroup',
            'rate' => 'setRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    * group  group
    * rate  当前进度。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'group' => 'getGroup',
            'rate' => 'getRate'
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
    const STATUS_IMPORTING = 'importing';
    const STATUS_FAIL = 'fail';
    const STATUS_SUCCESS = 'success';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IMPORTING,
            self::STATUS_FAIL,
            self::STATUS_SUCCESS,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets status
    *  标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 标识本次导入的唯一值，用于查询导入结果。 枚举值：   - importing: 导入中   - fail: 导入失败   - success: 导入成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets group
    *  group
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOperationVO|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOperationVO|null $group group
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets rate
    *  当前进度。
    *
    * @return string|null
    */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
    * Sets rate
    *
    * @param string|null $rate 当前进度。
    *
    * @return $this
    */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;
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

