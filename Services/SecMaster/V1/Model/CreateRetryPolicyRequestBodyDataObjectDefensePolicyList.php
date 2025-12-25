<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRetryPolicyRequestBodyDataObjectDefensePolicyList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRetryPolicyRequestBody_data_object_defense_policy_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defenseConnectionId  操作连接ID
    * defenseConnectionName  操作连接名称
    * defenseConnectionRegionId  防线策略归属区域ID
    * defenseConnectionRegionName  防线策略归属区域名称
    * defenseType  防线服务
    * targetEnterpriseId  企业项目ID
    * targetEnterpriseName  企业项目名称
    * targetProjectId  防线策略归属项目ID
    * targetProjectName  防线策略归属项目名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defenseConnectionId' => 'string',
            'defenseConnectionName' => 'string',
            'defenseConnectionRegionId' => 'string',
            'defenseConnectionRegionName' => 'string',
            'defenseType' => 'string',
            'targetEnterpriseId' => 'string',
            'targetEnterpriseName' => 'string',
            'targetProjectId' => 'string',
            'targetProjectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defenseConnectionId  操作连接ID
    * defenseConnectionName  操作连接名称
    * defenseConnectionRegionId  防线策略归属区域ID
    * defenseConnectionRegionName  防线策略归属区域名称
    * defenseType  防线服务
    * targetEnterpriseId  企业项目ID
    * targetEnterpriseName  企业项目名称
    * targetProjectId  防线策略归属项目ID
    * targetProjectName  防线策略归属项目名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defenseConnectionId' => null,
        'defenseConnectionName' => null,
        'defenseConnectionRegionId' => null,
        'defenseConnectionRegionName' => null,
        'defenseType' => null,
        'targetEnterpriseId' => null,
        'targetEnterpriseName' => null,
        'targetProjectId' => null,
        'targetProjectName' => null
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
    * defenseConnectionId  操作连接ID
    * defenseConnectionName  操作连接名称
    * defenseConnectionRegionId  防线策略归属区域ID
    * defenseConnectionRegionName  防线策略归属区域名称
    * defenseType  防线服务
    * targetEnterpriseId  企业项目ID
    * targetEnterpriseName  企业项目名称
    * targetProjectId  防线策略归属项目ID
    * targetProjectName  防线策略归属项目名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defenseConnectionId' => 'defense_connection_id',
            'defenseConnectionName' => 'defense_connection_name',
            'defenseConnectionRegionId' => 'defense_connection_region_id',
            'defenseConnectionRegionName' => 'defense_connection_region_name',
            'defenseType' => 'defense_type',
            'targetEnterpriseId' => 'target_enterprise_id',
            'targetEnterpriseName' => 'target_enterprise_name',
            'targetProjectId' => 'target_project_id',
            'targetProjectName' => 'target_project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defenseConnectionId  操作连接ID
    * defenseConnectionName  操作连接名称
    * defenseConnectionRegionId  防线策略归属区域ID
    * defenseConnectionRegionName  防线策略归属区域名称
    * defenseType  防线服务
    * targetEnterpriseId  企业项目ID
    * targetEnterpriseName  企业项目名称
    * targetProjectId  防线策略归属项目ID
    * targetProjectName  防线策略归属项目名称
    *
    * @var string[]
    */
    protected static $setters = [
            'defenseConnectionId' => 'setDefenseConnectionId',
            'defenseConnectionName' => 'setDefenseConnectionName',
            'defenseConnectionRegionId' => 'setDefenseConnectionRegionId',
            'defenseConnectionRegionName' => 'setDefenseConnectionRegionName',
            'defenseType' => 'setDefenseType',
            'targetEnterpriseId' => 'setTargetEnterpriseId',
            'targetEnterpriseName' => 'setTargetEnterpriseName',
            'targetProjectId' => 'setTargetProjectId',
            'targetProjectName' => 'setTargetProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defenseConnectionId  操作连接ID
    * defenseConnectionName  操作连接名称
    * defenseConnectionRegionId  防线策略归属区域ID
    * defenseConnectionRegionName  防线策略归属区域名称
    * defenseType  防线服务
    * targetEnterpriseId  企业项目ID
    * targetEnterpriseName  企业项目名称
    * targetProjectId  防线策略归属项目ID
    * targetProjectName  防线策略归属项目名称
    *
    * @var string[]
    */
    protected static $getters = [
            'defenseConnectionId' => 'getDefenseConnectionId',
            'defenseConnectionName' => 'getDefenseConnectionName',
            'defenseConnectionRegionId' => 'getDefenseConnectionRegionId',
            'defenseConnectionRegionName' => 'getDefenseConnectionRegionName',
            'defenseType' => 'getDefenseType',
            'targetEnterpriseId' => 'getTargetEnterpriseId',
            'targetEnterpriseName' => 'getTargetEnterpriseName',
            'targetProjectId' => 'getTargetProjectId',
            'targetProjectName' => 'getTargetProjectName'
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
        $this->container['defenseConnectionId'] = isset($data['defenseConnectionId']) ? $data['defenseConnectionId'] : null;
        $this->container['defenseConnectionName'] = isset($data['defenseConnectionName']) ? $data['defenseConnectionName'] : null;
        $this->container['defenseConnectionRegionId'] = isset($data['defenseConnectionRegionId']) ? $data['defenseConnectionRegionId'] : null;
        $this->container['defenseConnectionRegionName'] = isset($data['defenseConnectionRegionName']) ? $data['defenseConnectionRegionName'] : null;
        $this->container['defenseType'] = isset($data['defenseType']) ? $data['defenseType'] : null;
        $this->container['targetEnterpriseId'] = isset($data['targetEnterpriseId']) ? $data['targetEnterpriseId'] : null;
        $this->container['targetEnterpriseName'] = isset($data['targetEnterpriseName']) ? $data['targetEnterpriseName'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
        $this->container['targetProjectName'] = isset($data['targetProjectName']) ? $data['targetProjectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['defenseConnectionId'] === null) {
            $invalidProperties[] = "'defenseConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['defenseConnectionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['defenseConnectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defenseConnectionName'] === null) {
            $invalidProperties[] = "'defenseConnectionName' can't be null";
        }
            if ((mb_strlen($this->container['defenseConnectionName']) > 30)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionName', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['defenseConnectionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defenseConnectionRegionId'] === null) {
            $invalidProperties[] = "'defenseConnectionRegionId' can't be null";
        }
            if ((mb_strlen($this->container['defenseConnectionRegionId']) > 30)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionRegionId', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['defenseConnectionRegionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionRegionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defenseConnectionRegionName'] === null) {
            $invalidProperties[] = "'defenseConnectionRegionName' can't be null";
        }
            if ((mb_strlen($this->container['defenseConnectionRegionName']) > 30)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionRegionName', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['defenseConnectionRegionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'defenseConnectionRegionName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['defenseType'] === null) {
            $invalidProperties[] = "'defenseType' can't be null";
        }
            if ((mb_strlen($this->container['defenseType']) > 30)) {
                $invalidProperties[] = "invalid value for 'defenseType', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['defenseType']) < 0)) {
                $invalidProperties[] = "invalid value for 'defenseType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetEnterpriseId'] === null) {
            $invalidProperties[] = "'targetEnterpriseId' can't be null";
        }
            if ((mb_strlen($this->container['targetEnterpriseId']) > 30)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseId', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['targetEnterpriseId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetEnterpriseName'] === null) {
            $invalidProperties[] = "'targetEnterpriseName' can't be null";
        }
            if ((mb_strlen($this->container['targetEnterpriseName']) > 30)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseName', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['targetEnterpriseName']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetEnterpriseName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetProjectId'] === null) {
            $invalidProperties[] = "'targetProjectId' can't be null";
        }
            if ((mb_strlen($this->container['targetProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['targetProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetProjectName'] === null) {
            $invalidProperties[] = "'targetProjectName' can't be null";
        }
            if ((mb_strlen($this->container['targetProjectName']) > 30)) {
                $invalidProperties[] = "invalid value for 'targetProjectName', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['targetProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetProjectName', the character length must be bigger than or equal to 0.";
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
    * Gets defenseConnectionId
    *  操作连接ID
    *
    * @return string
    */
    public function getDefenseConnectionId()
    {
        return $this->container['defenseConnectionId'];
    }

    /**
    * Sets defenseConnectionId
    *
    * @param string $defenseConnectionId 操作连接ID
    *
    * @return $this
    */
    public function setDefenseConnectionId($defenseConnectionId)
    {
        $this->container['defenseConnectionId'] = $defenseConnectionId;
        return $this;
    }

    /**
    * Gets defenseConnectionName
    *  操作连接名称
    *
    * @return string
    */
    public function getDefenseConnectionName()
    {
        return $this->container['defenseConnectionName'];
    }

    /**
    * Sets defenseConnectionName
    *
    * @param string $defenseConnectionName 操作连接名称
    *
    * @return $this
    */
    public function setDefenseConnectionName($defenseConnectionName)
    {
        $this->container['defenseConnectionName'] = $defenseConnectionName;
        return $this;
    }

    /**
    * Gets defenseConnectionRegionId
    *  防线策略归属区域ID
    *
    * @return string
    */
    public function getDefenseConnectionRegionId()
    {
        return $this->container['defenseConnectionRegionId'];
    }

    /**
    * Sets defenseConnectionRegionId
    *
    * @param string $defenseConnectionRegionId 防线策略归属区域ID
    *
    * @return $this
    */
    public function setDefenseConnectionRegionId($defenseConnectionRegionId)
    {
        $this->container['defenseConnectionRegionId'] = $defenseConnectionRegionId;
        return $this;
    }

    /**
    * Gets defenseConnectionRegionName
    *  防线策略归属区域名称
    *
    * @return string
    */
    public function getDefenseConnectionRegionName()
    {
        return $this->container['defenseConnectionRegionName'];
    }

    /**
    * Sets defenseConnectionRegionName
    *
    * @param string $defenseConnectionRegionName 防线策略归属区域名称
    *
    * @return $this
    */
    public function setDefenseConnectionRegionName($defenseConnectionRegionName)
    {
        $this->container['defenseConnectionRegionName'] = $defenseConnectionRegionName;
        return $this;
    }

    /**
    * Gets defenseType
    *  防线服务
    *
    * @return string
    */
    public function getDefenseType()
    {
        return $this->container['defenseType'];
    }

    /**
    * Sets defenseType
    *
    * @param string $defenseType 防线服务
    *
    * @return $this
    */
    public function setDefenseType($defenseType)
    {
        $this->container['defenseType'] = $defenseType;
        return $this;
    }

    /**
    * Gets targetEnterpriseId
    *  企业项目ID
    *
    * @return string
    */
    public function getTargetEnterpriseId()
    {
        return $this->container['targetEnterpriseId'];
    }

    /**
    * Sets targetEnterpriseId
    *
    * @param string $targetEnterpriseId 企业项目ID
    *
    * @return $this
    */
    public function setTargetEnterpriseId($targetEnterpriseId)
    {
        $this->container['targetEnterpriseId'] = $targetEnterpriseId;
        return $this;
    }

    /**
    * Gets targetEnterpriseName
    *  企业项目名称
    *
    * @return string
    */
    public function getTargetEnterpriseName()
    {
        return $this->container['targetEnterpriseName'];
    }

    /**
    * Sets targetEnterpriseName
    *
    * @param string $targetEnterpriseName 企业项目名称
    *
    * @return $this
    */
    public function setTargetEnterpriseName($targetEnterpriseName)
    {
        $this->container['targetEnterpriseName'] = $targetEnterpriseName;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  防线策略归属项目ID
    *
    * @return string
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string $targetProjectId 防线策略归属项目ID
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
        return $this;
    }

    /**
    * Gets targetProjectName
    *  防线策略归属项目名称
    *
    * @return string
    */
    public function getTargetProjectName()
    {
        return $this->container['targetProjectName'];
    }

    /**
    * Sets targetProjectName
    *
    * @param string $targetProjectName 防线策略归属项目名称
    *
    * @return $this
    */
    public function setTargetProjectName($targetProjectName)
    {
        $this->container['targetProjectName'] = $targetProjectName;
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

