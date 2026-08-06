<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKeyPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKeyPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policyName  **参数解释：** 密钥策略名称 **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    * lastAccessTime  **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policyName' => 'string',
            'keyspaceId' => 'string',
            'policy' => '\HuaweiCloud\SDK\Kms\V2\Model\ShowKeyPolicyResponseBodyPolicy',
            'description' => 'string',
            'createdBy' => 'string',
            'createTime' => 'string',
            'lastModifyTime' => 'string',
            'lastAccessTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policyName  **参数解释：** 密钥策略名称 **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    * lastAccessTime  **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policyName' => null,
        'keyspaceId' => null,
        'policy' => null,
        'description' => null,
        'createdBy' => null,
        'createTime' => null,
        'lastModifyTime' => null,
        'lastAccessTime' => null
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
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policyName  **参数解释：** 密钥策略名称 **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    * lastAccessTime  **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'keyspaceId' => 'keyspace_id',
            'policy' => 'policy',
            'description' => 'description',
            'createdBy' => 'created_by',
            'createTime' => 'create_time',
            'lastModifyTime' => 'last_modify_time',
            'lastAccessTime' => 'last_access_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policyName  **参数解释：** 密钥策略名称 **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    * lastAccessTime  **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'keyspaceId' => 'setKeyspaceId',
            'policy' => 'setPolicy',
            'description' => 'setDescription',
            'createdBy' => 'setCreatedBy',
            'createTime' => 'setCreateTime',
            'lastModifyTime' => 'setLastModifyTime',
            'lastAccessTime' => 'setLastAccessTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policyName  **参数解释：** 密钥策略名称 **取值范围：** 不涉及
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    * lastAccessTime  **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'keyspaceId' => 'getKeyspaceId',
            'policy' => 'getPolicy',
            'description' => 'getDescription',
            'createdBy' => 'getCreatedBy',
            'createTime' => 'getCreateTime',
            'lastModifyTime' => 'getLastModifyTime',
            'lastAccessTime' => 'getLastAccessTime'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['keyspaceId'] = isset($data['keyspaceId']) ? $data['keyspaceId'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
        $this->container['lastAccessTime'] = isset($data['lastAccessTime']) ? $data['lastAccessTime'] : null;
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
    * Gets policyId
    *  **参数解释：** 密钥策略ID **取值范围：** 不涉及
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
    * @param string|null $policyId **参数解释：** 密钥策略ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  **参数解释：** 密钥策略名称 **取值范围：** 不涉及
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
    * @param string|null $policyName **参数解释：** 密钥策略名称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets keyspaceId
    *  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getKeyspaceId()
    {
        return $this->container['keyspaceId'];
    }

    /**
    * Sets keyspaceId
    *
    * @param string|null $keyspaceId **参数解释：** 密钥空间ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setKeyspaceId($keyspaceId)
    {
        $this->container['keyspaceId'] = $keyspaceId;
        return $this;
    }

    /**
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Kms\V2\Model\ShowKeyPolicyResponseBodyPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Kms\V2\Model\ShowKeyPolicyResponseBodyPolicy|null $policy policy
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy **参数解释：** 密钥策略创建人 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime **参数解释：** 密钥策略创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastModifyTime
    *  **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
    * Sets lastModifyTime
    *
    * @param string|null $lastModifyTime **参数解释：** 密钥策略最近修改时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;
        return $this;
    }

    /**
    * Gets lastAccessTime
    *  **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getLastAccessTime()
    {
        return $this->container['lastAccessTime'];
    }

    /**
    * Sets lastAccessTime
    *
    * @param string|null $lastAccessTime **参数解释：** 密钥策略最近访问时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->container['lastAccessTime'] = $lastAccessTime;
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

