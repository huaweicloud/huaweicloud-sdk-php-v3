<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configStatus  **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * list  文件配置列表
    * nodeId  节点ID
    * nodeName  节点名称
    * specification  规范
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configStatus' => 'string',
            'list' => '\HuaweiCloud\SDK\SecMaster\V1\Model\FileConfiguration[]',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'specification' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configStatus  **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * list  文件配置列表
    * nodeId  节点ID
    * nodeName  节点名称
    * specification  规范
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configStatus' => null,
        'list' => null,
        'nodeId' => null,
        'nodeName' => null,
        'specification' => null
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
    * configStatus  **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * list  文件配置列表
    * nodeId  节点ID
    * nodeName  节点名称
    * specification  规范
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configStatus' => 'config_status',
            'list' => 'list',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'specification' => 'specification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configStatus  **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * list  文件配置列表
    * nodeId  节点ID
    * nodeName  节点名称
    * specification  规范
    *
    * @var string[]
    */
    protected static $setters = [
            'configStatus' => 'setConfigStatus',
            'list' => 'setList',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'specification' => 'setSpecification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configStatus  **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    * list  文件配置列表
    * nodeId  节点ID
    * nodeName  节点名称
    * specification  规范
    *
    * @var string[]
    */
    protected static $getters = [
            'configStatus' => 'getConfigStatus',
            'list' => 'getList',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'specification' => 'getSpecification'
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
    const CONFIG_STATUS_UN_SAVED = 'UN_SAVED';
    const CONFIG_STATUS_SAVE_AND_UN_APPLY = 'SAVE_AND_UN_APPLY';
    const CONFIG_STATUS_MOVE_AND_UN_APPLY = 'MOVE_AND_UN_APPLY';
    const CONFIG_STATUS_APPLYING = 'APPLYING';
    const CONFIG_STATUS_FAIL_APPLY = 'FAIL_APPLY';
    const CONFIG_STATUS_APPLIED = 'APPLIED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConfigStatusAllowableValues()
    {
        return [
            self::CONFIG_STATUS_UN_SAVED,
            self::CONFIG_STATUS_SAVE_AND_UN_APPLY,
            self::CONFIG_STATUS_MOVE_AND_UN_APPLY,
            self::CONFIG_STATUS_APPLYING,
            self::CONFIG_STATUS_FAIL_APPLY,
            self::CONFIG_STATUS_APPLIED,
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
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getConfigStatusAllowableValues();
                if (!is_null($this->container['configStatus']) && !in_array($this->container['configStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'configStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['list'] === null) {
            $invalidProperties[] = "'list' can't be null";
        }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) > 1024)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) < 1)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 1.";
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
    * Gets configStatus
    *  **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param string|null $configStatus **参数解释**: 节点部署状态 - UN_SAVED 待保存 - SAVE_AND_UN_APPLY 待应用 - MOVE_AND_UN_APPLY 待移除 - APPLYING 应用中 - FAIL_APPLY 应用失败 - APPLIED 应用完成  **约束限制** 不涉及 **取值范围**: - UN_SAVED - SAVE_AND_UN_APPLY - MOVE_AND_UN_APPLY - APPLYING - FAIL_APPLY - APPLIED  **默认值** 不涉及
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets list
    *  文件配置列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\FileConfiguration[]
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\FileConfiguration[] $list 文件配置列表
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets specification
    *  规范
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 规范
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
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

