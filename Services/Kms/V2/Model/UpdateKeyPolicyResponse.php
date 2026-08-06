<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKeyPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKeyPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'policy' => '\HuaweiCloud\SDK\Kms\V2\Model\UpdateKeyPolicyResponseBodyPolicy',
            'description' => 'string',
            'lastModifyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'policy' => null,
        'description' => null,
        'lastModifyTime' => null
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
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'policy' => 'policy',
            'description' => 'description',
            'lastModifyTime' => 'last_modify_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'policy' => 'setPolicy',
            'description' => 'setDescription',
            'lastModifyTime' => 'setLastModifyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释：** 密钥策略ID **取值范围：** 不涉及
    * policy  policy
    * description  **参数解释：** 密钥策略描述信息 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'policy' => 'getPolicy',
            'description' => 'getDescription',
            'lastModifyTime' => 'getLastModifyTime'
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
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
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
    * Gets policy
    *  policy
    *
    * @return \HuaweiCloud\SDK\Kms\V2\Model\UpdateKeyPolicyResponseBodyPolicy|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param \HuaweiCloud\SDK\Kms\V2\Model\UpdateKeyPolicyResponseBodyPolicy|null $policy policy
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
    * Gets lastModifyTime
    *  **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
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
    * @param string|null $lastModifyTime **参数解释：** 密钥策略最近更新时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;
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

