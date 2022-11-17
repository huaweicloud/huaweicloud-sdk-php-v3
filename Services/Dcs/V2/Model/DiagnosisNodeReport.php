<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisNodeReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisNodeReport';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeIp  节点IP。例如：192.168.0.234:6379
    * azCode  节点所在可用区Code
    * groupName  节点所在分片的名称
    * abnormalSum  诊断结果为异常的诊断项总数
    * failedSum  诊断失败的诊断项总数
    * role  节点角色
    * diagnosisDimensionList  诊断维度列表
    * commandTimeTakenList  commandTimeTakenList
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeIp' => 'string',
            'azCode' => 'string',
            'groupName' => 'string',
            'abnormalSum' => 'int',
            'failedSum' => 'int',
            'role' => 'string',
            'diagnosisDimensionList' => '\HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisDimension[]',
            'commandTimeTakenList' => '\HuaweiCloud\SDK\Dcs\V2\Model\CommandTimeTakenList'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeIp  节点IP。例如：192.168.0.234:6379
    * azCode  节点所在可用区Code
    * groupName  节点所在分片的名称
    * abnormalSum  诊断结果为异常的诊断项总数
    * failedSum  诊断失败的诊断项总数
    * role  节点角色
    * diagnosisDimensionList  诊断维度列表
    * commandTimeTakenList  commandTimeTakenList
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeIp' => null,
        'azCode' => null,
        'groupName' => null,
        'abnormalSum' => 'int32',
        'failedSum' => 'int32',
        'role' => null,
        'diagnosisDimensionList' => null,
        'commandTimeTakenList' => null
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
    * nodeIp  节点IP。例如：192.168.0.234:6379
    * azCode  节点所在可用区Code
    * groupName  节点所在分片的名称
    * abnormalSum  诊断结果为异常的诊断项总数
    * failedSum  诊断失败的诊断项总数
    * role  节点角色
    * diagnosisDimensionList  诊断维度列表
    * commandTimeTakenList  commandTimeTakenList
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeIp' => 'node_ip',
            'azCode' => 'az_code',
            'groupName' => 'group_name',
            'abnormalSum' => 'abnormal_sum',
            'failedSum' => 'failed_sum',
            'role' => 'role',
            'diagnosisDimensionList' => 'diagnosis_dimension_list',
            'commandTimeTakenList' => 'command_time_taken_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeIp  节点IP。例如：192.168.0.234:6379
    * azCode  节点所在可用区Code
    * groupName  节点所在分片的名称
    * abnormalSum  诊断结果为异常的诊断项总数
    * failedSum  诊断失败的诊断项总数
    * role  节点角色
    * diagnosisDimensionList  诊断维度列表
    * commandTimeTakenList  commandTimeTakenList
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeIp' => 'setNodeIp',
            'azCode' => 'setAzCode',
            'groupName' => 'setGroupName',
            'abnormalSum' => 'setAbnormalSum',
            'failedSum' => 'setFailedSum',
            'role' => 'setRole',
            'diagnosisDimensionList' => 'setDiagnosisDimensionList',
            'commandTimeTakenList' => 'setCommandTimeTakenList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeIp  节点IP。例如：192.168.0.234:6379
    * azCode  节点所在可用区Code
    * groupName  节点所在分片的名称
    * abnormalSum  诊断结果为异常的诊断项总数
    * failedSum  诊断失败的诊断项总数
    * role  节点角色
    * diagnosisDimensionList  诊断维度列表
    * commandTimeTakenList  commandTimeTakenList
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeIp' => 'getNodeIp',
            'azCode' => 'getAzCode',
            'groupName' => 'getGroupName',
            'abnormalSum' => 'getAbnormalSum',
            'failedSum' => 'getFailedSum',
            'role' => 'getRole',
            'diagnosisDimensionList' => 'getDiagnosisDimensionList',
            'commandTimeTakenList' => 'getCommandTimeTakenList'
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
    const ROLE_MASTER = 'master';
    const ROLE_SLAVE = 'slave';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_MASTER,
            self::ROLE_SLAVE,
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
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['abnormalSum'] = isset($data['abnormalSum']) ? $data['abnormalSum'] : null;
        $this->container['failedSum'] = isset($data['failedSum']) ? $data['failedSum'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['diagnosisDimensionList'] = isset($data['diagnosisDimensionList']) ? $data['diagnosisDimensionList'] : null;
        $this->container['commandTimeTakenList'] = isset($data['commandTimeTakenList']) ? $data['commandTimeTakenList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeIp'] === null) {
            $invalidProperties[] = "'nodeIp' can't be null";
        }
        if ($this->container['azCode'] === null) {
            $invalidProperties[] = "'azCode' can't be null";
        }
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
        if ($this->container['abnormalSum'] === null) {
            $invalidProperties[] = "'abnormalSum' can't be null";
        }
        if ($this->container['failedSum'] === null) {
            $invalidProperties[] = "'failedSum' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
            $allowedValues = $this->getRoleAllowableValues();
                if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['diagnosisDimensionList'] === null) {
            $invalidProperties[] = "'diagnosisDimensionList' can't be null";
        }
        if ($this->container['commandTimeTakenList'] === null) {
            $invalidProperties[] = "'commandTimeTakenList' can't be null";
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
    * Gets nodeIp
    *  节点IP。例如：192.168.0.234:6379
    *
    * @return string
    */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
    * Sets nodeIp
    *
    * @param string $nodeIp 节点IP。例如：192.168.0.234:6379
    *
    * @return $this
    */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;
        return $this;
    }

    /**
    * Gets azCode
    *  节点所在可用区Code
    *
    * @return string
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string $azCode 节点所在可用区Code
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets groupName
    *  节点所在分片的名称
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 节点所在分片的名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets abnormalSum
    *  诊断结果为异常的诊断项总数
    *
    * @return int
    */
    public function getAbnormalSum()
    {
        return $this->container['abnormalSum'];
    }

    /**
    * Sets abnormalSum
    *
    * @param int $abnormalSum 诊断结果为异常的诊断项总数
    *
    * @return $this
    */
    public function setAbnormalSum($abnormalSum)
    {
        $this->container['abnormalSum'] = $abnormalSum;
        return $this;
    }

    /**
    * Gets failedSum
    *  诊断失败的诊断项总数
    *
    * @return int
    */
    public function getFailedSum()
    {
        return $this->container['failedSum'];
    }

    /**
    * Sets failedSum
    *
    * @param int $failedSum 诊断失败的诊断项总数
    *
    * @return $this
    */
    public function setFailedSum($failedSum)
    {
        $this->container['failedSum'] = $failedSum;
        return $this;
    }

    /**
    * Gets role
    *  节点角色
    *
    * @return string
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string $role 节点角色
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets diagnosisDimensionList
    *  诊断维度列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisDimension[]
    */
    public function getDiagnosisDimensionList()
    {
        return $this->container['diagnosisDimensionList'];
    }

    /**
    * Sets diagnosisDimensionList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisDimension[] $diagnosisDimensionList 诊断维度列表
    *
    * @return $this
    */
    public function setDiagnosisDimensionList($diagnosisDimensionList)
    {
        $this->container['diagnosisDimensionList'] = $diagnosisDimensionList;
        return $this;
    }

    /**
    * Gets commandTimeTakenList
    *  commandTimeTakenList
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\CommandTimeTakenList
    */
    public function getCommandTimeTakenList()
    {
        return $this->container['commandTimeTakenList'];
    }

    /**
    * Sets commandTimeTakenList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\CommandTimeTakenList $commandTimeTakenList commandTimeTakenList
    *
    * @return $this
    */
    public function setCommandTimeTakenList($commandTimeTakenList)
    {
        $this->container['commandTimeTakenList'] = $commandTimeTakenList;
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

