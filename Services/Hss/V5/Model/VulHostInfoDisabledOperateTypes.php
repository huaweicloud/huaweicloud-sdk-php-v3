<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostInfoDisabledOperateTypes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostInfo_disabled_operate_types';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * reason  不可进行操作的原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateType' => 'string',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * reason  不可进行操作的原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateType' => null,
        'reason' => null
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
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * reason  不可进行操作的原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateType' => 'operate_type',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * reason  不可进行操作的原因
    *
    * @var string[]
    */
    protected static $setters = [
            'operateType' => 'setOperateType',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateType  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    * reason  不可进行操作的原因
    *
    * @var string[]
    */
    protected static $getters = [
            'operateType' => 'getOperateType',
            'reason' => 'getReason'
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
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) > 64)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 512)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
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
    * Gets operateType
    *  操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 操作类型 - ignore : 忽略 - not_ignore : 取消忽略 - immediate_repair : 修复 - manual_repair: 人工修复 - verify : 验证 - add_to_whitelist : 加入白名单
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
        return $this;
    }

    /**
    * Gets reason
    *  不可进行操作的原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 不可进行操作的原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

