<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Compliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Compliance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkitemId  检查项（检查规则）编号
    * checkpointId  检查点（检查结果）编号，检查项对同一个资源的检查结果
    * specId  检查规范编号，默认选第一个
    * status  合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
    * properties  属性信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkitemId' => 'string',
            'checkpointId' => 'string',
            'specId' => 'string',
            'status' => 'string',
            'properties' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkitemId  检查项（检查规则）编号
    * checkpointId  检查点（检查结果）编号，检查项对同一个资源的检查结果
    * specId  检查规范编号，默认选第一个
    * status  合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
    * properties  属性信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkitemId' => null,
        'checkpointId' => null,
        'specId' => null,
        'status' => null,
        'properties' => null
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
    * checkitemId  检查项（检查规则）编号
    * checkpointId  检查点（检查结果）编号，检查项对同一个资源的检查结果
    * specId  检查规范编号，默认选第一个
    * status  合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
    * properties  属性信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkitemId' => 'checkitem_id',
            'checkpointId' => 'checkpoint_id',
            'specId' => 'spec_id',
            'status' => 'status',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkitemId  检查项（检查规则）编号
    * checkpointId  检查点（检查结果）编号，检查项对同一个资源的检查结果
    * specId  检查规范编号，默认选第一个
    * status  合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
    * properties  属性信息
    *
    * @var string[]
    */
    protected static $setters = [
            'checkitemId' => 'setCheckitemId',
            'checkpointId' => 'setCheckpointId',
            'specId' => 'setSpecId',
            'status' => 'setStatus',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkitemId  检查项（检查规则）编号
    * checkpointId  检查点（检查结果）编号，检查项对同一个资源的检查结果
    * specId  检查规范编号，默认选第一个
    * status  合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
    * properties  属性信息
    *
    * @var string[]
    */
    protected static $getters = [
            'checkitemId' => 'getCheckitemId',
            'checkpointId' => 'getCheckpointId',
            'specId' => 'getSpecId',
            'status' => 'getStatus',
            'properties' => 'getProperties'
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
        $this->container['checkitemId'] = isset($data['checkitemId']) ? $data['checkitemId'] : null;
        $this->container['checkpointId'] = isset($data['checkpointId']) ? $data['checkpointId'] : null;
        $this->container['specId'] = isset($data['specId']) ? $data['specId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['checkitemId'] === null) {
            $invalidProperties[] = "'checkitemId' can't be null";
        }
            if ((mb_strlen($this->container['checkitemId']) > 512)) {
                $invalidProperties[] = "invalid value for 'checkitemId', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['checkitemId']) < 1)) {
                $invalidProperties[] = "invalid value for 'checkitemId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['checkpointId'] === null) {
            $invalidProperties[] = "'checkpointId' can't be null";
        }
            if ((mb_strlen($this->container['checkpointId']) > 512)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['checkpointId']) < 1)) {
                $invalidProperties[] = "invalid value for 'checkpointId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['specId'] === null) {
            $invalidProperties[] = "'specId' can't be null";
        }
            if ((mb_strlen($this->container['specId']) > 512)) {
                $invalidProperties[] = "invalid value for 'specId', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['specId']) < 1)) {
                $invalidProperties[] = "invalid value for 'specId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 512)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['properties']) && (mb_strlen($this->container['properties']) > 512)) {
                $invalidProperties[] = "invalid value for 'properties', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['properties']) && (mb_strlen($this->container['properties']) < 1)) {
                $invalidProperties[] = "invalid value for 'properties', the character length must be bigger than or equal to 1.";
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
    * Gets checkitemId
    *  检查项（检查规则）编号
    *
    * @return string
    */
    public function getCheckitemId()
    {
        return $this->container['checkitemId'];
    }

    /**
    * Sets checkitemId
    *
    * @param string $checkitemId 检查项（检查规则）编号
    *
    * @return $this
    */
    public function setCheckitemId($checkitemId)
    {
        $this->container['checkitemId'] = $checkitemId;
        return $this;
    }

    /**
    * Gets checkpointId
    *  检查点（检查结果）编号，检查项对同一个资源的检查结果
    *
    * @return string
    */
    public function getCheckpointId()
    {
        return $this->container['checkpointId'];
    }

    /**
    * Sets checkpointId
    *
    * @param string $checkpointId 检查点（检查结果）编号，检查项对同一个资源的检查结果
    *
    * @return $this
    */
    public function setCheckpointId($checkpointId)
    {
        $this->container['checkpointId'] = $checkpointId;
        return $this;
    }

    /**
    * Gets specId
    *  检查规范编号，默认选第一个
    *
    * @return string
    */
    public function getSpecId()
    {
        return $this->container['specId'];
    }

    /**
    * Sets specId
    *
    * @param string $specId 检查规范编号，默认选第一个
    *
    * @return $this
    */
    public function setSpecId($specId)
    {
        $this->container['specId'] = $specId;
        return $this;
    }

    /**
    * Gets status
    *  合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
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
    * @param string $status 合规检查结果，取值定义：PASSED、WARNING、FAILED、NOT_AVAILABLE。 说明： PASSED - 接受评估的所有资源都已通过安全检查。 WARNING - 某些信息缺失或配置不支持此检查。 FAILED - 至少有一个接受评估的资源未能通过安全检查。 NOT_AVAILABLE - 由于服务中断或 API 错误，无法执行检查。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets properties
    *  属性信息
    *
    * @return string|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param string|null $properties 属性信息
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

