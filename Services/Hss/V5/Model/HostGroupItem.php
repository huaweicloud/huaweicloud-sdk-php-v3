<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostGroupItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostGroupItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    * unprotectHostNum  **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * isOutside  **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'groupName' => 'string',
            'hostNum' => 'int',
            'riskHostNum' => 'int',
            'unprotectHostNum' => 'int',
            'hostIdList' => 'string[]',
            'isOutside' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    * unprotectHostNum  **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * isOutside  **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'groupName' => null,
        'hostNum' => 'int32',
        'riskHostNum' => 'int32',
        'unprotectHostNum' => 'int32',
        'hostIdList' => null,
        'isOutside' => null
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
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    * unprotectHostNum  **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * isOutside  **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'hostNum' => 'host_num',
            'riskHostNum' => 'risk_host_num',
            'unprotectHostNum' => 'unprotect_host_num',
            'hostIdList' => 'host_id_list',
            'isOutside' => 'is_outside'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    * unprotectHostNum  **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * isOutside  **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'hostNum' => 'setHostNum',
            'riskHostNum' => 'setRiskHostNum',
            'unprotectHostNum' => 'setUnprotectHostNum',
            'hostIdList' => 'setHostIdList',
            'isOutside' => 'setIsOutside'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    * hostNum  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    * riskHostNum  **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    * unprotectHostNum  **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    * hostIdList  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    * isOutside  **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'hostNum' => 'getHostNum',
            'riskHostNum' => 'getRiskHostNum',
            'unprotectHostNum' => 'getUnprotectHostNum',
            'hostIdList' => 'getHostIdList',
            'isOutside' => 'getIsOutside'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['riskHostNum'] = isset($data['riskHostNum']) ? $data['riskHostNum'] : null;
        $this->container['unprotectHostNum'] = isset($data['unprotectHostNum']) ? $data['unprotectHostNum'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['isOutside'] = isset($data['isOutside']) ? $data['isOutside'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskHostNum']) && ($this->container['riskHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'riskHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['riskHostNum']) && ($this->container['riskHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unprotectHostNum']) && ($this->container['unprotectHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unprotectHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unprotectHostNum']) && ($this->container['unprotectHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unprotectHostNum', must be bigger than or equal to 0.";
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
    * Gets groupId
    *  **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**: 服务器组ID **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 影响主机数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets riskHostNum
    *  **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    *
    * @return int|null
    */
    public function getRiskHostNum()
    {
        return $this->container['riskHostNum'];
    }

    /**
    * Sets riskHostNum
    *
    * @param int|null $riskHostNum **参数解释**: 有风险服务器数 **取值范围**: 0到2147483647
    *
    * @return $this
    */
    public function setRiskHostNum($riskHostNum)
    {
        $this->container['riskHostNum'] = $riskHostNum;
        return $this;
    }

    /**
    * Gets unprotectHostNum
    *  **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    *
    * @return int|null
    */
    public function getUnprotectHostNum()
    {
        return $this->container['unprotectHostNum'];
    }

    /**
    * Sets unprotectHostNum
    *
    * @param int|null $unprotectHostNum **参数解释**: 未防护服务器数 **取值范围**: 0到2147483647
    *
    * @return $this
    */
    public function setUnprotectHostNum($unprotectHostNum)
    {
        $this->container['unprotectHostNum'] = $unprotectHostNum;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**: 服务器ID列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets isOutside
    *  **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @return bool|null
    */
    public function getIsOutside()
    {
        return $this->container['isOutside'];
    }

    /**
    * Sets isOutside
    *
    * @param bool|null $isOutside **参数解释**: 是否是线下数据中心服务器组 **取值范围**: true或者false
    *
    * @return $this
    */
    public function setIsOutside($isOutside)
    {
        $this->container['isOutside'] = $isOutside;
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

