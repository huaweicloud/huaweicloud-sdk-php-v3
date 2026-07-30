<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedeployConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'redeployConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
    * autoFlow  静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'autoFlow' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
    * autoFlow  静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'autoFlow' => null
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
    * type  节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
    * autoFlow  静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'autoFlow' => 'autoFlow'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
    * autoFlow  静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'autoFlow' => 'setAutoFlow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
    * autoFlow  静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'autoFlow' => 'getAutoFlow'
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
    const TYPE_SOFT = 'SOFT';
    const TYPE_HARD = 'HARD';
    const AUTO_FLOW_TRUE = 'true';
    const AUTO_FLOW_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SOFT,
            self::TYPE_HARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoFlowAllowableValues()
    {
        return [
            self::AUTO_FLOW_TRUE,
            self::AUTO_FLOW_FALSE,
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
        $this->container['autoFlow'] = isset($data['autoFlow']) ? $data['autoFlow'] : null;
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

            $allowedValues = $this->getAutoFlowAllowableValues();
                if (!is_null($this->container['autoFlow']) && !in_array($this->container['autoFlow'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoFlow', must be one of '%s'",
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
    * Gets type
    *  节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
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
    * @param string|null $type 节点的重部署类型。若节点状态为不可用，将无法进行SOFT模式，只能进行HARD模式，HARD模式包含节点重置操作，会导致本地盘及云盘上的全部数据丢失，请谨慎操作
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets autoFlow
    *  静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @return string|null
    */
    public function getAutoFlow()
    {
        return $this->container['autoFlow'];
    }

    /**
    * Sets autoFlow
    *
    * @param string|null $autoFlow 静默修复开关。开启autoFlow开关时，如重部署失败系统将自动流转至\"系统维护\"或发起\"二次重部署\"，并产生新的计划事件，该过程自动授权，无需二次授权
    *
    * @return $this
    */
    public function setAutoFlow($autoFlow)
    {
        $this->container['autoFlow'] = $autoFlow;
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

