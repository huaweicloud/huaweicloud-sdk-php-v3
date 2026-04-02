<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PremiumWafInstanceStatusResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PremiumWafInstanceStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例id
    * instanceName  实例名称
    * status  **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    * runStatus  **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'instanceName' => 'string',
            'status' => 'int',
            'runStatus' => 'int',
            'accessStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例id
    * instanceName  实例名称
    * status  **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    * runStatus  **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'instanceName' => null,
        'status' => 'int32',
        'runStatus' => 'int32',
        'accessStatus' => 'int32'
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
    * id  实例id
    * instanceName  实例名称
    * status  **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    * runStatus  **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceName' => 'instance_name',
            'status' => 'status',
            'runStatus' => 'run_status',
            'accessStatus' => 'access_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例id
    * instanceName  实例名称
    * status  **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    * runStatus  **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceName' => 'setInstanceName',
            'status' => 'setStatus',
            'runStatus' => 'setRunStatus',
            'accessStatus' => 'setAccessStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例id
    * instanceName  实例名称
    * status  **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    * runStatus  **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    * accessStatus  **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceName' => 'getInstanceName',
            'status' => 'getStatus',
            'runStatus' => 'getRunStatus',
            'accessStatus' => 'getAccessStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['runStatus']) && ($this->container['runStatus'] > 8)) {
                $invalidProperties[] = "invalid value for 'runStatus', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['runStatus']) && ($this->container['runStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'runStatus', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessStatus']) && ($this->container['accessStatus'] > 2)) {
                $invalidProperties[] = "invalid value for 'accessStatus', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['accessStatus']) && ($this->container['accessStatus'] < 0)) {
                $invalidProperties[] = "invalid value for 'accessStatus', must be bigger than or equal to 0.";
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
    * Gets id
    *  实例id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 实例计费状态 **约束限制：** 不涉及 **取值范围：** - -1 退订 - 0 正常 - 1 冻结 - 2 终止 - 3 受限 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets runStatus
    *  **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param int|null $runStatus **参数解释：** 实例运行状态 **约束限制：** 不涉及 **取值范围：** - 0 创建中 - 1 运行中 - 2 删除中 - 3 已删除 - 4 创建失败 - 5 已冻结 - 6 异常 - 7 更新中 - 8 更新失败 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets accessStatus
    *  **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
    * Sets accessStatus
    *
    * @param int|null $accessStatus **参数解释：** 实例接入状态 **约束限制：** 不涉及 **取值范围：** - 0 未接入 - 1 已接入 - 2 DNS解析异常 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;
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

