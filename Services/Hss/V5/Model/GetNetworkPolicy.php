<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetNetworkPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetNetworkPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  策略Id
    * name  策略名称
    * namespace  命名空间
    * policyContent  policyContent
    * createTime  创建时间
    * deployStatus  下发策略到cce成功与否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'policyContent' => '\HuaweiCloud\SDK\Hss\V5\Model\NetworkPolicyBody',
            'createTime' => '\DateTime',
            'deployStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  策略Id
    * name  策略名称
    * namespace  命名空间
    * policyContent  policyContent
    * createTime  创建时间
    * deployStatus  下发策略到cce成功与否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'name' => null,
        'namespace' => null,
        'policyContent' => null,
        'createTime' => 'date-time',
        'deployStatus' => null
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
    * policyId  策略Id
    * name  策略名称
    * namespace  命名空间
    * policyContent  policyContent
    * createTime  创建时间
    * deployStatus  下发策略到cce成功与否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'name' => 'name',
            'namespace' => 'namespace',
            'policyContent' => 'policy_content',
            'createTime' => 'create_time',
            'deployStatus' => 'deploy_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  策略Id
    * name  策略名称
    * namespace  命名空间
    * policyContent  policyContent
    * createTime  创建时间
    * deployStatus  下发策略到cce成功与否
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'policyContent' => 'setPolicyContent',
            'createTime' => 'setCreateTime',
            'deployStatus' => 'setDeployStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  策略Id
    * name  策略名称
    * namespace  命名空间
    * policyContent  policyContent
    * createTime  创建时间
    * deployStatus  下发策略到cce成功与否
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'policyContent' => 'getPolicyContent',
            'createTime' => 'getCreateTime',
            'deployStatus' => 'getDeployStatus'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['policyContent'] = isset($data['policyContent']) ? $data['policyContent'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deployStatus'] = isset($data['deployStatus']) ? $data['deployStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
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
    * Gets policyId
    *  策略Id
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
    * @param string|null $policyId 策略Id
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets name
    *  策略名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets policyContent
    *  policyContent
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\NetworkPolicyBody|null
    */
    public function getPolicyContent()
    {
        return $this->container['policyContent'];
    }

    /**
    * Sets policyContent
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\NetworkPolicyBody|null $policyContent policyContent
    *
    * @return $this
    */
    public function setPolicyContent($policyContent)
    {
        $this->container['policyContent'] = $policyContent;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deployStatus
    *  下发策略到cce成功与否
    *
    * @return bool|null
    */
    public function getDeployStatus()
    {
        return $this->container['deployStatus'];
    }

    /**
    * Sets deployStatus
    *
    * @param bool|null $deployStatus 下发策略到cce成功与否
    *
    * @return $this
    */
    public function setDeployStatus($deployStatus)
    {
        $this->container['deployStatus'] = $deployStatus;
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

