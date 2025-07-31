<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyListDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyList_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * policyId  策略ID
    * hostNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * isDefault  是否默认
    * portList  端口列表
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    * status  防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'policyId' => 'string',
            'hostNum' => 'int',
            'isDefault' => 'bool',
            'portList' => 'int[]',
            'osType' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * policyId  策略ID
    * hostNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * isDefault  是否默认
    * portList  端口列表
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    * status  防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'policyId' => null,
        'hostNum' => 'int32',
        'isDefault' => null,
        'portList' => null,
        'osType' => null,
        'status' => null
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
    * policyName  策略名称
    * policyId  策略ID
    * hostNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * isDefault  是否默认
    * portList  端口列表
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    * status  防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'policyId' => 'policy_id',
            'hostNum' => 'host_num',
            'isDefault' => 'is_default',
            'portList' => 'port_list',
            'osType' => 'os_type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * policyId  策略ID
    * hostNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * isDefault  是否默认
    * portList  端口列表
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    * status  防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'policyId' => 'setPolicyId',
            'hostNum' => 'setHostNum',
            'isDefault' => 'setIsDefault',
            'portList' => 'setPortList',
            'osType' => 'setOsType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * policyId  策略ID
    * hostNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    * isDefault  是否默认
    * portList  端口列表
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    * status  防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'policyId' => 'getPolicyId',
            'hostNum' => 'getHostNum',
            'isDefault' => 'getIsDefault',
            'portList' => 'getPortList',
            'osType' => 'getOsType',
            'status' => 'getStatus'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['portList'] = isset($data['portList']) ? $data['portList'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyName']) && (mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyName']) && !preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyId']) && !preg_match("/^.*$/", $this->container['policyId'])) {
                $invalidProperties[] = "invalid value for 'policyId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^Linux|Windows$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^Linux|Windows$/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^applying|success|disable$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^applying|success|disable$/.";
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
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $hostNum **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否默认
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault 是否默认
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets portList
    *  端口列表
    *
    * @return int[]|null
    */
    public function getPortList()
    {
        return $this->container['portList'];
    }

    /**
    * Sets portList
    *
    * @param int[]|null $portList 端口列表
    *
    * @return $this
    */
    public function setPortList($portList)
    {
        $this->container['portList'] = $portList;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Winodws.
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets status
    *  防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
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
    * @param string|null $status 防护状态，包含如下3种 - applying ：生效中 - success ：已生效 - disable ：未生效
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

