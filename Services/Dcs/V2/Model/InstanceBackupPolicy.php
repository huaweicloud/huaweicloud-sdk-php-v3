<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceBackupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceBackupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupPolicyId  备份策略ID
    * createdAt  创建时间。格式为：2022-04-11T09:45:24.790Z
    * updatedAt  更新时间。格式为：2022-04-12T02:22:03.269Z
    * policy  policy
    * tenantId  租户ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupPolicyId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'policy' => '\HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy',
            'tenantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupPolicyId  备份策略ID
    * createdAt  创建时间。格式为：2022-04-11T09:45:24.790Z
    * updatedAt  更新时间。格式为：2022-04-12T02:22:03.269Z
    * policy  policy
    * tenantId  租户ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupPolicyId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'policy' => null,
        'tenantId' => null
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
    * backupPolicyId  备份策略ID
    * createdAt  创建时间。格式为：2022-04-11T09:45:24.790Z
    * updatedAt  更新时间。格式为：2022-04-12T02:22:03.269Z
    * policy  policy
    * tenantId  租户ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupPolicyId' => 'backup_policy_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'policy' => 'policy',
            'tenantId' => 'tenant_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupPolicyId  备份策略ID
    * createdAt  创建时间。格式为：2022-04-11T09:45:24.790Z
    * updatedAt  更新时间。格式为：2022-04-12T02:22:03.269Z
    * policy  policy
    * tenantId  租户ID
    *
    * @var string[]
    */
    protected static $setters = [
            'backupPolicyId' => 'setBackupPolicyId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'policy' => 'setPolicy',
            'tenantId' => 'setTenantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupPolicyId  备份策略ID
    * createdAt  创建时间。格式为：2022-04-11T09:45:24.790Z
    * updatedAt  更新时间。格式为：2022-04-12T02:22:03.269Z
    * policy  policy
    * tenantId  租户ID
    *
    * @var string[]
    */
    protected static $getters = [
            'backupPolicyId' => 'getBackupPolicyId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'policy' => 'getPolicy',
            'tenantId' => 'getTenantId'
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
        $this->container['backupPolicyId'] = isset($data['backupPolicyId']) ? $data['backupPolicyId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets backupPolicyId
    *  备份策略ID
    *
    * @return string|null
    */
    public function getBackupPolicyId()
    {
        return $this->container['backupPolicyId'];
    }

    /**
    * Sets backupPolicyId
    *
    * @param string|null $backupPolicyId 备份策略ID
    *
    * @return $this
    */
    public function setBackupPolicyId($backupPolicyId)
    {
        $this->container['backupPolicyId'] = $backupPolicyId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。格式为：2022-04-11T09:45:24.790Z
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。格式为：2022-04-11T09:45:24.790Z
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。格式为：2022-04-12T02:22:03.269Z
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间。格式为：2022-04-12T02:22:03.269Z
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy|null $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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

